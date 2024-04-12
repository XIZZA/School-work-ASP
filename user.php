<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['username'])){
      header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

<!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
      <div class="container"> 
         <div class="profile-icon"> 
               <i class="fas fa-user-circle"></i> 
         </div> 
         <div class="nav">
               <nav> 
                  <ul> 
                     <li>
                           <a href="asset.html">Asset Classification</a>
                     </li> 
                     <li>
                           <a href="incident.html">Incident Classification</a>
                     </li> 
                     <li>
                           <a href="risk.html">Risk Management</a>
                     </li> 
                     <li>
                           <a href="logout.php" class="btn">Logout</a>
                     </li>
                  </ul> 
               </nav> 
         </div>
         <div class="content"> 
               <h3>
                  <?php if(isset($_SESSION['username'])) { ?>
                     Welcome to the dashboard, <span><?php echo $_SESSION['username'] ?></span>
                  <?php } ?>
               </h3>
               <p>Choose an option from the sidebar to get started.</p>
         </div> 
      </div>
</body>
</html>
