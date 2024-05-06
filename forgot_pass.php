<?php
include_once "includes/config.php";

if(isset($conn,$_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $new_password = mysqli_real_escape_string($conn,md5($_POST['password']));

    if ($username == "admin"){
        echo "<script>alert('You cannot perform this action');</script>";
        echo "<script>window.location.href='forgot_pass.php';</script>";
        exit;
    }

    $query1= mysqli_query($conn,"SELECT username,email,date_of_birth FROM users");
    if (mysqli_num_rows($query1)>0) {
    while($row=mysqli_fetch_assoc($query1))
    {
        $db_username=$row["username"];
        $db_email=$row["email"];
        $db_dob=$row["date_of_birth"];

        if($username==$db_username && $email==$db_email && $dob==$db_dob){
            $query2 = mysqli_query($conn,"UPDATE users SET password = '$new_password' WHERE username = '$db_username'");
            if($query2){
                echo "<script>alert('Update Successful');</script>";
            }else{
                echo "<script>alert('User does not exist');</script>";
            }
            echo "<script>window.location.href='login.php';</script>";
            

        }
    }
    }else{
            echo "<script>alert('Update Failed');</script>";
            echo "<script>window.location.href='forgot_pass.php';</script>";
        }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title of the page -->
    <title>Forgot Password Page | Agro App</title>

    <!-- External CSS file for styling -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- External library for icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- Container for the login form -->
    <div class="container-box">
        <!-- Form for user input -->
        <form id="LoginForm" method="post">
            <h1>Reset Password</h1>

            <!-- Input box for username -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bx-mail-send'></i>
            </div>

            <!-- Input box for date of birth -->
            <div class="input-box dateofbirth">
                <input type="date" name="dob" placeholder="Date of Birth" required>
            </div>

            <!-- Input box for password -->
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="New Password" required>
                <i class='bx bxs-hide' id="togglePassword"></i>
            </div>

            <button type="submit" class="btn" name="submit">Submit</button>

        </form>
    </div>
    <script src="assets/js/password.js"></script>
</body>
</html>
