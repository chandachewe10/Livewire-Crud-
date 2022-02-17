 <!-- Modal -->
  <div class="modal fade" id="exampleModalEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h5 class="modal-title" id="exampleModalLabel">Change Employees Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <!--Employee Name-->
 <label for="Name">Employee Name</label>
        <input class="form-control" value="{{$name}}" type="text"  wire:model.defer="name">
  <br>
        <!--Employee Email Address-->

        <label for="Email">Employee Email</label>
        <input class="form-control" type="text" value="{{$email}}"  wire:model.defer="email">
      
      </div>


      <div class="modal-footer">
        <button class="btn btn-danger"  data-dismiss="modal" >Close</button>
        <button class="btn btn-primary"  wire:click.prevent="update()">Save changes</button>
      </div>
    </div>
  </div>
</div>


  

  