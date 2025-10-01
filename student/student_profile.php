<?php
include('include/studentheader.php');
include_once('../dbConnection.php');
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $stu_email = $_POST['stu_email'];
    $stu_name = $_POST['stu_name'];
    $stu_quali = $_POST['stu_quali'];

    // Handle file upload if a new image is selected
    if (!empty($_FILES['stu_img']['name'])) {
        $file_name = $_FILES['stu_img']['name'];
        $temp_name = $_FILES['stu_img']['tmp_name'];
        $file_type = $_FILES['stu_img']['type'];
        $target_path = "../image/student_img/" . $file_name; 

        move_uploaded_file($temp_name, $target_path);

        // Update the database record with the new image path
        $sql = "UPDATE student SET stu_name='$stu_name', stu_quali='$stu_quali', stu_img='$target_path' WHERE stu_email='$stuloginemail'";
    } else {
        // Update the database record without modifying the image path
        $sql = "UPDATE student SET stu_name='$stu_name', stu_quali='$stu_quali' WHERE stu_email='$stuloginemail'";
    }

    // Execute the SQL query
    if ($conn->query($sql) == TRUE){
        $passmsg = '<div class="alert alert-success">UPDATED SUCCESSFULLY</div>';
    }else{
        $passmsg = '<div class="alert alert-success">UNABLE TO UPDATE</div>';
    }
} else {
    // Handle non-POST requests
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>


<div class="main-wrapper">
    <div class="form-wrapper">
        <h1 class="heading">My Profile</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="label">
                <label for="stu_email">Email Address</label>
                <input class="form-input" type="email" name="stu_email" id="stu_email" value="<?php echo ''.$stuloginemail.'' ?>" readonly>
            </div>
            <div class="label">
                <label for="stu_name">Name</label>
                <input class="form-input" type="text" name="stu_name" id="stu_name" value="<?php echo ''.$stu_name.'' ?>" >
            </div>
            <div class="label">
                <label for="stu_email">Profession</label>
                <input class="form-input" type="text" name="stu_quali" id="stu_quali" value="<?php echo ''.$stu_quali.'' ?>" >
            </div>
            <div class="label">
                <label for="stu_email">Profile img</label>
                <input class="form-input" type="file" name="stu_img" id="stu_imgl" value="<?php echo ''.$stu_img.'' ?>" >
            </div>
            <div>
                <button type="submit" id="updateprofilebtn" name="updateprofile" class="btn btn-primary">Update Profile</button>
            </div>
        </form>
        
    </div>
</div>






<?php
include('include/studentfooter.php');
?>