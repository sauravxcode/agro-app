<?php
  include_once("../includes/session_start.php");
  if ($_SESSION["username"]!="admin"){
    echo "ACCESS DENIED";
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users - Agro App</title>

    <link rel="stylesheet" href="../user/dash.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
</head>
<body>
  <?php include('../includes/header.php');?>
 
  <section class="myschemes">
    <div class="header-container">
        <h4 class="header-line">EDIT USERS</h4>
    </div>
    <div class="edit-user-custom-panel">
        <div class="custom-panel-heading">
            User Information
        </div>
        <div class="custom-panel-body">
            <div class="table-responsive">
                <table class="custom-table" id="custom-data-table">
                    <thead>
                        <tr>
                            <th>User_ID</th>
                            <th>Username</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once('../includes/config.php');
                    $query = "SELECT id,username,date_of_birth,email FROM users";
                    $result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));

                    while ($row = mysqli_fetch_assoc($result)) {
                        $user_id = $row['id'];
                        $username = $row['username'];
                        $dob = $row['date_of_birth'];
                        $email = $row['email'];

                        if ($username == "admin") continue;
                    ?>
                        <tr>
                            <td><?php echo $user_id ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $dob ?></td>
                            <td><?php echo $email ?></td>
                            <td><div class="edit-actions">
                                <a href="<?php echo "delete-user.php?user_id=$user_id"; ?>"><button class="schemes-btn delete-schemes" ><i class="ri-delete-bin-6-fill"></i> Delete</button></a>
                                </div> 
                            </td>
                        </tr>
                    <?php
                        } mysqli_close($conn);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>
   <?php include('../includes/footer.php');?>
</body>
</html>