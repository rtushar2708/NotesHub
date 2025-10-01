<?php
include('main/mainheader.php')
?>


    <!-- Start BG Video -->

    <div class="container-fluid vid-mar-rem">
        <div class="vid-parent">
            <video playsinline autoplay loop muted>
                <source src="video/bg.mp4">
            </video>
        </div>
        <div class="vid-overlay"></div>
        <div class="vid-content">
            <?php 
                // session_start();
                if(isset($_SESSION['is_login'])){
                    echo '<h1 class="my-content">Welcome to Notes-Hub</h1>
                    <h2 class="my-content">Your Notes, Your Way</h2>
                    <small class="my-content">Learn and Implement</small><br>
                    <a href="student/student_dashboard.php" class="btn btn-danger shadow-none btn1">My profile</a>';
                } else{
                    echo '<h1 class="my-content">Welcome to Notes-Hub</h1>
                    <h2 class="my-content">Your Notes, Your Way</h2>
                    <small class="my-content">Learn and Implement</small><br>
                    <a href="#" class="btn btn-danger shadow-none btn1" data-bs-toggle="modal" data-bs-target="#StuRegModal">Get Started</a>';
                }
            ?>
            
        </div>
    </div>

    <!-- End BG Video -->
    <!-- Start palet -->

    <div class="container-fluid p-0 m-0 mt-0">
        <div class="palet">
            <div class="col1">
                <h1 class="palet-content1">25+</h1>
                <div class="palet-content2">
                    <h5>Student register on our site in last 1 months</h5>
                </div>
            </div>
            <div class="col">
                <h1 class="palet-content1">25+</h1>
                <div class="palet-content2">
                    <h5>Student register on our site in last 1 months</h5>
                </div>
            </div>
            <div class="col2">
                <h1 class="palet-content1">25+</h1>
                <div class="palet-content2">
                    <h5>Student register on our site in last 1 months</h5>
                </div>
            </div>
            <div class="col">
                <h1 class="palet-content1">25+</h1>
                <div class="palet-content2">
                    <h5>Student register on our site in last 1 months</h5>
                </div>
            </div>

        </div>
    </div>

    <!-- End palet -->

    <!-- image start -->

    <div class="mt-1">
        <div class="image p-0 m-0">
            <img class="custom-img" src="image/bn1.jpg" alt="">
        </div>
    </div>

    <!-- image end -->

    <!-- Start Contact Us -->

    <div class="container mt-5" id="contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-8 m-auto">
                <form action="" method="post">
                    <input type="text" class="form-control" name="name" placeholder="Name"><br>
                    <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
                    <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
                    <textarea class="form-control" name="message" placeholder="How can we help you?"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
                </form>
            </div>
        </div>
    </div>

    <!-- End Contact Us -->

    <!-- testimonial carosil -->

    <main class="cd__main">
        <div class="carosel-heading ">
            <h1 class="text-center">Student's Feedback</h1>
        </div>

        <div class="container">
            <div class="swiper swiperCarousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=31" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Amy Liu</h1>
                                <h2 class="title">CTO, Cybertech Solutions</h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    I must admit, as a software developer, I was skeptical about the MindSync Neural
                                    Interface. But once I saw how it could transform not just the way I work but also
                                    how I engage with the world, I was sold. Its integration capability and
                                    responsiveness are unlike anything I've seen before. We're not just talking about a
                                    step forward in technology, but a quantum leap into the future.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=26" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Sarah Price</h1>
                                <h2 class="title">Sr. Technology Analyst</h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    The MindSync Neural Interface is a game-changer in technology that's redefining the
                                    way we interact with digital devices. With the seamless and intuitive connection, it
                                    has reduced the cognitive load of my everyday tasks. As a busy professional, I no
                                    longer have to divide my attention across multiple devices. This revolutionary
                                    product has managed to marry convenience and functionality in a way I had never
                                    thought possible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=69" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Dr. Miguel Torres</h1>
                                <h2 class="title">Head of Neurobiology, Central University</h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    The day I started using the MindSync Neural Interface, I understood it wasn't just
                                    an ordinary gadget, but an extraordinary leap in technological innovation. Its
                                    user-friendly nature, mixed with the uncanny ability to understand and process my
                                    thoughts, is genuinely awe-inspiring. It's as if it took the immense complexity of
                                    the human brain and made it accessible, all without compromising my privacy or
                                    security.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=59" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Benjamin Moore</h1>
                                <h2 class="title">
                                    Director of HCI, FutureTech
                                </h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    The MindSync Neural Interface isn't just an upgrade, it's an evolution. The way it
                                    syncs effortlessly with my thought processes makes it feel like a natural extension
                                    of my mind. It's empowering and liberating to interact with my digital world in such
                                    a direct, fluid manner. This is a tool that makes technology feel less like a
                                    barrier and more like an ally.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=49" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Dr. Simone Laurent</h1>
                                <h2 class="title">Chief Neurologist, NeuroTech Hospital</h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    As a neurologist, I can attest that the MindSync Neural Interface is an absolute
                                    marvel. The accuracy with which it translates neural signals into digital actions is
                                    astounding. But what impresses me more is how it manages to do so with such finesse,
                                    ensuring an unintrusive and seamless user experience. This is truly a leap in making
                                    technology more intuitively human.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="avatar" src="https://i.pravatar.cc/200?img=68" />
                            <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px"
                                height="125px">
                                <path
                                    d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z" />
                            </svg>
                            <div class="header">
                                <h1 class="name">Jared Foster</h1>
                                <h2 class="title">Sr. Tech Journalist, Digital Frontier</h2>
                            </div>
                            <div class="quote-container">
                                <p class="quote">
                                    As a technology journalist, I've seen numerous gadgets come and go. However, the
                                    MindSync Neural Interface isn't just a flash in the pan - it's here to revolutionize
                                    the way we perceive and interact with technology. The convenience it brings, coupled
                                    with its stellar performance, makes it more than just a device - it's an experience.
                                    One that is utterly transformative in the truest sense of the word.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </main>

    <!-- testimonial carosil -->

    <!-- Start Student Registration -->

    <div class="modal fade" id="StuRegModal" tabindex="-1" aria-labelledby="StuRegModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StuRegModalLabel">Student Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-form">
                    <form id="StuRegForm">
                        <div class="mb-3">
                            <i class="fas fa-user"></i>
                            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                            <small id="statusMsg1"></small>
                            <input type="name" class="form-control shadow-none" placeholder="Name" name="stuname" id="stuname">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i>
                            <label for="stuemail" class="pl-2 font-weight-bold">Email address</label>
                            <small id="statusMsg2"></small>
                            <input type="email" class="form-control shadow-none" name="email" id="stuemail" placeholder="Email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="stupass" class="pl-2 font-weight-bold">Password</label>
                            <small id="statusMsg3"></small>
                            <input type="password" placeholder="Password" name="stupass" class="form-control shadow-none" id="stupass">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <span id="SuccessMsg"></span>
                    <button type="button" onclick="addStu()" id="signup" class="btn btn-primary">Signup</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Student Registration -->

    <!-- Start Student Login Modal -->
    <div class="modal fade" id="StuLoginModal" tabindex="-1" aria-labelledby="StuLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AdminLoginModalLabel">Student Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-form">
                    <form id="StuLoginForm">
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i>
                            <label for="stuloginemail" class="pl-2 font-weight-bold">Email address</label>
                            <input type="email" class="form-control shadow-none" name="stuloginemail" id="stuloginemail" placeholder="Email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="stuloginpass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" placeholder="Password" name="stuloginpass" class="form-control shadow-none" id="stuloginpass">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <small id="LoginSuccessMsg"></small>
                    <button type="button" onclick="checkstulog()" id="StuLoginBtn" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Student Login Modal -->

    <!-- Start admin login modal -->
    <div class="modal fade" id="AdminLoginModal" tabindex="-1" aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AdminLoginModalLabel">Admin Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom-form">
                    <form id="adminLoginForm">
                        <div class="mb-3">
                            <i class="fas fa-envelope"></i>
                            <label for="adminloginemail" class="pl-2 font-weight-bold">Email address</label>
                            <input type="email" class="form-control shadow-none" name="adminloginemail" id="adminloginemail" placeholder="Email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-key"></i>
                            <label for="adminloginpass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" placeholder="Password" name="adminloginpass" class="form-control shadow-none" id="adminloginpass">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <small id="adminLoginSuccessMsg"></small>
                    <button type="button" onclick="checkadminlog()" id="adminLoginBtn" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End admin login modal -->

    <!-- footer -->
    

<?php
include('main/mainfooter.php')
?>