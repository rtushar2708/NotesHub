<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes-Hub</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="CSS/style1.css" />
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="CSS/demo.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navebar Start -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top nav-sm">
        <div class="container-fluid">
            <a class="navbar-brand nav-banner" href="index.php">Notes-Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">About</a></li>

                    <?php
                        session_start();
                        if(isset($_SESSION['is_login'])) {
                            echo '<li class="nav-item custom-nav-item"><a href="student/student_dashboard.php" class="nav-link">My Profile</a></li>
                            <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                        } else {
                            echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#StuLoginModal">Login</a></li>
                            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#StuRegModal">Signup</a></li>';
                        }
                    ?>
                    
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navebar End -->