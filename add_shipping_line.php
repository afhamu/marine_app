<?php
    require 'connection.php';
if (isset($_POST['save'])){
    if(!empty($_POST['shipping_line_name'])){
        $shipping_line_name = $_POST['shipping_line_name'];
        $sql = "INSERT INTO shipping_line (shipping_line_name) VALUES ('$shipping_line_name')";
        $insert = $conn->prepare($sql);
        if(!$insert->execute()){
            echo "Failed to Add Shipping Line";
        }else{
            echo "Shipping Line Successfully Added";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Shipping Line</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style1.css">
    <script type="text/javascript" src="js/index.js"></script>
    <style>
        html { 
  background: url(images/body-bg1.jpeg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    </style>
</head>
<body style="margin-top: 50px;">
   
<div class="container" style="width: 650px;">
    <form action="" method="post" style="margin: 30px;" enctype="multipart/form-data">
        <br>
        <h2>Add Shipping Line</h2>
            <div class="form-group row">
                <div class="col-md-6">
                    <input type="text" class="form-control"  name="shipping_line_name" placeholder="Shipping Line" required>
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Save" name="save" style="width: 70px;">
                </div>
            </div>
    </form>
</div>
</body>
</html>