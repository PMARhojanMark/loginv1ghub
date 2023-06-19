<?php

@include 'config.php';


$name = $_REQUEST ['name'];
$email = $_REQUEST ['email'];
$password = $_REQUEST ['pass'];
$cpassword = $_REQUEST ['cpass'];
$user_type = $_REQUEST['user_type'];


$sql = "INSERT INTO user (name, email, pass, cpass, user_type) 
VALUES ('$name', '$email', '$password', '$cpassword', '$user_type')";

   $result = mysqli_query($conn, $insert);


   if ($result !== false && mysqli_num_rows($result) > 0) {
      $error[] = 'user already exists!';
   } else {
      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         mysqli_query($conn, $insert);
         header('location: login_form.php');
      }
   }
   


?>