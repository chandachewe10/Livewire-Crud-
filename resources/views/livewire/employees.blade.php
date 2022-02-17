<x-app-layout>
 
<div class="container shadow p-3 mb-5 bg-white rounded">
 

<div>
<center>
   
   <h3 style="font-weight:bold;font-size:20px">Employees List </h3>
  
         <br>    
         
         <!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Employee  
</button>
<br>

<!--Successs for Employee Addition-->
@if (session()->has('success'))
          
          {{ session::get('success')}} 
                            
                        @endif

                        
<!--Successs for Employee Deletion-->
@if (session()->has('destroy'))
          
          {{ session::get('destroy')}} 
                            
                        @endif


                                             
<!--Successs for Employee Update-->
@if (session()->has('update'))
          
          {{ session::get('update')}} 
                            
                        @endif
<br><br>



<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

</center>
</div>

<div class="container shadow p-3 mb-5 bg-white rounded">
@include('livewire.create')

 
<br>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTION</th>
           </tr>
  </thead>
  

  <tbody>
   
  @foreach($employees as $employee)
  
  
  <tr>
  
    <td>{{$employee->name}}</td>
    <td>{{$employee->email}}</td>
   <td>
     <button class="btn btn-success" wire:click="edit({{$employee->id}})">Edit</button>
     <button class="btn btn-danger" wire:click="destroy({{$employee->id}})">Delete</button>
  </td>

    
    </tr>
    @endforeach
  </tbody>
  </table>
  {{ $employees->links() }}
</div>
@include('livewire.edit')  
</div>

</x-app-layout>



