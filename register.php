
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "includes/config.php";
    
    $full_name = mysqli_real_escape_string($conn,$_POST["full_name"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $dob = mysqli_real_escape_string($conn,$_POST["dob"]);
    $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
    $state = mysqli_real_escape_string($conn,$_POST["state"]);
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,md5($_POST["password"]));

    $sql_username = "SELECT * FROM users WHERE username = '$username'";
    $result_username = mysqli_query($conn, $sql_username);

    $sql_email = "SELECT * FROM users WHERE email = '$email'";
    $result_email = mysqli_query($conn, $sql_email);

    if (mysqli_num_rows($result_username) > 0 || mysqli_num_rows($result_email) > 0) {
        echo "<script>alert('Username/Email already exists');</script>";
        echo "<script>window.location.href='register.php';</script>";
    }


    else {

        $sql1 = "INSERT INTO users (full_name, email, date_of_birth, gender, state, username, password)
                VALUES ('$full_name', '$email', '$dob', '$gender', '$state', '$username', '$password')";

        if (mysqli_query($conn, $sql1)) {
            echo "<script>alert('Registration Successful');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
        else {
            echo "Error: ". $sql1. "<br>". mysqli_error($conn);
        }
    }
    mysqli_close($conn);


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title of the page -->
    <title>Registration Form | Agro App</title>

    <!-- External CSS file for styling -->
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="../includes/main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Container for the registration form -->
    <div class="container-box">
        <!-- Form for user input -->
        <form id="RegistrationForm" method="post">
            <h1>Register</h1>

            <!-- Input box for full name -->
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <i class='bx bx-user'></i>
            </div>

            <!-- Input box for email -->
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bx-mail-send'></i>
            </div>

            <!-- Input box for date of birth -->
            <div class="input-box dateofbirth">
                <label>DOB:</label>
                <input type="date" name="dob" required>
            </div>

            <!-- Input box for gender -->
            <div class="input-box gender-dropdown">
                <select name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Input box for choosing the state -->
            <div class="input-box">
                <input type="text" name="state" placeholder="State" required>
                <i class='bx bx-map'></i>
            </div>

            <!-- Input box for username -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bx-at'></i>
            </div>

            <!-- Input box for password -->
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bxs-hide' id="togglePassword"></i> <!-- Change icon class to eye icon -->
            </div>

            <!-- Checkbox for terms and conditions -->
            <div class="term-checkbox">
                <label><input type="checkbox" name="terms_condition" id="terms_condition" required>I consent to terms & conditions</label>
            </div>

            <!-- Button for form submission -->
            <button type="submit" class="btn" name="submit">Register</button>

            <!-- Link for existing users to login -->
            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

    <script src="assets/js/password.js"></script>
</body>

</html>
