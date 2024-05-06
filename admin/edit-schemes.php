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
    <title>My Schemes - Agro App</title>

    <link rel="stylesheet" href="../user/dash.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
</head>
<body>
  <?php include('../includes/header.php');?>

  <section class="myschemes">
    <div class="header-container">
        <h4 class="header-line">MY SCHEMES</h4>
    </div>
    .<div class="scheme-add-btn">
        <a href="add-scheme-form.php"><button class="schemes-btn edit-btn"><i class="ri-pencil-fill"></i>ADD NEW SCHEMES</button></a>
    </div>

    <div class="custom-panel">
        <div class="custom-panel-heading">
            My Schemes
        </div>
        <div class="custom-panel-body">
            <div class="table-responsive">
                <table class="custom-table" id="custom-data-table">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Scheme Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once('../includes/config.php');
                    $query = "SELECT scheme_id,name,description FROM schemes";
                    $result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));

                    while ($row = mysqli_fetch_assoc($result)) {
                        $scheme_id = $row['scheme_id'];
                        $name = $row['name'];
                        $description = $row['description'];
                    ?>
                        <tr>
                            <td><?php echo $scheme_id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $description ?></td>
                            <td>
                                <div class="edit-actions">
                                <a href="<?php echo "edit-scheme-form.php?scheme_id=$scheme_id"; ?>"><button class="schemes-btn edit-schemes"><i class="ri-pencil-fill"></i> Edit</button></a>
                                <a href="<?php echo "delete-scheme.php?scheme_id=$scheme_id"; ?>"><button class="schemes-btn delete-schemes" ><i class="ri-delete-bin-6-fill"></i> Delete</button></a>
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