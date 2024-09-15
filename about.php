<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <style>
    body {
        background-color: #000;
        color: #fff;
        font-family: 'Roboto', sans-serif;
    }

    .navbar {
        background-color: #000;
        box-shadow: 0px 2px 15px rgba(255, 0, 0, 0.5);
    }

    .navbar a {
        color: #fff;
    }

    .navbar-nav .nav-link.active {
        color: #ff0000;
    }

    .about-header {
        background-color: #000;
        color: #ff0000;
        padding: 60px 0;
        text-align: center;
    }

    .about-header h1 {
        font-size: 50px;
    }

    .about-header p {
        font-size: 20px;
    }

    .team-section {
        padding: 60px 0;
        background-color: #1a1a1a;
    }

    .team-member {
        text-align: center;
        margin-bottom: 30px;
    }

    .team-member img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .team-member h4 {
        font-size: 20px;
        color: #FFF;
        margin-bottom: 10px;
    }

    .team-member p {
        color: #ccc;
    }

    .contact-section {
        padding: 60px 0;
        background-color: #333;
    }

    .contact-section h2 {
        font-size: 36px;
        color: #ff0000;
        margin-bottom: 30px;
    }

    .contact-section p {
        font-size: 18px;
        color: #fff;
    }

    footer {
        background-color: #000;
        color: #fff;
        padding: 40px 0;
    }

    footer h5 {
        color: #ff0000;
    }

    footer a {
        color: #fff;
    }

    footer a:hover {
        color: #ff0000;
    }

    footer .fa {
        color: #ff0000;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="logoo">
                <a href="#"><img width="120px" style="margin-left:25px;" src="logo.png" alt=""></a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link"><b>Home</b></a>
                <a href="about.php" class="nav-item nav-link active"><b>About</b></a>
                <a href="contact.php" class="nav-item nav-link"><b>Contact</b></a>
                <?php if (isset($_SESSION['login'])) {?>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item"
                                href="http://localhost/Virtue_of_Excellence/admin/dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a href="logoout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
                <?php } else {?>
                <a href="http://localhost/hackathon/login.php" class="nav-item nav-link">
                    <i class="fa fa-user"></i> <b>Login</b>
                </a>
                <?php }?>
            </div>
        </div>
    </nav>

    <!-- About Header -->
    <div class="about-header">
        <div class="container">
            <h1>About Us</h1>
            <p style="color:#fff">Learn more about our journey and what drives us to create the best products
                for
                you.
            </p>
        </div>
    </div>

    <!-- Team Section -->
    <div class=" container team-section">
        <div class="container">
            <h2 class="text-center" style="color:#ff1a1a">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-3 team-member">
                    <img src="./assets/Mlp.jpg" alt="Team Member 1">
                    <h4>Milap Dave</h4>
                </div>
                <div class="col-md-3 team-member">
                    <img src="./assets/S.jpg" alt="Team Member 2">
                    <h4>Sakshi Parikh</h4>
                </div>
                <div class="col-md-3 team-member">
                    <img src="./assets/Meet.jpg" alt="Team Member 3">
                    <h4>Meet Mandalia</h4>
                </div>
                <div class=" col-md-3 team-member">
                    <img src="./assets/H.jpg" alt="Team Member 4">
                    <h4>Hetansh Shah</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container fluid contact-section">
        <div class="container fluid">
            <h2 class="text-center">Get in Touch</h2>
            <p class="text-center">We'd love to hear from you. If you have any questions or feedback, feel free to
                reach
                out to us.</p>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h4 style="color:#ff1a1a">Email Us</h4>
                    <p>info@yourcompany.com</p>
                </div>
                <div class="col-md-6 text-center">
                    <h4 style="color:#ff1a1a">Contact Us</h4>
                    <p>(123) 456-7890</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-light pt-5 pb-4" style="background-color:black">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <!-- Company Section -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold red">Company</h5>
                    <p><a href="about.php" class="text-light" style="text-decoration: none;">About Us</a></p>
                    <p><a href="team.php" class="text-light" style="text-decoration: none;">Our Team</a></p>
                    <p><a href="careers.php" class="text-light" style="text-decoration: none;">Careers</a></p>
                    <p><a href="privacy.php" class="text-light" style="text-decoration: none;">Privacy Policy</a>
                    </p>
                </div>

                <!-- Products Section -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold red">Products</h5>
                    <p><a href="customize.php" class="text-light" style="text-decoration: none;">Customize
                            Phones</a></p>
                    <p><a href="processors.php" class="text-light" style="text-decoration: none;">Processors</a></p>
                    <p><a href="accessories.php" class="text-light" style="text-decoration: none;">Accessories</a>
                    </p>
                    <p><a href="speakers.php" class="text-light" style="text-decoration: none;">Speakers</a></p>
                </div>

                <!-- Support Section -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold red">Support</h5>
                    <p><a href="faq.php" class="text-light" style="text-decoration: none;">FAQs</a></p>
                    <p><a href="help.php" class="text-light" style="text-decoration: none;">Help Center</a></p>
                    <p><a href="warranty.php" class="text-light" style="text-decoration: none;">Warranty</a></p>
                    <p><a href="contact.php" class="text-light" style="text-decoration: none;">Contact Us</a></p>
                </div>

                <!-- Social Media Section -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold red">Follow Us</h5>
                    <p><i class="fab fa-facebook-f mr-3"></i> Facebook</p>
                    <p><i class="fab fa-twitter mr-3"></i> Twitter</p>
                    <p><i class="fab fa-instagram mr-3"></i> Instagram</p>
                    <p><i class="fab fa-linkedin mr-3"></i> LinkedIn</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-c1d3c3d1c4e0e5c6f021f3d7570a5f838f7c062f45b29ef28b8e5a76cb8d2c8c" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.js"></script>
</body>

</html>