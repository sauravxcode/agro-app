<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Agro App</title>
    <!-- CUSTOM STYLE  -->
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
</head>
<body>
  <?php include('../includes/header.php');?>
      <div class="content-wrapper">
        <div class="header-container">
            <h4 class="header-line">User DASHBOARD</h4>
          </div>
          </div>
          <?php
          if(isset($_SESSION["active"])){
          ?>
          <div class="card-wrapper">
            <a href="schemes.php"><img src="../assets/image/totalschemes.png" alt="Total Schemes"></a>

            <a href="myschemes.php"><img src="../assets/image/myschemes.png" alt="My Schemes"></a>

            <a href="myprofile.php"><img src="../assets/image/profile.png" alt="My Profile"></a>
          </div>
      <?php }
          else{
      ?>
        <div class="card-wrapper">
            <a href="schemes.php"><img src="../assets/image/totalschemes.png" alt="Total Schemes"></a>
        </div>
   <?php } include('../includes/footer.php');?>
</body>
</html>