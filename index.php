<?php

  session_start();

    include("functions.php");

    $user_data = check_login($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
  

  
  <header class="site-head">
    <h1 class="welcome">Hello, <?php echo $user_data['name']; ?>.</h1>
    <a href="logout.php">Logout</a>
  </header>
</body>
</html>