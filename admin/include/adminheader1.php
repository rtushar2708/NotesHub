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
    <!-- navbar -->
    <nav class="navbar navbar-dark fixed-top shadow" style="background-color: #225470;">
        <a href="admin_dashboard.php" class="navbar-brand justify-content-center col-sm-3 col-md-2 mr-0">NOTES-HUB
            <small>Admin area</small>
        </a>
    </nav>
    <!-- sidebar -->
    <nav class="sidebar1 fixed-top shadow">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="logo1 nav-link a1">
                    <img src="image/bn1.jpg" alt="">
                    <span class="nav1">Tushar Rajput</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_dashboard.php" class="a1 nav-link">
                    <i class="fas fa-tachometer-alt i1"></i>
                    <span class="nav-itme1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_student.php" class="a1 nav-link">
                    <i class="fas fa-users i1"></i>
                    <span class="nav-itme">Student Record</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="adminnotespending.php" class="a1 nav-link">
                    <i class="fas fa-hourglass-half i1"></i>
                    <span class="nav-itme">Notes Pending</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_notesapproved.php" class="a1 nav-link">
                    <i class="fa-solid fa-thumbs-up i1"></i>
                    <span class="nav-itme">Notes Approved</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_feedback.php" class="a1 nav-link">
                    <i class="fa-solid fa-comments i1"></i>
                    <span class="nav-itme">Feedback</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_changepass.php" class="a1 nav-link">
                    <i class="fa-solid fa-key i1"></i>
                    <span class="nav-itme">Change Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="adminlogout.php" class="a1 nav-link">
                    <i class="fas fa-sign-out-alt i1"></i>
                    <span class="nav-itme">Logout</span>
                </a>
            </li>
        </ul>
    </nav>