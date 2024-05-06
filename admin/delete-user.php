<?php
  include_once("../includes/session_start.php");
  if ($_SESSION["username"]!="admin"){
    echo "ACCESS DENIED";
    exit;
  }
  else{
    include_once("../includes/config.php");

    $user_id = $_GET['user_id'];
    mysqli_query($conn, "DELETE FROM application WHERE user_id = $user_id");

    //delete user
    if(mysqli_query($conn, "DELETE FROM users WHERE id = $user_id")){
        echo "<script>alert('Scheme Deleted Successfully');</script>";
        echo "<script>window.location.href='edit-user.php';</script>";
    } else{
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    }
?><?php
  include_once("../includes/session_start.php");
  if ($_SESSION["username"]!="admin"){
    echo "ACCESS DENIED";
    exit;
  }
  else{
    include_once("../includes/config.php");

    $user_id = $_GET['user_id'];
    mysqli_query($conn, "DELETE FROM application WHERE user_id = $user_id");

    //delete user
    if(mysqli_query($conn, "DELETE FROM users WHERE id = $user_id")){
        echo "<script>alert('Scheme Deleted Successfully');</script>";
        echo "<script>window.location.href='edit-user.php';</script>";
    } else{
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    }
?>