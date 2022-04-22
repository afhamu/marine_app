<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clients</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/my_style.css" rel="stylesheet">
    
    <script>
    $(document).ready(function() {
        $('#search').off('keyup');
        $('#search').on('keyup', function() {
            // Your search term, the value of the input
            var searchTerm = $('#search').val();
            // table rows, array
            var tr = [];

            // Loop through all TD elements
            $('#table').find('td').each(function() {
                var value = $(this).html();
                // if value contains searchterm, add these rows to the array
                if (value.toLowerCase().includes(searchTerm.toLowerCase())) {
                    tr.push($(this).closest('tr'));

                }
            });

            // If search is empty, show all rows
            if ( searchTerm == '') {
                $('tr').show();
            } else {
                // Else, hide all rows except those added to the array
                $('tr').not('thead tr').hide();
                tr.forEach(function(el) {
                    el.show();
                });
            }
        });
    });
</script>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
       
</head>
<body style="background-image: url('images/body-bg1.jpeg'); background-repeat: no-repeat; background-size: cover;">
<?php

    require 'connection.php';
    

    /*$sql = "SELECT * FROM client";
    $statement = $conn->prepare($sql);
    $statement->execute();*/
    

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $sql1 = "SELECT * FROM client LIMIT $start, $limit";
    $statement = $conn->prepare($sql1);
    $statement->execute();
    $clients = $statement->fetchAll(PDO::FETCH_OBJ);
    
    
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
<div class="container">
    <div class="row">
        <div class="col-md-4">
               <ul class="pagination justify-content-left">
                    <li class="page-item">
                        <a class="page-link" href="show_clients.php?page=<?= $previous ?>" aria-label="Previous">
                            <span aria-hidden="true"> Previous &laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php for ($i =1; $i<= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="show_clients.php?page=<?= $i ?>"> <?= $i ?></a></li>
                    <?php endfor; ?>
                    <li>
                    <a class="page-link" href="show_clients.php?page=<?= $next ?>" aria-label="Next">
                        <span aria-hidden="true">Next &laquo;</span>
                        <span class="sr-only">Next</span>

                    </a>
                    </li>
                </ul>
                    
        </div>
        <div class="col-md-8">
            <form action="" class="form-inline" style="margin-left: 120px; float: right">
                    <div class="grid-test">
                        <div class="item">
                            <a class="btn btn-primary" href="client.php" id="add_client_link">
                                <span aria-hidden="true">Add Client</span>
                                <span class="sr-only">Add Client</span>
                            </a>

                        </div>

                        <div class="item">
                            <a class="btn btn-success" href="home.php" >
                                <span aria-hidden="true">Home</span>
                            </a>
                        </div>

                        <div class="item">
                            <input type="text" id="search" class="form-control mr-sm-2 input-width-md" onkeyup="myFunction()" style="margin-left: 5px;" placeholder="Search Bill">
                        </div>
                    </div>
                        
            </form>
        </div>
    </div>
        
    
    <div style="height: 600px; overflow-y: auto; font-size: 13px;">
        <table class="table table-striped table-bordered table-dark" id="table">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Client Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th colspan="2">Actions</th>
                    
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
                    <td> <?= $client->city; ?></td>
                    <td><a href="edit_client.php?id=<?=$client->id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a></td>
                    <td><a href="delete_client.php?id=<?=$client->id; ?>"  class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></a> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>