<?php include("config.php") ?>
<?php include("header.php") ?>

<style>
.neon-header {
    ;
    background-color: #000;
    position: relative;
    box-shadow: 1px 0px 25px #ff1a1a;
    ;
    z-index: 1;
    /* Updated to red */
}

/* Container for the image with the overlay */
.image-overlay-container {
    position: relative;
    overflow: hidden;
    height: 600px;
    width: 100%;
    
    background-image: url('img1.webp');
    background-size: 1600px;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    object-fit:cover;

    /* Ensures the overlay stays within the image bounds */
}



.carousel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-track {
    display: flex;
    animation: scroll 30s linear infinite;
}

.carousel-track img {
    width: 19%;
    height: 300px;
    object-fit: cover;
    flex-shrink: 0;
    border: 2px solid rgb(245, 245, 246);
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-100%);
    }
}

/* Reverse the direction for the second carousel */
.carousel-container.reverse .carousel-track {
    animation-direction: reverse;
}

.neon-header {
    padding: 20px 0;
    background-color: #000;
    position: relative;
    box-shadow: 1px 0px 25px #ff1a1a;
    /* Updated to red */
}

/* Card hover effect for red shadow */
.hover-effect:hover {
    box-shadow: 0 4px 15px rgb(255, 49, 49);
    /* Dark red shadow on hover */
    transform: scale(1.05);
    /* Slightly enlarge the card on hover */
    transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
}

/* Navbar link hover effect */
.nav-item:hover {
    color: #ff0000 !important;
    /* Red hover effect for navbar */
}

/* Hover effect for buttons */
.btn-success:hover {
    background-color: #00ff00;
    color: #000;
}


/* Card styling */
.subscription-card {
        background-color: #2a2a2a; /* Gray background */
        border-radius: 15px;
        width: 100%;
        max-width: 1200px;
        margin: auto;
        border: 2px solid #ff1a1a; /* Neon red border */
    }

    /* Card Title */
    .subscription-title {
        font-size: 40px;
        font-weight: 600;
        color: #fff;
        text-shadow: 1px 1px 8px #ff1a1a; /* Neon red glow effect */
        margin-bottom: 20px;
    }

    /* Subscription text */
    .subscription-text {
        font-size: 18px;
        color: #f5f5f5;
        margin-bottom: 30px;
    }

    /* Button styling */
    .btn-subscribe {
        background-color: #ff1a1a;
        color: #fff;
        padding: 15px 30px;
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 50px;
        border: 2px solid #ff1a1a;
        transition: all 0.3s ease;
        box-shadow: 0px 4px 15px rgba(255, 26, 26, 0.5); /* Shadow for neon red button */
    }

    .btn-subscribe:hover {
        background-color: #fff;
        color: #ff1a1a;
        box-shadow: 0px 6px 20px rgba(255, 26, 26, 0.8);
        transform: scale(1.05);
    }

    /* Bootstrap Utilities */
    .container-fluid {
        padding: 0;
    }

    .subscription-card {
        padding: 50px 30px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5); /* Card shadow */
    }

    /* Media Queries for responsiveness */
    @media (max-width: 768px) {
        .subscription-title {
            font-size: 30px;
        }

        .subscription-text {
            font-size: 16px;
        }

        .btn-subscribe {
            font-size: 18px;
            padding: 10px 25px;
        }
    }

    @media (max-width: 576px) {
        .subscription-title {
            font-size: 26px;
        }

        .subscription-text {
            font-size: 14px;
        }

        .btn-subscribe {
            font-size: 16px;
            padding: 8px 20px;
        }
    }
