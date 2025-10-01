<?php

include_once('../dbConnection.php');

// Insert Student Record
if(isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])) {
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    $stu_img = '../image/student_img/no_img.png';
    $stu_coin = '100';

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass, stu_img, stu_coin) VALUE ('$stuname', '$stuemail', '$stupass', '$stu_img', '$stu_coin')";
}

if($conn->query($sql) == TRUE){
    echo json_encode('OK');
}
else{
    echo json_encode('Failed');
}


?>