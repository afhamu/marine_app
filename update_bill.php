<?php
error_reporting(0);
 include ('connection.php');

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT * FROM bill WHERE id = '$id'";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $bills = $statement->fetchAll(PDO::FETCH_OBJ);

    foreach ($bills as $bill):

        $bill_of_lading =  $bill->bill_of_lading;
        $container_num = $bill->containers;
        

if (isset($_POST['update'])) 

{

    $container_count = $_POST['count'];
    $container_count = $container_count+ $container_num;

    //echo $container_count;
    //echo "<br/>";

    
    if (!empty($_POST['bill_of_lading']) && !empty($_POST['consignee']) && !empty($_POST['address']) 
    && !empty($_POST['vessel']) && !empty($_POST['voyage_no']) && !empty($_POST['port_of_loading']) 
    && !empty($_POST['client']) && !empty($_POST['shipping_line']) && !empty($_POST['port_of_discharge'])) 
    
    {

    
        $bill_of_lading =  $_POST['bill_of_lading'];
        $consignee = $_POST['consignee'];
        $address = $_POST['address'];
        $vessel = $_POST['vessel'];
        $voyage_no = $_POST['voyage_no'];
        $port_of_loading = $_POST['port_of_loading'];
        $client = $_POST['client'];
        $shipping_line = $_POST['shipping_line'];
        $eta_date = $_POST['eta_date'];
        $port_of_discharge = $_POST['port_of_discharge'];


        $update = "UPDATE bill set containers = '$container_count', bill_of_lading = '$bill_of_lading',
            consignee = '$consignee', address = '$address', vessel = '$vessel',
            voyage_no = '$voyage_no', port_of_loading = '$port_of_loading', client = '$client', 
            shipping_line = '$shipping_line', eta_date = '$eta_date', port_of_discharge = '$port_of_discharge' WHERE  id = '$id'";

        $updt = $conn->prepare($update);
        $updt->execute();

    }


        $container_no = $_POST['container_no'][0];
        $seal_no = $_POST['seal_no'][0];
        $container_type = $_POST['container_type'][0];
        $description = $_POST['desc'][0];
        $weight = $_POST['weight'][0];
    
        $container_no2 = $_POST['container_no'][1];
        $seal_no2 = $_POST['seal_no'][1];
        $container_type2 = $_POST['container_type'][1];
        $description2 = $_POST['desc'][1];
        $weight2 = $_POST['weight'][1];
    
        $container_no3 = $_POST['container_no'][2];
        $seal_no3 = $_POST['seal_no'][2];
        $container_type3 = $_POST['container_type'][2];
        $description3 = $_POST['desc'][2];
        $weight3 = $_POST['weight'][2];
    
        $container_no4 = $_POST['container_no'][3];
        $seal_no4 = $_POST['seal_no'][3];
        $container_type4 = $_POST['container_type'][3];
        $description4 = $_POST['desc'][3];
        $weight4 = $_POST['weight'][3];

        $container_no5 = $_POST['container_no'][4];
        $seal_no5 = $_POST['seal_no'][4];
        $container_type5 = $_POST['container_type'][4];
        $description5 = $_POST['desc'][4];
        $weight5 = $_POST['weight'][4];

        $container_no6 = $_POST['container_no'][5];
        $seal_no6 = $_POST['seal_no'][5];
        $container_type6 = $_POST['container_type'][5];
        $description6 = $_POST['desc'][5];
        $weight6 = $_POST['weight'][5];

        $container_no7 = $_POST['container_no'][6];
        $seal_no7 = $_POST['seal_no'][6];
        $container_type7 = $_POST['container_type'][6];
        $description7 = $_POST['desc'][6];
        $weight7 = $_POST['weight'][6];

        $container_no8 = $_POST['container_no'][7];
        $seal_no8 = $_POST['seal_no'][7];
        $container_type8 = $_POST['container_type'][7];
        $description8 = $_POST['desc'][7];
        $weight8 = $_POST['weight'][7];

        $container_no9 = $_POST['container_no'][8];
        $seal_no9 = $_POST['seal_no'][8];
        $container_type9 = $_POST['container_type'][8];
        $description9 = $_POST['desc'][8];
        $weight9 = $_POST['weight'][8];

        $container_no10 = $_POST['container_no'][9];
        $seal_no10 = $_POST['seal_no'][9];
        $container_type10 = $_POST['container_type'][9];
        $description10 = $_POST['desc'][9];
        $weight10 = $_POST['weight'][9];

        $container_no11 = $_POST['container_no'][10];
        $seal_no11 = $_POST['seal_no'][10];
        $container_type11 = $_POST['container_type'][10];
        $description11 = $_POST['desc'][10];
        $weight11 = $_POST['weight'][10];

        $container_no12 = $_POST['container_no'][11];
        $seal_no12 = $_POST['seal_no'][11];
        $container_type12 = $_POST['container_type'][11];
        $description12 = $_POST['desc'][11];
        $weight12 = $_POST['weight'][11];

        $container_no13 = $_POST['container_no'][12];
        $seal_no13 = $_POST['seal_no'][12];
        $container_type13 = $_POST['container_type'][12];
        $description13 = $_POST['desc'][12];
        $weight13 = $_POST['weight'][12];

        $container_no14 = $_POST['container_no'][13];
        $seal_no14 = $_POST['seal_no'][13];
        $container_type14 = $_POST['container_type'][13];
        $description14 = $_POST['desc'][13];
        $weight14 = $_POST['weight'][13];

        $container_no15 = $_POST['container_no'][14];
        $seal_no15 = $_POST['seal_no'][14];
        $container_type15 = $_POST['container_type'][14];
        $description15 = $_POST['desc'][14];
        $weight15 = $_POST['weight'][14];

        $container_no16 = $_POST['container_no'][15];
        $seal_no16 = $_POST['seal_no'][15];
        $container_type16 = $_POST['container_type'][15];
        $description16 = $_POST['desc'][15];
        $weight16 = $_POST['weight'][15];

        $container_no17 = $_POST['container_no'][16];
        $seal_no17 = $_POST['seal_no'][16];
        $container_type17 = $_POST['container_type'][16];
        $description17 = $_POST['desc'][16];
        $weight17 = $_POST['weight'][16];

        $container_no18 = $_POST['container_no'][17];
        $seal_no18 = $_POST['seal_no'][17];
        $container_type18 = $_POST['container_type'][17];
        $description18 = $_POST['desc'][17];
        $weight18 = $_POST['weight'][17];

        $container_no19 = $_POST['container_no'][18];
        $seal_no19 = $_POST['seal_no'][18];
        $container_type19 = $_POST['container_type'][18];
        $description19 = $_POST['desc'][18];
        $weight19 = $_POST['weight'][18];

        $container_no20 = $_POST['container_no'][19];
        $seal_no20 = $_POST['seal_no'][19];
        $container_type20 = $_POST['container_type'][19];
        $description20 = $_POST['desc'][19];
        $weight20 = $_POST['weight'][19];

    if($container_count == 1){

        if (!empty($_POST['container_no'][0]) && !empty($_POST['seal_no'][0]) && !empty($_POST['container_type'][0]) && !empty($_POST['desc'][0]) && !empty($_POST['weight'][0]))
            
        {
            
            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;

            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
        }

    }elseif($container_count == 2){
            
            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;

            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;

    }elseif($container_count == 3){
            

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
        
        
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
                
    } elseif($container_count == 4){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;

            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
        
    } elseif($container_count == 5){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
                
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;

        }elseif($container_count == 6){
            
            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;  
            
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;
            $num = 6;
            $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
            $conn->query($sql6) === true;
    
        }elseif($container_count == 7){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
            
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;
            $num = 6;
            $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
            $conn->query($sql6) === true;
            $num = 7;
            $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
            $conn->query($sql7) === true;


        }elseif($container_count == 8){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
            
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;
            $num = 6;
            $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
            $conn->query($sql6) === true;
            $num = 7;
            $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
            $conn->query($sql7) === true;
            $num = 8;
            $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
            $conn->query($sql8) === true;
    
        }elseif($container_count == 9){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
            
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;
            $num = 6;
            $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
            $conn->query($sql6) === true;
            $num = 7;
            $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
            $conn->query($sql7) === true;
            $num = 8;
            $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
            $conn->query($sql8) === true;
            $num = 9;
            $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
            $conn->query($sql9) === true;
    
        }elseif($container_count == 10){

            $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
            $conn->query($sql) === true;
            
            $num = 1;
            $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
            $conn->query($sql) === true;
            $num = 2;
            $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
            $conn->query($sql2) === true;
            $num = 3;
            $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
            $conn->query($sql3) === true;
            $num = 4;
            $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
            $conn->query($sql4) === true;
            $num = 5;
            $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
            $conn->query($sql5) === true;
            $num = 6;
            $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
            $conn->query($sql6) === true;
            $num = 7;
            $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
            $conn->query($sql7) === true;
            $num = 8;
            $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
            $conn->query($sql8) === true;
            $num = 9;
            $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
            $conn->query($sql9) === true;
            $num = 10;
            $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
            $conn->query($sql9) === true;
    
        }elseif($container_count == 11){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;

    }elseif($container_count == 12){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;

    }elseif($container_count == 13){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;

    }elseif($container_count == 14){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;

    }elseif($container_count == 15){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;

    }elseif($container_count == 16){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;
        $num = 16;
        $sql16 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no16', '$seal_no16', '$container_type16', '$description16', '$weight16')";
        $conn->query($sql16) === true;

    }elseif($container_count == 17){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;
        $num = 16;
        $sql16 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no16', '$seal_no16', '$container_type16', '$description16', '$weight16')";
        $conn->query($sql16) === true;
        $num = 17;
        $sql17 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no17', '$seal_no17', '$container_type17', '$description17', '$weight17')";
        $conn->query($sql17) === true;

    }elseif($container_count == 18){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;
        $num = 16;
        $sql16 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no16', '$seal_no16', '$container_type16', '$description16', '$weight16')";
        $conn->query($sql16) === true;
        $num = 17;
        $sql17 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no17', '$seal_no17', '$container_type17', '$description17', '$weight17')";
        $conn->query($sql17) === true;
        $num = 18;
        $sql18 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no18', '$seal_no18', '$container_type18', '$description18', '$weight18')";
        $conn->query($sql18) === true;

    }elseif($container_count == 19){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;
        $num = 16;
        $sql16 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no16', '$seal_no16', '$container_type16', '$description16', '$weight16')";
        $conn->query($sql16) === true;
        $num = 17;
        $sql17 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no17', '$seal_no17', '$container_type17', '$description17', '$weight17')";
        $conn->query($sql17) === true;
        $num = 18;
        $sql18 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no18', '$seal_no18', '$container_type18', '$description18', '$weight18')";
        $conn->query($sql18) === true;
        $num = 19;
        $sql19 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no19', '$seal_no19', '$container_type19', '$description19', '$weight19')";
        $conn->query($sql19) === true;

    }elseif($container_count == 20){

        $sql = "DELETE FROM containers WHERE bill = '$bill_of_lading'";
        $conn->query($sql) === true;

        $num = 1;
        $sql = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no', '$seal_no', '$container_type', '$description', '$weight')";
        $conn->query($sql) === true;
        $num = 2;
        $sql2 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no2', '$seal_no2', '$container_type2', '$description2', '$weight2')";
        $conn->query($sql2) === true;
        $num = 3;
        $sql3 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no3', '$seal_no3', '$container_type3', '$description3', '$weight3')";
        $conn->query($sql3) === true;
        $num = 4;
        $sql4 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no4', '$seal_no4', '$container_type4', '$description4', '$weight4')";
        $conn->query($sql4) === true;
        $num = 5;
        $sql5 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no5', '$seal_no5', '$container_type5', '$description5', '$weight5')";
        $conn->query($sql5) === true;
        $num = 6;
        $sql6 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no6', '$seal_no6', '$container_type6', '$description6', '$weight6')";
        $conn->query($sql6) === true;
        $num = 7;
        $sql7 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no7', '$seal_no7', '$container_type7', '$description7', '$weight7')";
        $conn->query($sql7) === true;
        $num = 8;
        $sql8 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no8', '$seal_no8', '$container_type8', '$description8', '$weight8')";
        $conn->query($sql8) === true;
        $num = 9;
        $sql9 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no9', '$seal_no9', '$container_type9', '$description9', '$weight9')";
        $conn->query($sql9) === true;
        $num = 10;
        $sql10 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no10', '$seal_no10', '$container_type10', '$description10', '$weight10')";
        $conn->query($sql10) === true;
        $num = 11;
        $sql11 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no11', '$seal_no11', '$container_type11', '$description11', '$weight11')";
        $conn->query($sql11) === true;
        $num = 12;
        $sql12 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no12', '$seal_no12', '$container_type12', '$description12', '$weight12')";
        $conn->query($sql12) === true;
        $num = 13;
        $sql13 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no13', '$seal_no13', '$container_type13', '$description13', '$weight13')";
        $conn->query($sql13) === true;
        $num = 14;
        $sql14 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no14', '$seal_no14', '$container_type14', '$description14', '$weight14')";
        $conn->query($sql14) === true;
        $num = 15;
        $sql15 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no15', '$seal_no15', '$container_type15', '$description15', '$weight15')";
        $conn->query($sql15) === true;
        $num = 16;
        $sql16 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no16', '$seal_no16', '$container_type16', '$description16', '$weight16')";
        $conn->query($sql16) === true;
        $num = 17;
        $sql17 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no17', '$seal_no17', '$container_type17', '$description17', '$weight17')";
        $conn->query($sql17) === true;
        $num = 18;
        $sql18 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no18', '$seal_no18', '$container_type18', '$description18', '$weight18')";
        $conn->query($sql18) === true;
        $num = 19;
        $sql19 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no19', '$seal_no19', '$container_type19', '$description19', '$weight19')";
        $conn->query($sql19) === true;
        $num = 20;
        $sql20 = "INSERT INTO containers (num, bill, container_no, seal_no, container_type, description, weight_net) VALUES ('$num','$bill_of_lading','$container_no20', '$seal_no20', '$container_type20', '$description20', '$weight20')";
        $conn->query($sql20) === true;

    }
        
        header("Location: show_bill.php");

} // if (isset($_POST['update']))


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill of Lading</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/index.js"></script>
    <style>
        select.round {
          background-image:
            linear-gradient(45deg, transparent 50%, gray 50%),
            linear-gradient(135deg, gray 50%, transparent 50%),
            radial-gradient(#ddd 70%, transparent 72%);
          background-position:
            calc(100% - 20px) calc(1em + 2px),
            calc(100% - 15px) calc(1em + 2px),
            calc(100% - .5em) .5em;
          background-size:
            5px 5px,
            5px 5px,
            1.5em 1.5em;
          background-repeat: no-repeat;
        }
        
        select.round:focus {
          background-image:
            linear-gradient(45deg, white 50%, transparent 50%),
            linear-gradient(135deg, transparent 50%, white 50%),
            radial-gradient(gray 70%, transparent 72%);
          background-position:
            calc(100% - 15px) 1em,
            calc(100% - 20px) 1em,
            calc(100% - .5em) .5em;
          background-size:
            5px 5px,
            5px 5px,
            1.5em 1.5em;
          background-repeat: no-repeat;
          border-color: green;
          outline: 0;
    }

    </style>
</head>
<body>

<?php

if($container_num < 0 ){
    $container_num = $container_num+1;
    $sql = "SELECT * FROM containers WHERE bill = '$bill_of_lading' LIMIT $container_num";
    $statement2 = $conn->prepare($sql);
    $statement2->execute();
    $containers_new = $statement2->fetchAll();
}else{
    $sql = "SELECT * FROM containers WHERE bill = '$bill_of_lading' LIMIT $container_num";
    $statement2 = $conn->prepare($sql);
    $statement2->execute();
    $containers_new = $statement2->fetchAll();
}

 
?>

<div class="main">
    <div class="container" style="width: 750px;">
        <form role="form" action="" method="POST" style="padding-top: 30px;" id="form-one" autocomplete="on" enctype="multipart/form-data">
            <h2>Bill of Lading</h2>
            <div class="form-group-1">
                        <input type="text" class="form-control" name="bill_of_lading" id="title" placeholder="Bill Lading" value="<?= $bill->bill_of_lading; ?>" required/>
                        <input type="text" class="form-control" name="consignee" id="consignee" placeholder="Consignee" value="<?= $bill->consignee; ?>"  required/>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?= $bill->address; ?>"  required/>
                        <input type="text" class="form-control" name="vessel" id="vessel" placeholder="Vessel" value="<?= $bill->vessel; ?>"  required/>
                        <input type="text" class="form-control" name="voyage_no" id="voyage_no" placeholder="Voyage No" value="<?= $bill->voyage_no; ?>" required/>
                        <input type="text" class="form-control" name="port_of_loading" id="port_of_loading" placeholder="Port of Loading" value="<?= $bill->port_of_loading; ?>" required/>
                        <?php endforeach; ?>
                <select class="form-control round" id="client" name="client" required>
                        <?php
                         $statement1 =$conn->prepare("SELECT * FROM client");
                         $statement1->execute();
                         $rows = $statement1->fetchAll();
                         ?>
                         <option value="">Select Client</option>
                        <?php foreach($rows as $row): ?>
                                <option value="<?= $row['client_name'] ?>"><?= $row['client_name'] ?></option>
                        <?php endforeach; ?>
                </select>
                <select class="form-control round" id="shipping_line" name="shipping_line" required>
                            <?php
                         $statement1 =$conn->prepare("SELECT * FROM shipping_line");
                         $statement1->execute();
                         $shipping_lines = $statement1->fetchAll();
                         ?>
                            <option value="">Select Shipping Line</option>
                        <?php foreach($shipping_lines as $row): ?>
                            <option value="<?= $row['shipping_line_name'] ?>"><?= $row['shipping_line_name'] ?></option>
                        <?php endforeach; ?>
                        </select>
                <input type="date" class="form-control" id="date" value="<?= $bill->eta_date; ?>" name="eta_date" required>
                <select class="form-control round" id="port_of_loading" name="port_of_discharge" required>
                    <option value="">Select Port of Discharge</option>
                    <option value="APAPA">APAPA</option>
                    <option value="TINCAN">TINCAN</option>
                    <option value="ONNE">ONNE</option>
                    <option value="RIVERS">RIVERS</option>
                    <option value="DELTA">DELTA</option>
                    <option value="CALABAR">CALABAR</option>
                </select>
                <input type="file" class="form-control-file" name="file" id="file" required>
            </div>
        
            <div id="main-div">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="h4">Container</h3>
                    </div>
                    <div class="col-md-3" style="float: left;">
                        <button  class="btn btn-primary custom btn-sm" type="button" name="addrow" onclick="onClick()">Add</button>
                    </div>
                    <div class="col-md-3" style="float: left;">
                        <button  class="btn btn-primary custom btn-sm" type="button" name="removerow" onclick="remove()">Remove</button>
                    </div>
                </div>
                <br>
                <?php
                foreach($containers_new as $container_new):
                ?>
                <div class="row">
                    <div class="col-sm-3">
                        <input class="form-control form-control-sm" value="<?= $container_new['container_no'];?>" type="text" name="container_no[]" id="container_no" required>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control form-control-sm" value="<?= $container_new['seal_no'];?>" type="text" name="seal_no[]" id="seal_no" required>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control form-control-sm" value="<?= $container_new['weight_net'];?>" type="text" name="weight[]" id="weight" required>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control form-control-sm round" name="container_type[]" id="type" required>
                            <option value="">Type</option>
                            <option value="20FT">20FT</option>
                            <option value="40FT">40FT</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control form-control-sm" type="text"  value="<?= $container_new['description'];?>" name="desc[]" id="desc" placeholder="Description" required>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <input type="submit" name="update" value="Save" style="width: 100px;" class="btn btn-success">
        </form>
    </div>
</div>
<?php //endforeach;?>
<script type="text/javascript">
    var clicks = 0;
    var myForm;
    var maindiv;
    var div;
    var count;
    var count2;

    function onClick() {
        clicks += 1;
        myForm = document.getElementById('form-one');
        maindiv = document.getElementById('main-div');
        div = document.createElement('div');
        div.className = 'row';
        div.innerHTML = '<div class="col-md-3">\n' +
            ' <input class="form-control form-control-sm" type="text" name="container_no[]" id="container_no" placeholder="Container no" required>\n' +
            '</div>\n' +
            '<div class="col-md-2">\n' +
            '<input class="form-control form-control-sm" type="text" name="seal_no[]" id="seal_no" placeholder="Seal no" required>\n' +
            '</div>\n' +
            '<div class="col-md-2">\n' +
            '<input class="form-control form-control-sm" type="text" name="weight[]" id="weight" placeholder="Weight" required>\n' +
            '</div>\n' +
            '<div class="col-md-2">\n' +
            '<select class="form-control form-control-sm round" name="container_type[]" id="type" required>\n' +
            '<option value="">Type</option>\n' +
            '<option value="20FT">20FT</option>\n' +
            '<option value="40FT">40FT</option>\n' +
            '</select>\n' +
            '</div>\n' +
            '<div class="col-md-3">\n' +
            '<input class="form-control form-control-sm" type="text" name="desc[]" id="desc" placeholder="Description" required>\n' +
            '</div>\n';
        maindiv.appendChild(div);
        count = document.createElement('input');
        count.value = clicks;
        count.name = 'count';
        count.hidden = true;
        myForm.appendChild(count);

    };

    function remove() {
        var divs = div.previousSibling;
        maindiv.removeChild(divs);
        clicks-=1;
        count2 = document.createElement('input');
        count2.value = clicks;
        count2.name = 'count';
        count2.hidden = true;
        myForm.replaceChild(count2, count);
    };

</script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>