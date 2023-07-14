<?php
session_start();
if (isset($_SESSION['id']) == false) {
    $_SESSION['message'] = "Login Please";
    header("location:adminlogin.php");
    exit();
}
?>