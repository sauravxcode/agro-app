<?php
include_once("includes/session_start.php");
session_unset();
session_destroy();
header("location:../index.php");
?>
