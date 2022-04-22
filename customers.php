<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Customer</title>

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
<body style="background-image: url('images/body-bg1.jpeg'); font-size: 12px;">
    <div class="main">
        <div class="container">
        <form role="form" action="add_customer.php" method="post" class="form-horizontal" style="padding-top: 30px;">
                <h2>Add Customer</h2>
                <div class="form-group-1">
                        <input type="text" class="form-control"  id="client_name" name="client_name" placeholder="Customer Name" required>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                        <input type="number" class="form-control"  id="phone" name="phone" placeholder="Phone" required>
                        <input type="text" class="form-control"  id="address" name="address" placeholder="Address" required>
                        <select class="form-control"  id="state" name="ng-states" required>
                            <option>Select State</option>
                            <option>ABUJA FCT</option>
                            <option>ABIA</option>
                            <option>ADAMAWA</option>
                            <option>AKWA IBOM</option>
                            <option>ANAMBRA</option>
                            <option>BAUCHI</option>
                            <option>BAYELSA</option>
                            <option>BENUE</option>
                            <option>BORNO</option>
                            <option>CROSS RIVER</option>
                            <option>DELTA</option>
                            <option>EBONYI</option>
                            <option>EDO</option>
                            <option>EKITI</option>
                            <option>ENUGU</option>
                            <option>GOMBE</option>
                            <option>IMO</option>
                            <option>JIGAWA</option>
                            <option>KADUNA</option>
                            <option>KANO</option>
                            <option>KATSINA</option>
                            <option>KEBBI</option>
                            <option>KOGI</option>
                            <option>KWARA</option>
                            <option>LAGOS</option>
                            <option>NASSARAWA</option>
                            <option>NIGER</option>
                            <option>OGUN</option>
                            <option>ONDO</option>
                            <option>OSUN</option>
                            <option>OYO</option>
                            <option>PLATEAU</option>
                            <option>RIVERS</option>
                            <option>SOKOTO</option>
                            <option>TARABA</option>
                            <option>YOBE</option>
                            <option>ZAMFARA</option>
                        </select>
                </div>
            <input type="submit" name="save" value="Save" style="width: 100px;" class="btn btn-success">
            </form>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>