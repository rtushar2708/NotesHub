<?php 
include('../dbConnection.php');
?>


<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['is_login'])){
        $stuloginemail = $_SESSION['stuloginemail'];
    }else{
        echo "<script> location.href = '../index.php'; </script>";
    }

    if (isset($stuloginemail)){
        $sql = "SELECT * FROM student WHERE stu_email = '$stuloginemail'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $stu_img = $row['stu_img'];
            $stu_name = $row['stu_name'];
            $stu_id = $row['stu_id'];
            $stu_quali = $row['stu_quali'];
            $stu_coin = $row['stu_coin'];
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="../CSS/adminstyle.css"> -->
    <link rel="stylesheet" href="../CSS/student_style.css">
    <link rel="stylesheet" href="../CSS/student_style_profileupdate.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark fixed-top shadow" style="background-color: #225470;">
        <a href="student_dashboard.php" class="navbar-brand justify-content-center col-sm-3 col-md-2 mr-0">NOTES-HUB
            <!-- <small>Admin area</small> -->
        </a>

        <div>
            <small style="color: #fff;">Coins</small>
            <i style="color: #fff;" class="fa-solid fa-coins"></i>
            <input class="coin" type="text" readonly value="<?php echo $stu_coin; ?>" id="stu_coin" name="stu_coin">
        </div>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar1 fixed-top shadow">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="logo1 nav-link a1">
                    <img src="<?php echo $stu_img; ?>" alt="">
                    <span class="nav1"><?php echo $stu_name; ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="student_dashboard.php" class="a1 nav-link">
                    <i class="fas fa-home i1"></i>
                    <span class="nav-itme1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="student_download_notes.php" class="a1 nav-link">
                    <i class="fa-solid fa-download i1"></i>
                    <span class="nav-itme">Download Notes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="student_notes_upload.php" class="a1 nav-link">
                    <i class="fa-solid fa-upload i1"></i>
                    <span class="nav-itme">Upload Notes</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="student_profile.php" class="a1 nav-link">
                    <i class="fa-solid fa-user i1"></i>
                    <span class="nav-itme">My profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_changepass.php" class="a1 nav-link">
                    <i class="fa-solid fa-key i1"></i>
                    <span class="nav-itme">Change Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../logout.php" class="a1 nav-link">
                    <i class="fas fa-sign-out-alt i1"></i>
                    <span class="nav-itme">Logout</span>
                </a>
            </li>
        </ul>
    </nav>