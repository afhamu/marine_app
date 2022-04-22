<?php

require 'connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$delete = "DELETE FROM bill WHERE id = '$id'";
$statement = $conn->prepare($delete);
$statement->execute();

header('Location: show_bill.php');

?>