<div  class="container shadow p-3 mb-5 bg-white rounded">
  
    <label for="Name">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="name" value="{{$name}}">
    <small id="nameHelp" class="form-text text-muted">change employee name</small>
 
    <label for="Email">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1" wire:model="email" value="{{$email}}">
    <small id="emailHelp" class="form-text text-muted">change employee email</small>
 <br>
    <button class="btn btn-primary" wire:click="update({{$employee_id}})">SAVE CHANGES</button>
  
</div>

  
 
 
