<!DOCTYPE html>
<?php include("config.php") ?>
<?php include("header.php") ?>


<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background-color: black;
    font-family: 'Arial', sans-serif;
  }


  .image-overlay-container {
    position: relative;
    overflow: hidden;
    height: 370px;
    width: 100%;
    width: 100%;
    background-image: url('./assets/bg3.jpg');
    background-size: 1600px;
    justify-content: center;
    align-items: center;
    background-attachment: fixed;

    /* Ensures the overlay stays within the image bounds */
}


  .neon-header {
    padding: 20px 0;
    background-color: #000;
    position: relative;
    box-shadow: 1px 0px 25px #ff1a1a;
    /* Updated to red */
  }

  /* logoo */
  .logoo a {
    font-size: 2rem;
    /* color: #ff1a1a; Updated to red */
    /* text-transform: uppercase; */
    /* font-weight: bold; */
    /* text-decoration: none; */
    position: relative;
    margin-left: 30px;
    /* border: 1px solid red; */

    /* border: 1px solid red; */
  }

  /* .logoo a::before,
.logoo a::after {
  content: '';
  position: absolute;
  top: 50%;
  width: 100%;
  height: 2px;
  background: #39ff14; /* Updated to green */

  .logoo a::before {
    left: 0;
    transform: translateY(-300%);
  }

  .logoo a::after {
    right: 0;
    transform: translateY(300%);
  }

  .logoo a:hover::before,
  .logoo a:hover::after {
    transform: translateY(0%);
  }

  /* Navigation Menu */
  .nav-menu ul {
    list-style: none;
  }

  .nav-links li {
    margin-left: 30px;
  }

  .nav-links a {
    font-size: 1.2rem;
    color: #ff1a1a;
    /* Updated to red */
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    position: relative;
    transition: color 0.3s ease;
  }

  .nav-links a:hover {
    color: #39ff14;
    /* Updated to green */
  }

  .nav-links a::before {
    content: '';
    position: absolute;
    width: 0;
    height: 3px;
    background-color: #39ff14;
    /* Updated to green */
    bottom: -5px;
    left: 50%;
    transition: width 0.3s ease, left 0.3s ease;
  }

  .nav-links a:hover::before {
    width: 100%;
    left: 0;
  }

  /* User Icons */
  .user-icons a {
    margin-left: 20px;
    color: #ff1a1a;
    /* Updated to red */
    font-size: 1.5rem;
    position: relative;
    transition: color 0.3s ease;
  }

  .user-icons a:hover {
    color: #39ff14;
    /* Updated to green */
  }
 
  /* Neon Hover Effect for Icons */
  .user-icons a::before {
    content: '';
    position: absolute;
    width: 0;
    height: 3px;
    background-color: #39ff14;
    /* Updated to green */
    bottom: -5px;
    left: 50%;
    transition: width 0.3s ease, left 0.3s ease;
  }

  .user-icons a:hover::before {
    width: 100%;
    left: 0;
  }

  /* Neon Glow Effect */
  .neon-header .logoo a,
  .nav-links a,
  .user-icons a {
    text-shadow: 0 0 0px rgba(255, 7, 58, 0.8), 0 0 10px rgba(255, 7, 58, 0.6);
    /* Updated to red */
  }

  .nav-links a:hover,
  .user-icons a:hover {
    text-shadow: 0 0 0px rgba(57, 255, 20, 0.8), 0 0 20px rgba(57, 255, 20, 0.6);
    /* Updated to green */
  }
  

    body {
        background-color: #000;
    }

    .neon-header {
        background-color: #000;
        position: relative;
        box-shadow: 1px 0px 25px #ff1a1a;
        z-index: 1;
    }

    /* Page Header */
    .page-info-section {
        background-color: #1a1a1a;
        padding: 60px 0;
        text-align: center;
        border-bottom: 2px solid #ff1a1a;
    }

    .page-info-section h1 {
        font-size: 50px;
        color: #ff1a1a;
    }

    .site-breadcrumb a {
        color: #fff;
    }

    .site-breadcrumb a:hover {
        color: #ff1a1a;
    }

    /* Cart Table */
    .cart-table table {
        width: 100%;
        background-color: #1a1a1a;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
    }

    .cart-table th,
    .cart-table td {
        padding: 20px;
        color: #fff;
        border: 1px solid #ff1a1a;
        vertical-align: middle;
    }

    .cart-table th {
        background-color: #000;
        text-transform: uppercase;
    }

    .cart-table td img {
        width: 150px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(255, 0, 0, 0.3);
    }

    .pc-title {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .pc-title h4 {
        color: #fff;
        font-size: 22px;
        margin-bottom: 0;
    }

    .product-col a {
        color: #ff1a1a;
        text-decoration: underline;
    }

    .product-col a:hover {
        color: #ff8080;
    }

    .quy-input input {
        width: 60px;
        background-color: #000;
        color: #fff;
        border: 1px solid #ff1a1a;
        padding: 5px;
        text-align: center;
    }

    /* Cart Buttons */
    .cart-buttons .btn-continue,
    .cart-buttons .btn-clear,
    .cart-buttons .btn-update {
        background-color: #000;
        border: 1px solid #ff1a1a;
        color: #ff1a1a;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .cart-buttons .btn-continue:hover,
    .cart-buttons .btn-clear:hover,
    .cart-buttons .btn-update:hover {
        background-color: #ff1a1a;
        color: #000;
    }

    .card-warp {
        background-color: #000;
        padding: 60px 0;
    }

    .shipping-info,
    .cart-total-details {
        background-color: #1a1a1a;
        padding: 30px;
        border: 1px solid #ff1a1a;
        color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(255, 0, 0, 0.5);
    }

    .shipping-info h4,
    .cart-total-details h4 {
        color: #ff1a1a;
    }

    .sc-item label {
        color: #fff;
    }

    .sc-item label span {
        color: #ff1a1a;
    }

    .cupon-input button {
        background-color: #ff1a1a;
        color: #000;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }

    .cupon-input input {
        background-color: #000;
        color: #fff;
        border: 1px solid #ff1a1a;
        padding: 10px;
    }

    .cart-total-card li {
        color: #fff;
    }

    .cart-total-card .total {
        font-size: 24px;
        color: #ff1a1a;
    }

    .btn-full {
        background-color: #ff1a1a;
        color: #000;
        border: none;
        padding: 15px 30px;
        display: inline-block;
        cursor: pointer;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .btn-full:hover {
        background-color: #fff;
        color: #ff1a1a;
    }

    /* Footer */
    footer {
        background-color: #000;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        border-top: 1px solid #ff1a1a;
    }

    footer a {
        color: #ff1a1a;
    }

    footer a:hover {
        color: #fff;
    }
    </style>
</head>

<body>

<header class="neon-header py-4">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <div class="logoo">
      <a href="#"><img width="90px" src="./assets/logo1.png" alt=""></a>
    </div>

    <!-- Navigation Menu -->
    <nav class="nav-menu">
      <ul class="nav-links d-flex">
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <!-- User Icons -->
    <div class="user-icons d-flex align-items-center">
      <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
        <div class="text-white">Welcome, &nbsp;<i><span class="text-danger"><?php echo $_SESSION['user_name']; ?></span></i></div>
        <div class="text-white"><i>!!!</i></div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <!-- Cart Icon -->
        <button class="btn btn-sm  text-white mt-2">
        <h4><a href="cart.php">
          
            <i class="bi bi-cart3 text-white"></i>
            <span class="badge"><?php echo $cart_count; ?></span>
          
          </a>
          </h4>
        </button>
        &nbsp;&nbsp;
        <a href="logout.php" class="nav-icon ms-3"><i class="fas fa-sign-out-alt"></i> Logout</a>
      <?php endif; ?>
    </div>
  </div>
</header>


    <div class="page-info-section">
        <h1>Your Cart</h1>
    </div>

    <div class="page-area cart-page spad">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-th">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th class="total-th">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Fetch cart details
                    $query = mysqli_query($db_conn, "SELECT * FROM cart ");
                    $total_cart_price = 0; // To store total cart price
                    while ($item = mysqli_fetch_object($query)) {
                        $total_cart_price += $item->price; // Add price of each item to total
                    ?>
                        <tr>
                            <td class="product-col">
                                <div class="pc-title">
                                    <img src="./assets/<?php echo $item->img ?>" alt="<?php echo $item->name ?>">
                                    <h4><?php echo $item->name ?></h4>
                                </div>
                            </td>
                            <td class="price-col">$<?php echo number_format($item->price, 2) ?></td>
                            <td class="quy-col">
                                <div class="quy-input">
                                    <input type="number" value="1" min="1">
                                </div>
                            </td>
                            <td class="total-col">$<?php echo $total_cart_price ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
<br><br>
            <div class="row cart-buttons">
                <div class="col-lg-5 col-md-5">
                    <button class="btn-continue"><a href="http://localhost/hackathon/user.php">Continue shopping</a></button>
                </div>
                <div class="col-lg-7 col-md-7 text-lg-right text-left">
                    <button class="btn-clear"><a href="http://localhost/hackathon/logout.php"></a>Clear cart</button>
                    <button class="btn-update" ><a href="http://localhost/hackathon/user.php"></a>Update Cart</button>
                </div>
            </div>
        </div>

        <div class="card-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="cart-total-details">
                            <h4>Cart total</h4>
                            <ul class="cart-total-card">
                                <li>Subtotal <span>$59.90</span></li>
                                <li>Shipping <span>Free</span></li>
                                <li class="total">Total <span>$<?php echo $total_cart_price ?></span></li>
                            </ul>
                            <a href="#" class="site-btn btn-full">Proceed to checkout</a>
                        </div>
                    </div>
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


</body>

</html>