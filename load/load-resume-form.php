<?php
session_start();
if(isset($_SESSION['photo'])){
    $photo = $_SESSION['photo'];
    $name = "Change";
}else{
    $photo = "default.jpg";
    $name = "Upload";
}
$html = ' <div class="card " aria-hidden="true">
<form action="print-resume.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="card-header text-center text-info" style="font-size: larger;font-weight: bold;">
        Resume Form
    </div>
    <div class="card-body ">
        <div class="card-title h-100 d-flex flex-column  align-items-center justify-content-center">
            <img src="photo/'.$photo.'" style="height:100px;width: 100px; align-content: center; padding:5px;" />
            <div class="btn btn-sm btn-warning text-white  "data-bs-toggle="modal" data-bs-target="#myModal">'.$name.' Photo</div>
        </div>
        <h4>Personal Details</h4>
        <div class="card-title ">
            <label class="" class="form-label " for="name">Name</label>
            <input class="form-control  " type="text" name="name">
        </div>
        <div class="card-title">
            <label class="form-label " for="email">Email</label>
            <input class="form-control  " type="email" name="email">
        </div>
        <div class="card-title">
            <label class="form-label " for="phone">Phone</label>
            <input class="form-control  " type="number" name="phone" >
        </div>
        <div class="card-title">
            <label class="form-label " for="address">Village</label>
            <input class="form-control  " type="text" name="address">
        </div>
        <div class="card-title">
            <label class="form-label " for="dob">Date of Birth</label>
            <input class="form-control  " type="date" name="dob">
        </div>
        <h4>Professional Details</h4>
        <div class="card-title">
            <label class="form-label " for="professional_details">About Work</label>
            <textarea class="form-control  "name="professional_details"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="eduction1">Eduction detail-1</label>
            <textarea class="form-control  "name="eduction1"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="eduction2">Eduction detail-2</label>
            <textarea class="form-control  "name="eduction2"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="eduction3">Eduction detail-3</label>
            <textarea class="form-control  "name="eduction3"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="language">Language</label>
            <textarea class="form-control  "name="language"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="skills">Skills</label>
            <textarea class="form-control  "name="skills"></textarea>
        </div>
        <div class="card-title">
            <label class="form-label " for="others">Others</label>
            <textarea class="form-control  "name="others"></textarea>
        </div>

    </div>
    <div class="card-footer ">
        <button class="btn btn-info text-light " style="width:100%;" type="submit" name="create">Create</button>
    </div>
</form>
</div>';
echo $html;