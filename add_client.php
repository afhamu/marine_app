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
        
        if(isset($_FILES['file'])){
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_temp_loc = $_FILES['file']['tmp_name'];
        $uploadDir = "uploads/grace/". $client_name.".pdf";
        move_uploaded_file($file_temp_loc, $uploadDir);
     }

        $sql = "INSERT INTO client (client_name, email, phone, client_address, client_state, city, currency) VALUES ('$client_name', '$email', '$phone', '$address', '$state', '$city', '$currency')";
        $conn->query($sql) === true;
        
        }
    
    $conn = null;
    header("Location: show_clients.php");
}
?>