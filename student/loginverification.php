<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once('../dbConnection.php');

if(!isset($_SESSION['is_login'])) {
    if (isset($_POST['stuloginemail']) && isset($_POST['stuloginpass'])) {
        $stuloginemail = $_POST['stuloginemail'];
        $stuloginpass = $_POST['stuloginpass'];
        $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email ='".$stuloginemail."' AND stu_pass ='".$stuloginpass."'";
        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1){
            $_SESSION['is_login'] = true;
            $_SESSION['stuloginemail'] = $stuloginemail;
            echo json_encode($row);
        }else if($row === 0){
            echo json_encode($row);
        }

    }
}

?>