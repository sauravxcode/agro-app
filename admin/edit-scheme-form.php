<?php
  include_once("../includes/session_start.php");
  if ($_SESSION["username"]!="admin"){
    echo "ACCESS DENIED";
    exit;
  }
  else{
    if(isset($_POST["submit"])){
    include_once("../includes/config.php");

    $scheme_id = mysqli_real_escape_string($conn,$_POST['scheme_id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $contact_info = mysqli_real_escape_string($conn,$_POST['contact_info']);
    $launch_date = mysqli_real_escape_string($conn,$_POST['launch_date']);
    $last_date = mysqli_real_escape_string($conn,$_POST['last_date']);
    $ministry_name = mysqli_real_escape_string($conn,$_POST['ministry_name']);
    $eligibility = mysqli_real_escape_string($conn,$_POST['eligibility_criteria']);
    $benefits = mysqli_real_escape_string($conn,$_POST['benefits']);

    $sql = "UPDATE schemes 
            SET 
            name = '$name', 
            description = '$description', 
            contact_info = '$contact_info', 
            launch_date = '$launch_date', 
            last_date = '$last_date', 
            ministry_name = '$ministry_name', 
            eligibility_criteria = '$eligibility', 
            benefits = '$benefits' 
            WHERE scheme_id = $scheme_id";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Scheme Updated Successfully');</script>";
        echo "<script>window.location.href='edit-scheme-form.php?scheme_id=$scheme_id';</script>";
    } else{
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheme Application - Agro App</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
</head>
<body>
  <?php include('../includes/header.php');?>
      <section class="scheme-application">
        <div class="container-box">
    <!-- Form for scheme application -->
    <form id="SchemeApplicationForm" method="post">
        <h1>Edit Scheme</h1>

    <?php
    include_once('../includes/config.php');
    $scheme_id = $_GET["scheme_id"];

    $query = "SELECT * FROM schemes where scheme_id = $scheme_id ";
    $result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));

    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $description = $row['description'];
    $contact_info = $row['contact_info'];
    $launch_date = $row['launch_date'];
    $last_date = $row['last_date'];
    $ministry_name = $row['ministry_name'];
    $eligibilty = $row['eligibility_criteria'];
    $benefits = $row['benefits'];

        ?>
        <!-- Input box for Scheme ID -->
        <div class="input-box">
            <input type="text" name="scheme_id" value="<?php echo $scheme_id ?>" readonly>
            <i class='bx bx-id-card'></i>
        </div>

        <!-- Input box for Scheme Name -->
        <div class="input-box">
            <input type="text" name="name" value="<?php echo $name ?>" required>
            <i class='bx bx-file'></i>
        </div>

        <!-- Input box for Description -->
        <div class="input-box">
            <input type="text" name="description" value="<?php echo $description ?>" required>
            <i class='bx bx-info-circle'></i>
        </div>

        <!-- Input box for Contact Info -->
        <div class="input-box">
            <input type="text" name="contact_info" value="<?php echo $contact_info ?>" required>
            <i class='bx bx-phone'></i>
        </div>

        <!-- Input box for Launch Date -->
        <div class="input-box launchdate">
            <label>Launch Date:</label>
            <input type="date" name="launch_date" value="<?php echo $launch_date ?>" required>
        </div>

        <!-- Input box for Last Date -->
        <div class="input-box launchdate">
            <label>Last Date:</label>
            <input type="date" name="last_date" value="<?php echo $last_date ?>" required>
        </div>

        <!-- Input box for Ministry Name -->
        <div class="input-box">
            <input type="text" name="ministry_name" value="<?php echo $ministry_name ?>" required>
            <i class='bx bx-building'></i>
        </div>

        <!-- Input box for Benefits -->
        <div class="input-box">
            <input type="text" name="benefits" value="<?php echo $benefits ?>" required>
            <i class='bx bx-medal'></i>
        </div>

        <!-- Input box for Eligibility Criteria -->
        <div class="input-box">
            <input type="text" name="eligibility_criteria" value="<?php echo $eligibilty ?>" required>
            <i class='bx bx-user-check'></i>
        </div>

        <!-- Button for form submission -->
        <button type="submit" class="btn" name="submit">Update Scheme</button>
    </form>
</div>

    </div>
  </section>
   <?php mysqli_close($conn); include('../includes/footer.php');?>
</body>
</html>
