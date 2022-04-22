<?php

include ('connection.php');
include ('auth.php');

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
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

    <div class="form-container">
        <form role="form" action="add_bill.php" method="POST" style="padding-top: 30px;" id="form-one" autocomplete="on" enctype="multipart/form-data">
            <h2>Bill of Lading</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="bill_of_lading" id="title" placeholder="Bill Lading" required />  
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="consignee" id="consignee" placeholder="Consignee" required />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="vessel" id="vessel" placeholder="Vessel" required />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="voyage_no" id="voyage_no" placeholder="Voyage No" required />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="port_of_loading" id="port_of_loading" placeholder="Port of Loading" required />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control round" id="client" name="client" required>
                        <?php
                         $statement1 =$conn->prepare("SELECT * FROM client ORDER BY client_name ASC");
                         $statement1->execute();
                         $rows = $statement1->fetchAll();
                         ?>
                         <option value="">Select Client</option>
                        <?php foreach($rows as $row): ?>
                                <option value="<?= $row['client_name'] ?>"><?= $row['client_name'] ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <a href="client.php" target="_blank" class="form-control btn btn-primary ">Add</a>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="date" name="eta_date" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control round" id="shipping_line" name="shipping_line" required>
                            <?php
                         $statement1 =$conn->prepare("SELECT * FROM shipping_line ORDER BY shipping_line_name ASC");
                         $statement1->execute();
                         $shipping_lines = $statement1->fetchAll();
                         ?>
                            <option value="">Select Shipping Line</option>
                        <?php foreach($shipping_lines as $row): ?>
                            <option value="<?= $row['shipping_line_name'] ?>"><?= $row['shipping_line_name'] ?></option>
                        <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="col-md-2">
                        <a href="add_shipping_line.php" target="_blank" class="form-control btn btn-primary ">Add</a>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control round" id="port_of_loading" name="port_of_discharge" required>
                            <option value="">Select Port of Discharge</option>
                            <option value="APAPA">APAPA</option>
                            <option value="CALABAR">CALABAR</option>
                            <option value="DELTA">DELTA</option>
                            <option value="TINCAN">TINCAN</option>
                            <option value="ONNE">ONNE</option>
                            <option value="RIVERS">RIVERS</option>
                        </select>
                    </div>
                </div>
                
            </div>

            <div id="main-div">
                <div class="grid-test-2">
                    <div class="grid-left">
                        <div class="item">
                            <h2 >Container Details</h2>
                        </div>
                        <div class="item">
                            <button  class="btn btn-primary" type="button" name="addrow" onclick="onClick()"><i class="fas fa-plus fa-1x"></i></button>
                        </div>
                        <div class="item">
                            <button  class="btn btn-primary" type="button" name="removerow" onclick="remove()"><i class="fas fa-minus fa-1x"></i></button>
                        </div>
                    </div>
                    <div class="grid-right">
                        <div class="item">
                            <input type="file" class="form-control" name="file" id="file" required>   
                        </div>
                    </div>
                     
                </div>
                
                <div class="container-details">
                    <div class="item">
                        <input class="form-control form-control-md" type="text" name="container_no[]" id="container_no" placeholder="Container Number"  required>
                    </div>
                    <div class="item">
                        <input class="form-control form-control-md" type="text" name="seal_no[]" id="seal_no" placeholder="Seal Number"  required>
                    </div>
                    <div class="item">
                        <input class="form-control form-control-md" type="text" name="weight[]" id="weight" placeholder="Weight"  required>
                    </div>
                    <div class="item">
                        <select class="form-control form-control-md round" name="container_type[]" id="type"  required>
                            <option value="">Container Type</option>
                            <option value="20FT">20FT</option>
                            <option value="40FT">40FT</option>
                        </select>
                    </div>
                    <div class="item">
                        <input class="form-control form-control-md" type="text" name="desc[]" id="desc" placeholder="Description"  required>
                    </div>
                </div>
            </div>
                    <input type="submit" name="save" value="Save" style="width: 100px;" class="form-control btn btn-primary">
            </div>
        </form>
    </div>

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
        div.className = 'container-details';
        div.innerHTML = '<div class="item">\n' +
            ' <input class="form-control form-control-md" type="text" name="container_no[]" id="container_no" placeholder="Container Number"  required>\n' +
            '</div>\n' +
            '<div class="item">\n' +
            '<input class="form-control form-control-md" type="text" name="seal_no[]" id="seal_no" placeholder="Seal Number"  required>\n' +
            '</div>\n' +
            '<div class="item">\n' +
            '<input class="form-control form-control-md" type="text" name="weight[]" id="weight" placeholder="Weight"  required>\n' +
            '</div>\n' +
            '<div class="item">\n' +
            '<select class="form-control form-control-md round" name="container_type[]" id="type"  required>\n' +
            '<option value="">Container Type</option>\n' +
            '<option value="20FT">20FT</option>\n' +
            '<option value="40FT">40FT</option>\n' +
            '</select>\n' +
            '</div>\n' +
            '<div class="item">\n' +
            '<input class="form-control form-control-md" type="text" name="desc[]" id="desc" placeholder="Description"  required>\n' +
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