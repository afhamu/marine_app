<?php
include ('connection.php');

if (isset($_POST['save'])){
    if(!empty($_POST['client_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['ng-states'])&& !empty($_POST['city']) && !empty($_POST['currency'])) {
        $client_name = $_POST['client_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $state = $_POST['ng-states'];
        $city = $_POST['city'];
        $currency = $_POST['currency'];

        $sql = "INSERT INTO client (client_name, email, phone, client_address, client_state, city, currency) VALUES ('$client_name', '$email', '$phone', '$address', '$state', '$city', '$currency')";
        $conn->query($sql) === true;
        }

    header("Location: show_customers.php");
}
?>