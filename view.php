<?php

include ('connection.php');
$id = $_REQUEST['id'];
$sql =  "SELECT * from bill where id = '$id'";
$result = $conn->prepare($sql);
$result->execute();
$bills = $result->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.cpom/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/my_style.css">
</head>
<body style="background-image: url('images/body-bg1.jpeg'); background-repeat: no-repeat; background-size: cover;">
<?php

foreach ($bills as $bill):

    $bill_of_lading = $bill['bill_of_lading'];
    $container_num = $bill['containers'];

    $limit = $container_num;

    $sql =  "SELECT * from containers where bill = '$bill_of_lading' LIMIT $limit";
    $result1 = $conn->prepare($sql);
    $result1->execute();
    $containers = $result1->fetchAll();

?>

<div class="container" style="margin-top: 20px; margin-left: auto; margin-right: auto;">
    <table class="table table-bordered table-dark">
        <thead class="thead-light">
            <tr>
                <th>Fields</th>
                <th>Values</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bill of Lading </td>
                <td><?= $bill['bill_of_lading']; ?></td>
            </tr>
            <tr>
                <td>Consignee </td>
                <td><?= $bill['consignee']; ?></td>
            </tr>
            <tr>
                <td>Address </td>
                <td><?= $bill['address']; ?></td>
            </tr>
            <tr>
                <td>Vessel </td>
                <td><?= $bill['vessel']; ?></td>
            </tr>
            <tr>
                <td>Voyage No </td>
                <td><?= $bill['voyage_no']; ?></td>
            </tr>
            <tr>
                <td>Port of Loading </td>
                <td><?= $bill['port_of_loading']; ?></td>
            </tr>
            <tr>
                <td>Client </td>
                <td><?= $bill['client']; ?></td>
            </tr>
            <tr>
                <td>Shipping Line </td>
                <td><?= $bill['client']; ?></td>
            </tr>
            <tr>
                <td>ETA DATE </td>
                <td><?= $bill['eta_date']; ?></td>
            </tr>
            <tr>
                <td>Port of Discharge </td>
                <td><?= $bill['port_of_discharge']; ?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
    
    <table class="table table-bordered table-dark">
        <thead class="thead-light">
            <tr>
                <th>Container No</th>
                <th>Seal No</th>
                <th>Type</th>
                <th>Weight Net</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
        foreach($containers as $container):
        ?>
                <td><?= $container['container_no']; ?></td>
                <td><?= $container['seal_no']; ?></td>
                <td><?= $container['container_type']; ?></td>
                <td><?= $container['weight_net']; ?></td>
                <td><?= $container['description']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>