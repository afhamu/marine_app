<?php

require 'connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$delete = "DELETE FROM client WHERE id = '$id'";
$statement = $conn->prepare($delete);
$statement->execute();

header('Location: show_clients.php');
echo "window.location.reload()";
?>