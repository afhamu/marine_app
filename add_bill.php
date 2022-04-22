<?php
error_reporting(0);
session_start();
include ('connection.php');

if (isset($_POST['save'])) {
    
    $container_count = $_POST['count']+1;
    //echo $container_count;
   
    $result1 = $conn->prepare("SELECT id FROM bill ORDER BY ID DESC LIMIT 1");
    $result1->execute();
    $ids =  $result1->fetchAll();
    
    foreach ($ids as $id):

        $id = $id['id']+1;
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_temp_loc = $_FILES['file']['tmp_name'];
        $uploadDir = "uploads/grace/". $id.".pdf";
        move_uploaded_file($file_temp_loc, $uploadDir);


    endforeach;
    
    if (!empty($_POST['bill_of_lading']) && !empty($_POST['consignee']) && !empty($_POST['address']) && !empty($_POST['vessel']) && !empty($_POST['voyage_no'])&& !empty($_POST['port_of_loading']) && !empty($_POST['client'])
        && !empty($_POST['shipping_line']) && !empty($_POST['eta_date']) && !empty($_POST['port_of_discharge'])){
            $bill_lading =  $_POST['bill_of_lading'];
            $consignee = $_POST['consignee'];
            $address = $_POST['address'];
            $vessel = $_POST['vessel'];
            $voyage_no = $_POST['voyage_no'];
            $port_of_loading = $_POST['port_of_loading'];
            $client = $_POST['client'];
            $shipping_line = $_POST['shipping_line'];
            $eta_date = $_POST['eta_date'];
            $port_of_discharge = $_POST['port_of_discharge'];

           
        $sql = "INSERT INTO bill (containers, bill_of_lading, consignee, address, vessel, voyage_no, port_of_loading, client, shipping_line, eta_date, port_of_discharge) 
        VALUES ('$container_count','$bill_lading','$consignee','$address','$vessel','$voyage_no','$port_of_loading','$client','$shipping_line','$eta_date','$port_of_discharge')";
        $conn->query($sql) === true;
    }
    
    
    for($i = 0; $i < $container_count; $i++){
        
        $container_no = $_POST['container_no'][$i];
        $seal_no = $_POST['seal_no'][$i];
        $container_type = $_POST['container_type'][$i];
        $description = $_POST['desc'][$i];
        $weight = $_POST['weight'][$i];
        
        $num = $i+1;
        $sql = "INSERT INTO containers (num,bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
    }
    
    $conn = null;
    header('Location: '.$_SESSION['url']);

}