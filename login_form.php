<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $email = $_POST ['email'];
    $password = $_POST ['pass'];
    
    $select = "SELECT * FROM user WHERE email = '$email' && pass = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:user_panel.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_panel.php');

      }
     
   }else{
      $error[] = 'INCORRECT EMAIL OR PASSWORD!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style3.css">

</head>
<body class="body">
   
<div class="form-container">
<div class="logo-align">
      <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Philippine_Military_Academy_%28PMA%29.svg/1200px-Philippine_Military_Academy_%28PMA%29.svg.png">
   </div>

   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if(!empty($error)){
         foreach($error as $errorMsg){
            echo '<span class="error-msg">'.$errorMsg.'</span>';
         };
      };
      ?>
      <input type="email" name="email" id="mytext" placeholder="enter your email">
      <input type="password" name="pass" id="mytext" placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>