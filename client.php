<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Client</title>

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
<body style="background-image: url('images/body-bg1.jpeg'); font-size: 12px;">
    <div class="main">
        <div class="form-container">
        <form role="form" action="add_client.php" method="POST" class="form-horizontal" style="padding-top: 30px;" autocomplete="on" enctype="multipart/form-data">
                <h2>Client</h2>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" class="form-control"  id="client_name" name="client_name" placeholder="Client Name" required>
                    </div>
                    <div class="col-md-4">
                      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control"  id="phone" name="phone" placeholder="Phone" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" class="form-control"  id="address" name="address" placeholder="Address" required>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control round"  id="state" name="ng-states" required>
                            <option value="">Select State</option>
                            <option value="ABUJA">ABUJA FCT</option>
                            <option value="ABIA">ABIA</option>
                            <option value="ADAMAWA">ADAMAWA</option>
                            <option value="AKWA IBOM">AKWA IBOM</option>
                            <option value="ANAMBRA">ANAMBRA</option>
                            <option value="BAUCHI">BAUCHI</option>
                            <option value="BAYELSA">BAYELSA</option>
                            <option value="BENUE">BENUE</option>
                            <option value="BORNO">BORNO</option>
                            <option value="CROSS RIVER">CROSS RIVER</option>
                            <option value="DELTA">DELTA</option>
                            <option value="EBONYI">EBONYI</option>
                            <option value="EDO">EDO</option>
                            <option value="EKITI">EKITI</option>
                            <option value="ENUGU">ENUGU</option>
                            <option value="GOMBE">GOMBE</option>
                            <option value="IMO">IMO</option>
                            <option value="JIGAWA">JIGAWA</option>
                            <option value="KADUNA">KADUNA</option>
                            <option value="KANO">KANO</option>
                            <option value="KATSINA">KATSINA</option>
                            <option value="KEBBI">KEBBI</option>
                            <option value="KOGI">KOGI</option>
                            <option value="KWARA">KWARA</option>
                            <option value="LAGOS">LAGOS</option>
                            <option value="NASSARAWA">NASSARAWA</option>
                            <option value="NIGER">NIGER</option>
                            <option value="OGUN">OGUN</option>
                            <option value="ONDO">ONDO</option>
                            <option value="OSUN">OSUN</option>
                            <option value="OYO">OYO</option>
                            <option value="PLATEAU">PLATEAU</option>
                            <option value="RIVERS">RIVERS</option>
                            <option value="SOKOTO">SOKOTO</option>
                            <option value="TARABA">TARABA</option>
                            <option value="YOBE">YOBE</option>
                            <option value="ZAMFARA">ZAMFARA</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <select class="form-control round"  id="currency" name="currency" required>
                            <option value="">Select Currency</option>
                            <option value="USD">United States Dollars</option>
                            <option value="EUR">Euro</option>
                            <option value="Naira">Nigerian Naira</option>
                            <option value="GBP">United Kingdom Pounds</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control form-control-file" id="file" name="file" required>
                    </div>
                  </div>
                </div>
            <input type="submit" name="save" value="Save" style="width: 100px;" class="btn btn-success">
            </form>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>