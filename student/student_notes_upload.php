<?php
include('include/studentheader.php');
include_once('../dbConnection.php');

?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(empty($_FILES['notes_address']['name']) || isset($_POST['course_id']) == '' || isset($_POST['branch_id']) == '' || isset($_POST['year_id']) == '' || isset($_POST['subject_id']) == '' || isset($_POST['notes_description']) == ''){
        $passmsg1 = '<div class="alert alert-success">fill all field</div>';
    }else{
        // Get form data
        $notes_email = $stuloginemail;
        $course_id = $_POST['course_id'];
        $branch_id = $_POST['branch_id'];
        $year_id = $_POST['year_id'];
        $subject_id = $_POST['subject_id'];
        $notes_description = $_POST['notes_description'];
        $notes_address = $_FILES['notes_address']['name'];
        $temp_name = $_FILES['notes_address']['tmp_name'];
        $file_type = $_FILES['notes_address']['type'];
        $unique_filename = time() . '_' . $notes_address;
        $target_path = "../notes/unapprovednotes/" . $unique_filename;

        move_uploaded_file($temp_name, $target_path);

        $sql = "INSERT INTO notes_uplode(notes_email, notes_address, course_id, branch_id, year_id, subject_id, notes_description) VALUE
        ('$notes_email', '$notes_address', '$course_id', '$branch_id', '$year_id', '$subject_id', '$notes_description')";

        // Execute the SQL query
        if ($conn->query($sql) == TRUE){
            $stu_coin = $stu_coin + 100;
            $sql1 = "UPDATE student SET stu_coin = '$stu_coin' WHERE stu_email = '$stuloginemail'";
            if($conn->query($sql1) == TRUE){
                $passmsg1 = '<div class="alert alert-success">coin</div>';
            }
            header("Location: student_dashboard.php"); // Redirect to a success page
            exit();
        }else{
            $passmsg = '<div class="alert alert-success">UNABLE TO UPLOAD</div>';
            // exit();
        }
        }
    
} else {
    // Handle non-POST requests
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
    // exit();
}
?> 

<div class="main-wrapper">
    <div class="form-wrapper">
        <h1 class="heading">Upload Notes</h1>
        <!-- form start  -->
        <form method="POST" enctype="multipart/form-data">
            <div class="label">
                <label for="notes_email">Email Address</label>
                <input class="form-input" type="email" name="notes_email" id="notes_email" value="<?php echo ''.$stuloginemail.'' ?>" readonly>
            </div>

            <label for="notes_address">Upload Note</label>
            <div class="form-file label">
                <input type="file" name="notes_address" id="notes_address" />
                <label for="notes_address">
                    <div>
                        <span class="formbold-drop-file"> Drop files here </span>
                        <span class="formbold-or"> Or </span>
                        <span class="formbold-browse"> Browse </span>
                    </div>
                </label>
            </div>

            <!-- <div class="container-fluid"> -->
                <div class="row label">
                    <div class="col m-sm-6">
                        <label for="course_id">Course</label>
                        <select class="form-input" name="course_id" id="course_id">
                            <option value="">--Please choose an option--</option>
                            <option value="B-tech">B-tech</option>
                            <option value="M-tech">M-tech</option>
                            <option value="B-pharma">B-pharma</option>
                            <option value="BCA">BCA</option>
                            <option value="MCA">MCA</option>
                            <option value="Bsc">Bsc</option>
                        </select>

                    </div>
                    <div class="col m-sm-6">
                        <label for="branch_id">Branch</label>
                        <select class="form-input" name="branch_id" id="branch_id">
                            <option value="">--Please choose an option--</option>
                            <option value="CSE">CSE</option>
                            <option value="AI/ML">AI/ML</option>
                            <option value="DS">DS</option>
                            <option value="IT">IT</option>
                            <option value="IOT">IOT</option>
                            <option value="ECE">ECE</option>
                        </select>
                    </div>
                </div>
                <div class="row label">
                    <div class="col m-sm-6">
                        <label for="year_id">Year</label>
                        <select class="form-input" name="year_id" id="year_id">
                            <option value="">--Please choose an option--</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                        </select>

                    </div>
                    <div class="col m-sm-6">
                        <label for="subject_id">Subject</label>
                        <select class="form-input" name="subject_id" id="subject_id">
                            <option value="">--Please choose an option--</option>
                            <option value="Data Science">Data Science</option>
                            <option value="COA">COA</option>
                            <option value="Technical Communnication">Technical Communnication</option>
                            <option value="DSTL">DSTL</option>
                            <option value="Sensor">Sensor</option>
                            <option value="Python Programming">Python Programming</option>
                        </select>
                    </div>
                </div>
            <!-- </div> -->
            <div class="discription-form label">
                <label for="notes_description">Description</label>
                <textarea name="notes_description" id="notes_description" rows="5" class="form-input"></textarea>
            </div>
            <div>
                <button type="submit"  id="uploadnotesbtn" name="uploadnotesbtn" class="btn btn-primary">Upload Notes</button>
            </div>
            <?php echo ''.$passmsg1.''; ?>
        </form>
        <!-- form end -->
    </div>
</div>





<?php
include('include/studentfooter.php');
?>