</style>
<div class="" style="background-color:black">
    <nav class="navbar navbar-expand-lg  neon-header">

        <!-- logoo -->


        <div class="collapse navbar-collapse  mt-0" id="navbarCollapse">
            <div class="logoo">
                <a href=""><img width="120px" style="margin-left:25px;" src="./assets/logo1.png" alt=""></a>
            </div>
            <div class="navbar-nav ms-auto ">
                <a href="index.php" class="nav-item nav-link active" style="color:white"><b>Home</b></a>
                <a href="about.php" class="nav-item nav-link" style="color:white"><b>About</b></a>
                <a href="contact.php" class="nav-item nav-link" style="color:white"><b>Contact</b></a>
                <?php if (isset($_SESSION['login'])) { ?>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                        <i class="fa fa-user fa-lg" style="color:white"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:white">
                        <li><a class="dropdown-item"
                                href="http://localhost/Virtue_of_Excellence/admin/dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a href="logoout.php" class="dropdown-item">logoout</a></li>
                    </ul>
                </div>
                <?php } else { ?>
                <a href="http://localhost/hackathon/login.php" class="nav-item nav-link active" style="color:white">
                    <i class="fa fa-user" style="color:white"></i> <b>Login</b>
                </a>
                <?php } ?>
            </div>
        </div>
    </nav>


    <div class="container-fluid image-overlay-container">

        <div class="row">
            <h1 class="text-white text-center " style="margin-top:100px; font-size:60px">Design Your Ultimate Smartphone
            </h1><br>
            <p class="text-white text-center">A PHONE MADE FOR YOU, BY YOU</p>

        </div>

    </div>

</div>

<div class="carousel-container reverse" style="background-color:black; margin-top:-64px">
    <div class="carousel-track" style="background-color:black">
        <img src="assets\M1.png" alt="Image 1">
        <img src="assets\1.png" alt="Image 2">
        <img src="assets\7.png" alt="Image 5">
        <img src="assets\6.png" alt="Image 4">
        <img src="assets\7.png" alt="Image 5">
        <img src="assets\M5.png" alt="Image 1">
        <img src="assets\9.jpg" alt="Image 2">
        <img src="assets\10.png" alt="Image 4">
        <img src="assets\7.png" alt="Image 5">
        <img src="assets\M5.png" alt="Image 1">
        <img src="assets\7.png" alt="Image 5">
        <!-- <img src="assets\M1.png" alt="Image 1">
        <img src="ssets\7.png" alt="Image 2">
        <img src="ssets\10.png" alt="Image 2"> -->

    </div>
</div>
<div class="carousel-container" style="background-color:black">
    <div class="carousel-track">
    <img src="assets\hetansh1.jpg" alt="Image 1">
        <img src="assets\hetansh2.jpg" alt="Image 2">
        <img src="assets\hetansh3.jpg" alt="Image 5">
        <img src="assets\hetansh4.jpg" alt="Image 4">
        <img src="assets\hetansh5.jpg" alt="Image 5">

        <img src="assets\7.png" alt="Image 1">
        <img src="assets\10.png" alt="Image 2">
        <img src="assets\1.png" alt="Image 4">
        <img src="assets\hetansh3.jpg" alt="Image 5">

        <img src="assets\hetansh2.jpg" alt="Image 1">
        <img src="assets\hetansh3.jpg" alt="Image 5">
    </div>
</div>

