<?php include("config.php") ?>

<?php 
   if (isset($_POST['submit_registration'])) { 
    
    $name = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    
    $pass_md5 = md5($pass);

    mysqli_query($db_conn,"INSERT INTO `accounts` (`name`,`email`,`password`) values ('$name','$email','$pass_md5')");

    header('Location: login.php');

   }?>

