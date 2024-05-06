<?php
  include_once("../includes/session_start.php");
  if ($_SESSION["username"]!="admin"){
    echo "ACCESS DENIED";
    exit;
  }
  else{
    include_once("../includes/config.php");

    $scheme_id = $_GET['scheme_id'];
    
    $sql = "DELETE FROM schemes WHERE scheme_id = $scheme_id";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Scheme Deleted Successfully');</script>";
        echo "<script>window.location.href='edit-schemes.php';</script>";
    } else{
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    }
?>