<div class="container-fluid py-5  " style="background-color:#930000">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid  w-75 h-100" src="assets\DALL·E 2024-09-11 09.04.20 - A creative, futuristic website design for a customizable phone brand. The image should feature a sleek, modern phone with interchangeable parts like b.webp" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                <div class="text-white">
                    <h1 class="" style="font-size:45px">Your Phone , Your Rules !</h1>
                    <h6 class="mb-4">&nbsp; &nbsp;<i>Your perfect phone is just a customization away</i></h6>

                    <p class="mb-4">Transform your smartphone into a personalized masterpiece. Select every component,
                        from the camera to the display, ensuring it fits your exact needs. Enjoy a tech experience
                        crafted to reflect your style and preferences. Your perfect phone is just a customization away.
                    </p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Skilled
                                Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Online Classes
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>International
                                Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Skilled
                                Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Online Classes
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>International
                                Certificate</p>
                        </div>
                    </div>
                </div>
                <a href="http://localhost/hackathon/about.php"
                    class="btn text-white py-md-3 px-md-5 me-3 animated slideInLeft"
                    style="background-color:black;">Read More</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 " style="background-color:black">
    <div class="container">
        <div class="row g-5" >

            <div class="col-lg-6 wow fadeInUp"  data-wow-delay="0.3s">

                <div class="text-white" style="background-color:black">
                    <h1 style="font-size:45px"> Choose Your Performance Powerhouse</i></h6><br>

                        <p class="mb-4">Power up your phone with a processor that fits your needs. Whether you're into
                            intense gaming or everyday use, our platform lets you choose from a range of processors to
                            match your performance requirements. The choice is yours—customize your device exactly how
                            you want.
                        </p>

                        <!-- <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Skilled
                                    Instructors</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Online
                                    Classes
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2"
                                        style="color:#810000"></i>International
                                    Certificate</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Skilled
                                    Instructors</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2" style="color:#810000"></i>Online
                                    Classes
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right  me-2"
                                        style="color:#810000"></i>International
                                    Certificate</p>
                            </div>
                        </div> -->
                </div>
                <a href="http://localhost/hackathon/login.php"
                    class="btn text-white py-md-3 px-md-5 me-3 animated slideInLeft"
                    style="background-color:#FF0000;">Create Now</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100"
                        src="./layout1\assets\Qualcomm-Snapdragon-8-Gen-3-SoC.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid my-5" >
    <div class="row">
        <div class="col-12">
            <div class="subscription-card card shadow-lg text-center p-5">
                <h2 class="text-white">Join Our Premium Plan</h2>
                <p class="subscription-text">Subscribe now for just <strong>$107.99</strong> per year and get exclusive access .</p>
                <p class="text-white">Enjoy a 20% discount on your custom mobile—personalize your device and save on your perfect match today!</p>
                <a href="payment.php" class="btn btn-subscribe">Subscribe Now</a>
            </div>
        </div>
    </div>
</div>





   


    <!-- Footer Section -->
    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <!-- Company Section -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Company</h5>
                    <p><a href="about.php" class="text-light" style="text-decoration: none;">About Us</a></p>
                    <p><a href="team.php" class="text-light" style="text-decoration: none;">Our Team</a></p>
                    <p><a href="careers.php" class="text-light" style="text-decoration: none;">Careers</a></p>
                    <p><a href="privacy.php" class="text-light" style="text-decoration: none;">Privacy Policy</a>
                    </p>
                </div>

                <!-- Products Section -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Products</h5>
                    <p><a href="customize.php" class="text-light" style="text-decoration: none;">Customize
                            Phones</a></p>
                    <p><a href="processors.php" class="text-light" style="text-decoration: none;">Processors</a></p>
                    <p><a href="accessories.php" class="text-light" style="text-decoration: none;">Accessories</a>
                    </p>
                    <p><a href="speakers.php" class="text-light" style="text-decoration: none;">Speakers</a></p>
                </div>

                <!-- Support Section -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Support</h5>
                    <p><a href="faq.php" class="text-light" style="text-decoration: none;">FAQs</a></p>
                    <p><a href="help.php" class="text-light" style="text-decoration: none;">Help Center</a></p>
                    <p><a href="warranty.php" class="text-light" style="text-decoration: none;">Warranty</a></p>
                    <p><a href="contact.php" class="text-light" style="text-decoration: none;">Contact Us</a></p>
                </div>

                <!-- Social Media Section -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-success">Follow Us</h5>
                    <p><i class="fab fa-facebook-f mr-3"></i> Facebook</p>
                    <p><i class="fab fa-twitter mr-3"></i> Twitter</p>
                    <p><i class="fab fa-instagram mr-3"></i> Instagram</p>
                    <p><i class="fab fa-linkedin mr-3"></i> LinkedIn</p>
                </div>

            </div>
        </div>
    </footer>
</div>