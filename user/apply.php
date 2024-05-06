<?php 
include_once("../includes/session_start.php");
include_once("../includes/config.php");

$user_id = $_SESSION['id'];
$s_id = $_GET['scheme_id'];
$apply_date = date("Y-m-d");

$sql = "SELECT * FROM application WHERE user_id = '$user_id' AND scheme_id = '$s_id'";
$result = mysqli_query($conn, $sql) or die('Query failed: ' . mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('You have already applied for this scheme');</script>";
    echo "<script>window.location.href='schemes.php';</script>";
} else {
?>
    <script>
        var apply = confirm('Are you sure you want to apply?');
        if (apply) {
            <?php
                $sql1 = "INSERT INTO application(user_id,scheme_id,apply_date) VALUES('$user_id','$s_id','$apply_date') ";
                mysqli_query($conn, $sql1);
            ?>
            alert('Application Submitted');
            window.location.href='schemes.php';
        }
        else {
            window.location.href ='schemes.php';
        }
    </script>
<?php
}
mysqli_close($conn);
?>
