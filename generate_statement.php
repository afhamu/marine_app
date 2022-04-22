<?php

    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Statement</title>

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
    <div class="container" style="width: 750px; height: 400px;">
        <form role="form" action="statement2.php" method="POST" style="padding-top: 30px;" id="form-one" autocomplete="on" enctype="multipart/form-data">
            <h2>Generate Statement</h2>
            <div class="form-group-1">
                <br>
                <a href="monthly.php" class="btn btn-success" >Monthly</a>
                <a href="#" class="btn btn-success" >Quarterly</a>
                <a href="yearly.php" class="btn btn-success" >Yearly</a>
            </div>
                
                </div>
        </form>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>