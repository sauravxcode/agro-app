<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Agro App</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="../includes/main.css">
        <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
</head>
<body>
  <?php include('../includes/header.php');
    include('../includes/config.php');
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

  ?>
  <div class="profile-wrapper">
      <div class="profile-container">
            <h4 class="header-line">My Profile</h4>
          <div class="profile-row">
                  <div class="profile-panel">
                      <div class="panel-heading">
                          My Profile
                      </div>
                      <div class="panel-body">
                          <form name="updateProfileForm" method="post">
                              <div class="form-group">
                                  <label>User ID:</label>
                                  <input class="form-control" type="text" name="user_id" value="<?php echo $row["id"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>Full Name:</label>
                                  <input class="form-control" type="text" name="full_name" value="<?php echo $row["full_name"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>Date Of Birth:</label>
                                  <input class="form-control" type="text" name="dob" value="<?php echo $row["date_of_birth"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>Username:</label>
                                  <input class="form-control" type="text" name="username" value="<?php echo $row["username"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>Email:</label>
                                  <input class="form-control" type="text" name="email" value="<?php echo $row["email"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>Gender:</label>
                                  <input class="form-control" type="text" name="gender" value="<?php echo $row["gender"]?>" readonly />
                              </div>
                              <div class="form-group">
                                  <label>State:</label>
                                  <input class="form-control" type="text" name="state" value="<?php echo $row["state"]?>" readonly />
                              </div>
                              
                              <!-- <button type="submit" name="update" class="view-more">Update Now</button> -->
                          </form>
                      </div>
                  </div>
          </div>
      </div>
  </div>

   <?php include('../includes/footer.php');?>
</body>
</html>
