<?php
include('config.php');

session_start();


if (isset($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    
    $pass_md5 = md5($pass);

    // Query to fetch user details
    $query = mysqli_query($db_conn, "SELECT * FROM `accounts` WHERE `email` = '$username' AND `password` = '$pass_md5'");

    if (mysqli_num_rows($query) > 0) {
        // Fetch user object
        $user = mysqli_fetch_object($query);
        // Set session variables
        $_SESSION['login'] = true;
        $_SESSION['session_id'] = uniqid();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name; // Store the user's name

        // Debug: Check if session is set
        if (isset($_SESSION['user_name'])) {
            echo "Session user_name is set to: " . $_SESSION['user_name'];
        } else {
            echo "Session user_name is not set.";
        }

        // Redirect to user page
        header('Location: user.php');
        exit();
    } else {
        echo '<div class="text-white">Invalid Credentials</div>';
    }
}
?>



<?php 
  if (isset($_POST['register'])) {?>
   
  
              <form action="registration.php" id="" method="post" enctype="multipart/form-data">
                               
                      <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" class="form-control" placeholder="" name="username">
                          <label for="">Email</label>
                          <input type="email" class="form-control" placeholder="" name="email">
                          <label for="">Create password</label>
                          <input type="password" class="form-control" placeholder="" name="pass">
                          <button  name="submit_registration" class="btn btn-success mt-5">Submit</button>
                       </div>
                     
                    
 <?php }?>

  