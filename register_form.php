<?php
require 'config.php';

session_start();

$error = '';

if(isset($_POST['submit'])){
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);

    // Check if the email is already registered
      $select = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $select);
      if(mysqli_num_rows($result) > 0){
         $error = 'Email already exists!';
      } else {
         // Insert user into database
         $insert = "INSERT INTO users (username, email, password, usertype) VALUES ('$username', '$email', '$password', '$usertype')";
         if(mysqli_query($conn, $insert)){
               header('Location: login_form.php');
               exit();
         } else {
               $error = 'Registration failed. Please try again!';
         }
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign up Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Sign Up</h3>
      <?php
      if(!empty($error)){
         echo '<span class="error-msg">'.$error.'</span>';
      }
      ?>
      <input type="text" name="username" required placeholder="Enter your Username">
      <input type="email" name="email" required placeholder="Enter your Email">
      <div class="password-input">
         <input type="password" id="password" name="password" minlength="6" placeholder="Enter your Password">
         <button type="button" class="show-hide-btn" onclick="showHidePassword('password')">
            <i class="fas fa-eye-slash"></i>
         </button>
      </div>
      <select name="usertype" required>
         <option value="">Select User Type</option>
         <option value="Company">Company</option>
         <option value="Administrator">Administrator</option>
      </select>
      <input type="submit" name="submit" value="Sign up" class="form-btn">
      <p>Already have an account? <a href="login.php">Login</a></p>
   </form>
</div>

<script src="script.js"></script>