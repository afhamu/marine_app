<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="css/my_style.css" rel="stylesheet">

       
</head>
<body style="background-image: url('images/body-bg1.jpeg'); background-repeat: no-repeat; background-size: cover;">
<?php

    require 'connection.php';

    $sql = "SELECT * FROM client";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $clients = $statement->fetchAll(PDO::FETCH_OBJ);

    $limit = 20;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $sql1 = "SELECT * FROM client LIMIT $start, $limit";
    $statement1 = $conn->prepare($sql1);
    $statement1->execute();
    
    
    
    $sql2 = "SELECT count(id) as id FROM client";
    $statement2 = $conn->prepare($sql2);
    $statement2->execute();
    $clientsCount = $statement2->fetchAll();
    $total = $clientsCount[0]['id'];
    $pages = ceil($total/$limit);
    $previous = $page - 1;
    $next = $page + 1;

   
?>
<br>
<div class="container well">
    <div class="row">
        <div class="col-md-10">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="show_clients.php?page=<?= $previous ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <?php for ($i =1; $i<= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="show_clients.php?page=<?= $i ?>"> <?= $i ?></a></li>
                    <?php endfor; ?>
                    <a class="page-link" href="show_clients.php?page=<?= $next ?>" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="page-link" href="customers.php" aria-label="Next" style="justify-content: center; margin-left: 55px;">
                        <span aria-hidden="true">Add Customer</span>
                    </a>
                    <a class="page-link" href="invoice.php" aria-label="Next" style="justify-content: center; margin-left: 55px;">
                        <span aria-hidden="true">Add Transaction</span>
                    </a>
                    <a class="page-link" href="generate_statement.php" aria-label="Next" style="justify-content: center; margin-left: 55px;">
                        <span aria-hidden="true">Generate Statement</span>
                    </a>
                </ul>
            </nav>
        </div>
    </div>
    <div style="height: 600px; overflow-y: auto; font-size: 13px;">
        <table class="table table-striped table-bordered table-light" id="customers_table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th style="width: 250px">Customer Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th style="width: 350px">Address</th>
                    <th>State</th>
                   
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($clients as $client):
                ?>
                <tr>
                    <td> <?= $client->id; ?></td>
                    <td> <?= $client->client_name; ?></td>
                    <td> <?= $client->email; ?></td>
                    <td> <?= $client->phone; ?></td>
                    <td> <?= $client->client_address; ?></td>
                    <td> <?= $client->client_state; ?></td>
                   
                    <td>
                        <a href="edit_client.php?id=<?=$client->id; ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function()){
                $('#clients_table').DataTable({

                    'processing': true,
                    'serverSide': true,
                    'serverMethod': 'post',
                    'ajax':{
                        'url': 'ajaxfile.php'
                    },

                    'columns': [
                        {data: 'id'},
                        {data: 'client_name'},
                        {data: 'email'},
                        {data: 'phone'},
                        {data: 'client_address'},
                        {data: 'client_state'},
                        {data: 'city'}

                    ]

                });
            }
        </script>
    </div>
</div>
</body>
</html>