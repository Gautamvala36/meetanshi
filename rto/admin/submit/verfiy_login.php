<?php
session_start();
include '../include/connection.php';
$connection = new connection();

//var_dump($check);


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check = $connection->logincheck($email, $pass);
//    var_dump($check);

    if ($check->num_rows === 1) {
        $adminData = $check->fetch_assoc();

        // Store admin details in session or perform necessary actions
        $_SESSION['id'] = $adminData['id'];
        $_SESSION['admin_email'] = $adminData['email'];
        $_SESSION['admin_password'] = $adminData['password'];

        // Redirect to the admin dashboard or another page
        header('Location: ../admin_home.php');
        exit;
    } else {
//        $_SESSION["message"]='Invalid Email or Password';
//        header("Location: ../adminlogin.php");
        header('location:../adminlogin.php?message=Invalid Email or Password');
    }

}
else{
    header('Location: ../adminlogin.php');
}
//session_destroy();

?>