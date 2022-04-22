<?php
include ('connection.php');
include ('auth.php');

$id = $_REQUEST['id'];
$update = "UPDATE bill set status = 'open' WHERE id = $id";
$conn->query($update) === true;

header("Location: show_bill.php");

$conn->close();
?>
