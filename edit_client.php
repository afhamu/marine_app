<?php
    include ('connection.php');

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT * FROM client WHERE id = '$id'";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $clients = $statement->fetchAll(PDO::FETCH_OBJ);


    if (isset($_POST['update'])) {
       if(!empty($_POST['client_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['ng-states'])&& !empty($_POST['city']) && !empty($_POST['currency'])) {
            $client_name = $_POST['client_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $state = $_POST['ng-states'];
            $city = $_POST['city'];
            $currency = $_POST['currency'];

            $update = "UPDATE client SET client_name = '$client_name', email = '$email', phone = '$phone', client_address = '$address', client_state = '$state', city = '$city', currency = '$currency' WHERE  id = '$id'";
            $conn->query($update) === true;
           }
            header('Location: show_clients.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Client</title>

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
<?php
foreach ($clients as $client ):
?>
    <div class="main">
        <div class="container">
        <form role="form" action="" method="post" class="form-horizontal" style="padding-top: 30px;">
                <h2>Client Form</h2>
                <div class="form-group-1">
                        <input type="text" class="form-control" value="<?= $client->client_name; ?>" id="client_name" name="client_name" placeholder="Client Name" required>
                        <input type="email" class="form-control" value="<?= $client->email; ?>" id="email" name="email" placeholder="E-mail" required>
                        <input type="number" class="form-control" value="<?= $client->phone; ?>"  id="phone" name="phone" placeholder="Phone" required>
                        <input type="text" class="form-control" value="<?= $client->client_address; ?>" id="address" name="address" placeholder="Address" required>
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
                        <input type="text" class="form-control" value="<?= $client->city; ?>" id="city" name="city" placeholder="City" required>
                        <select class="form-control"  id="currency" name="currency">
                            <option value="USD" selected="selected">United States Dollars</option>
                            <option value="EUR">Euro</option>
                            <option value="naira">Nigerian Naira</option>
                            <option value="GBP">United Kingdom Pounds</option>
                        </select>
                        <input type="file" class="form-control form-control-file" id="file">
                </div>
            <input type="submit" name="update" value="Save" style="width: 100px;" class="btn btn-success">
            </form>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <?php endforeach; ?>
</body>
</html>