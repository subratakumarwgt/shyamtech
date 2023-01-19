<h2 class="text-primary"><span id="submitType" >Add</span> new user </h2>
<form action="/api/submit" class="form" enctype="multipart/form-data" id="myForm">
    <input type="hidden" >
    <div class="mb-2 p-1">
        <label for="" class="form-label">Name <span class="text-danger">(*)</span> </label>
        <input type="text" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="mb-2 p-1">
        <div class="preview p-4" > <img src="" alt="" id="img_prv" class="img-thumbnail shadow-sm" >  </div>
        <label for="" class="form-label">Image <span class="text-danger">(*)</span> </label>
        <input type="file" class="form-control" name="image" id="image" placeholder="" required>
    </div>
    <div class="mb-2 p-1">
        <label for="" class="form-label">Address <span class="text-danger">(*)</span> </label>
        <input type="text" class="form-control" name="address" id="address" placeholder="" required>
    </div>
    <div class="mb-2 p-1">
        <label for="" class="form-label">Gender <span class="text-danger">(*)</span> </label>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="male">
            <label class="form-check-label" for="gender1">
                Male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender2" checked value="female">
            <label class="form-check-label" for="gender2">
                Female
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="others">
            <label class="form-check-label" for="gender">
                Others
            </label>
        </div>
    </div>
    <div class="mb-2 p-1">
        <button class="submit btn btn-outline-primary" type="submit">Submit</button>
    </div>
</form>