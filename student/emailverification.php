<?php

include_once('../dbConnection.php');

// checking email already register

if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}

?>