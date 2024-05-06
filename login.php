<?php
include_once "includes/config.php";

if(isset($conn,$_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5(mysqli_real_escape_string($conn,$_POST['password']));

    $query1= mysqli_query($conn,"SELECT id,username,password,full_name FROM users");
    while($row=mysqli_fetch_array($query1))
    {
        $db_name=$row["full_name"];
        $db_username=$row["username"];
        $db_password=$row["password"];
        $db_id=$row["id"];

        if($username==$db_username && $password==$db_password){
            include_once("includes/session_start.php");
            $_SESSION["active"]=true;
            $_SESSION["username"]=$db_username;
            $_SESSION["name"]=$db_name;
            $_SESSION["id"]=$db_id;

            if($_SESSION["username"]!='admin'){
                header("Location:user/dashboard.php");
                mysqli_close($conn);
                exit();
            }
            else{
                header("Location:admin/admin-db.php");
                mysqli_close($conn);
                exit();
            }
        }
        else{
            echo "<script>alert('Invalid Username or Password');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
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
    <title>Login | Agro App</title>

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
            <h1>Login</h1>

            <!-- Input box for username -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <!-- Input box for password -->
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bxs-hide' id="togglePassword"></i>
            </div>

            <!-- Section for "Remember me" checkbox and "Forgot Password" link -->
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me </label>
                <a href="forgot_pass.php">Forgot Password?</a>
            </div>

            <!-- Button for form submission -->
            <button type="submit" class="btn" name="submit">Login</button>

            <div class="register-link">
                <p>Don't have an acccount?
                    <a href="register.php">Register</a>
                </p>
            </div>
        </form>
    </div>
    <script src="assets/js/password.js"></script>
</body>
</html>
