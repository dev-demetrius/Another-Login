<?php

  session_start();

    include("functions.php");

   if($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

     IF(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $id = random_num(20);
        $query = "insert into users (id, name, email, user_name, password) values ('$id', '$name', '$email', '$user_name', '$password')";
        mysqli_query($conn, $query);

        header("Location: login.php");
        die;
     } else {

        echo "Invalid Info!";

     }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Signup</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-head">
    <img src="assets/images/tool_icon.svg" alt="" class="logo">
    <h1 class="title">Another Login</h1>
  </header>
   <div class="container">
    <form class="login-form" action="" method="POST">
      <input class="first" type="text" name="name" placeholder="Name"><br>
      <input type="text" name="email" placeholder="Email"><br>
      <input type="text" name="user_name" placeholder="Username"><br>
      <input type="password" name="password" placeholder="Password"><br>

      <input class="btn" type="submit" value="SignUp">

      
    </form>
  </div> 
  <h4 class="copyright mobile">
        Copyright © 2355 All Alien Rights Reserved
  </h4> 
</body>
</html>