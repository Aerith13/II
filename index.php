<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>WYRE NFT Marketplace</title>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style/style.css">
   <link rel="shortcut icon" href="assets/logo2.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   <style>
      body {
         background-color: #F8F9FD;
         font-family: 'Plus Jakarta Sans', sans-serif;
      }
   </style>
</head>

<body>
   <?php

   session_start();

   include 'config/connector.php';

   if (isset($_SESSION['username']) == NULL) {
      $_SESSION['username'] = NULL;
   } else {
      $current_user = $_SESSION['username'];
   }
   $current_user = $_SESSION['username'];
   $query_profile = mysqli_query($connect, "SELECT * FROM `nft_acc` WHERE username='$current_user'");

   $return = mysqli_fetch_assoc($query_profile);

   ?>

   <?php

   if (isset($_GET['page']) && $_GET['page'] == 'admin') {
      null;
   } else if (isset($_GET['page']) && $_GET['page'] == 'add') {
      null;
   } else if (isset($_GET['page']) && $_GET['page'] == 'edit') {
      null;
   } else {
   ?>
      <header>
         <nav>
            <div class="flex-header">
               <div class="logo-text"><img class="logo-img" src="assets/logo2.png" alt="logo1" width="35" height=auto>&emsp14; Wyre</div>
               <div class="nav-content-center">
                  <div class="nav-item"><a class="a" href="index.php">Home</a></div>
                  <div class="nav-item"><a class="a" href="index.php?page=explore">Explore</a></div>
               </div>
               <div class="nav-content-end">
                  <?php
                  if (isset($_SESSION['username']) == NULL) {
                  ?>
                     <a href="index.php?page=login">
                        <button class="login-button">Login</button>
                     </a>
                  <?php
                  } else {
                  ?>
                     <div class="profile" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/user1.png" alt="user1" width="40" style="margin-right: 10px;"> <?php echo $_SESSION['username'] ?>
                     </div>
                     <ul class="dropdown-menu mt-2">
                        <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                     </ul>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </nav>
      </header>
   <?php
   }

   ?>

   <?php

   if (isset($_GET['page']) && isset($_GET['id'])) {
      $page = $_GET['page'];

      switch ($page) {
         case 'detail':
            include "detail.php";
            break;
         case 'edit':
            include "edit-admin.php";
            break;
         case 'checkout':
            include "checkout.php";
            break;
      }
   } else if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
         case 'explore':
            include "explore.php";
            break;
         case 'login':
            include "login-page.php";
            break;
         case 'register':
            include "register-page.php";
            break;
         case 'admin':
            include "admin.php";
            break;
         case 'add':
            include "add-admin.php";
            break;
      }
   } else {
      include "home.php";
   }

   ?>

   <?php

   if (isset($_GET['page']) && $_GET['page'] == 'add') {
      null;
   } else if (isset($_GET['page']) && $_GET['page'] == 'edit') {
      null;
   } else {

   ?>
      <footer class="bg-dark text-center text-lg-start">
         <div class="footer-text">
            Copyright ⓒ 2023 &emsp13; • &emsp13; BSIT 2A &emsp13; • &emsp13; FAQ &emsp13;
      </footer>
   <?php

   }

   ?>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
   </script>
</body>

</html>