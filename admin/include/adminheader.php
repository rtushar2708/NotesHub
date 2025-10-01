<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../CSS/adminstyle.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <!-- top navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="admin_dashboard.html" class="navbar-brand col-sm-3 col-md-2 mr-0">NOTES-HUB
            <small>Admin area</small>
        </a>
    </nav>

    <!-- sidebar -->
    <div class="container-fluid xyz mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="admin_dashboard.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_student.php" class="nav-link">
                                <i class="fas fa-users"></i>
                                Student Record
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminnotespending.php" class="nav-link">
                                <i class="fas fa-hourglass-half"></i>
                                Notes Pending
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_notesapproved.php" class="nav-link">
                                <i class="fa-solid fa-thumbs-up"></i>
                                Notes Approved
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_feedback.php" class="nav-link">
                                <i class="fa-solid fa-comments"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_changepass.php" class="nav-link">
                                <i class="fa-solid fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminlogout.php" class="nav-link">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>