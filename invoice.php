<?php

    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Transaction</title>

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
</head>
<body>

<div class="main">
    <div class="container" style="width: 750px;">
        <form role="form" action="add_invoice.php" method="POST" style="padding-top: 30px;" id="form-one" autocomplete="on" enctype="multipart/form-data">
            <h2>Add Transaction</h2>
            <div class="form-group-1">
                <select class="form-control round" id="client_name" name="client_name" required>
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
                <select name="transaction_type" class="form-control round" required>
                            <option value="">Transaction Type</option>
                            <option value="invoice">Invoice</option>
                            <option value="payment">Payment</option>
                </select>
                <input type="text" class="form-control" name="amount" id="title" placeholder="Amount"  />
                <input type="date" class="form-control" id="date" name="date" required>
                <input type="text" class="form-control" name="container_number" id="container_number" placeholder="Container Number" />
                <input type="text" class="form-control" name="remark" id="remark" placeholder="Remark"/>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description" />
                    <input type="submit" name="save" value="Save" style="width: 100px;" class="btn btn-success">
                </div>
        </form>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>