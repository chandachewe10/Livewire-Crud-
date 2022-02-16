 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h5 class="modal-title" id="exampleModalLabel">Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <!--Employee Name-->
 <label for="Name">Employee Name</label>
        <input class="form-control" name="name" type="text" placeholder="Employee Name" wire:model.defer="name">
  <br>
        <!--Employee Email Address-->

        <label for="Email">Employee Email</label>
        <input class="form-control" type="text" name="email" placeholder="Employee Email" wire:model.defer="email">
      
      </div>


      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" data-dismiss="modal" wire:click.prevent="store()">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

  

  