<?php

session_start();
if (isset($_POST['save'])){

    $id = $_REQUEST['id'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $uploadDir = "uploads/shipping/". $id.".pdf";
    move_uploaded_file($file_temp_loc, $uploadDir);

    header('Location: '.$_SESSION['url']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Document</title>

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
<div class="container" style="width: 650px;">
    <form action="" method="post" style="margin: 30px;" enctype="multipart/form-data">
        <br>
        <h2>Upload Shipping Document</h2>
        <div class="form-group-1">
            <div class="form-group row">
                <div class="col-md-6">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div>
                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control input-width-md">
                </textarea>
                <br>
                <input type="file" class="form-control-file" name="file" id="file" accept="application/pdf">
                <br>
                <input type="submit" class="btn btn-success" value="Save" name="save" style="width: 70px;">
            </div>
        </div>
    </form>
</div>
</body>
</html>