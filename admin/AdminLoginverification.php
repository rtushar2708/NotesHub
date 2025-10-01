<?php

// if (!isset($_SESSION)) {
//     session_start();
// }

include_once('../dbConnection.php');

if(!isset($_SESSION['is_adminlogin'])) {
    if (isset($_POST['adminloginemail']) && isset($_POST['adminloginpass'])) {
        $adminloginemail = $_POST['adminloginemail'];
        $adminloginpass = $_POST['adminloginpass'];
        $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email ='".$adminloginemail."' AND admin_pass ='".$adminloginpass."'";
        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1){
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['adminloginemail'] = $adminloginemail;
            echo json_encode($row);
        }else if($row === 0){
            echo json_encode($row);
        }

    }
}

?>