<?php
include 'include/connection.php';


$connection = new connection();

$id = $_POST['id'];

$data = $connection->acceptuser($id);
header('location:admin_home.php');
?>


<!-- <a href="accept_user.php?id=<?php echo $value['id'] ?> "> -->
<!-- <button class="accept" id="<?php echo $value['id'] ?>" type="button">Accept</button> -->
<!-- </a> -->
<!-- <a href="reject_user.php?id=<?php echo $value['id'] ?>"> -->
<!-- <button class="reject" type="button" id="<?php echo $value['id'] ?>">Reject</button> -->
<!-- </a> -->