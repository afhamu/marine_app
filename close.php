<?php
include ('connection.php');
include ('auth.php');

$id = $_REQUEST['id'];
$update = "UPDATE bill set status = 'closed' WHERE id = $id";
$conn->query($update) === true;

header("Location: show_bill.php");

