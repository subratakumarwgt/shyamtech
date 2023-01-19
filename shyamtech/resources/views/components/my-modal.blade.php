<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">      
      <div class="modal-body">
       <button type="button" class="btn-close pull-right" data-bs-dismiss="modal" aria-label="Close"></button>
       <div class="row">
        <div class="col-md-6">
            <img src="{{asset('/images/view.png')}}" alt="" class="img-fluid" id="userImage">
        </div>
        <div class="col-md-12 p-1">
           <small>Name:</small>  <span id="userName"></span>
            <br>
            <small>Gender:</small>  <span id="userGender" class="badge badge-primary bg-primary text-white shadow-sm"></span>
            <br>
            <small>Address:</small>  <span id="userAddress"></span>
        </div>
       </div>
      </div>
      
    </div>
  </div>
</div>