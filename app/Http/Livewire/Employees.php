<?php

namespace App\Http\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Session;
class Employees extends Component
{

public $name, $email, $employee_id, $edit=false;
 

   
public function resetInputFields(){
    $this->name="";
    $this->email="";
}


public function create(){
    $this->create=true;
   
}





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






    public function edit($id){
       
         $edit_employee = User::find($id);
         $this->name = $edit_employee->name; 
         $this->email = $edit_employee->email;  
         $this->employee_id = $edit_employee->id; 
         $this->edit=true;
        
    }




    

    public function update($id){
       
        $employee_update = User::find($id);
        $employee_update->name = $this->name; 
        $employee_update->email = $this->email;  
        $employee_update->save();
        $this->edit=false;
        Session::flash('update', 'Employee Updated successfully');
        $this->resetInputFields(); 
       

   }


   public function destroy($id){
       $delete_employee=User::find($id)->delete();
       Session::flash('destroy', 'Employee Deleted successfully');
   }







    public function render()
    {
      $employees = User::latest()->paginate(5);
      return view('livewire.employees',compact('employees'));
    }



    
}
