<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Session;
class Employees extends Component
{




    
/**
     * 
     * Attributes
     *
     * 
*/

public $name, $email, $employee_id;
 




/**
     * 
     * Reset Input Fields
     *
     * 
*/
   
public function resetInputFields(){
    $this->name="";
    $this->email="";
}




/**
     * Store the login credentials of Employee.
     *
     * 
*/


    public function store(){
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
           ]);
          Session::flash('success', 'Employee Created successfully');
          $this->resetInputFields(); 
          
    }





/**
     * Retrieve the login credentials of Employee before Edit.
     * Show these credentials in the edit Employee Form
     * 
*/

    public function edit($id){
       
         $edit_employee = User::find($id);
         $this->name = $edit_employee->name; 
         $this->email = $edit_employee->email;  
         $this->employee_id = $edit_employee->id; 
         $this->emit('edit');
        
    }



    

    
/**
     * 
     * 
     * Update the login credentials of Employee.
     * 
     *
     * 
*/

    public function update(){

        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         ]);
       
        $employee_update = User::find($this->employee_id);
        $employee_update->update([
        'name'=>  $this->name,
        'email' => $this->email,
        ]);
        
        Session::flash('update', 'Employee Updated successfully');
        $this->resetInputFields(); 
       

   }





   
/**
     * 
     * Delete Employ
     *
     * 
*/

   public function destroy($id){
       $delete_employee=User::find($id)->delete();
       Session::flash('destroy', 'Employee Deleted successfully');
   }







   
/**
     * 
     * Display the Employees List in descending order 
     * From Latest to oldest
     *
     * 
*/

    public function render()
    {
      $employees = User::latest()->paginate(5);
      return view('livewire.employees',compact('employees'));
    }



    
}
