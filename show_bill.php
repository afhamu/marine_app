<?php
    include ('auth.php');
    session_start();
    
    $_SESSION['url'] = 'http://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bills</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/show_bill.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/responsive-paginate.js"></script>

    <script>
        $(document).ready(function () {
            $(".pagination").rPage();
        });
    </script>

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
</head>
<body onload="switchInterface()">

    <?php

    require 'connection.php';

    $limit = 30;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $sql1 = "SELECT * FROM bill LIMIT $start, $limit";
    $statement = $conn->prepare($sql1);
    $statement->execute();
    $bills = $statement->fetchAll(PDO::FETCH_OBJ);


    $sql2 = "SELECT count(id) as id FROM bill";
    $statement2 = $conn->prepare($sql2);
    $statement2->execute();
    $clientsCount = $statement2->fetchAll();
    $total = $clientsCount[0]['id'];
    $pages = ceil($total/$limit);
    $previous = $page - 1;
    $next = $page + 1;

    ?>



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-left">
                    <li class="page-item">
                        <a class="page-link" href="show_bill.php?page=<?= $previous ?>" aria-label="Previous">
                            <span aria-hidden="true"> Previous &laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <?php for ($i =1; $i<= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="show_bill.php?page=<?= $i ?>"> <?= $i ?></a></li>
                    <?php endfor; ?>
                    <a class="page-link" href="show_bill.php?page=<?= $next ?>" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                        <span class="sr-only">Next</span>

                    </a>
                    
                    <form action="" class="form-inline" style="margin-left: 120px; float: right">
                        <div class="row">
                                <div class="col-md-6">
                                    <a class="btn btn-primary" href="bill.php" id="add_bill_link">
                                        <span aria-hidden="true">Add Bill</span>
                                        <span class="sr-only">Add Bill</span>
                                    </a>

                                </div>

                                <div class="col-md-4">
                                    <a class="btn btn-success" href="home.php" >
                                        <span aria-hidden="true">Home</span>
                                    </a>
                                </div>

                                <div class="col-md-2">
                                    <input type="text" id="search" class="form-control mr-sm-2 input-width-md" onkeyup="myFunction()" style="margin-left: 5px;" placeholder="Search Bill">
                                </div>
                        </div>
                        
                    </form>
                </ul>
            </nav>
        </div>
    </div>
</div>

        <div class="table-wrapper">
            <form action="show_bill.php" method="post" id="form1">
                <table class="table  table-light" id="table">
                    <thead class="thead-dark table-header">
                        <?php
                            foreach ($bills as $bill ){}
                        ?>
                        <tr>
                            <th id="id">Id</th>
                            <th id="bill">Bill of Lading</th>
                            <th>Consignee</th>
                            <th>Client</th>
                            <th>Transire</th>
                            <th>Advice</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Custom Document</th>
                            <th>Shipping Document</th>
                            <th>Status</th>
                            <th>Open</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bills as $bill ):
                            ?>
                            <tr>
                                <?php
                                if($bill->status == 'closed'){?>
                                    <td><?= $bill->id; ?></td>
                                    <td> <?= $bill->bill_of_lading; ?></td>
                                    <td> <?= $bill->consignee; ?></td>
                                    <td> <?= $bill->client; ?></td>
                                    <td><a href="transire.php?id=<?= $bill->id; ?>" class="btn btn-primary btn-sm">Transire</button></a></td>
                                    <td><a href="advice.php?id=<?= $bill->id; ?>" class="btn btn-success btn-sm">Advice</a></td>
                                    <td id="td_view"><a href="view.php?id=<?= $bill->id; ?>" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a></td>
                                    <td><button disabled="disabled" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></td>
                                    <td><a href="custom_document_download.php?id=<?= $bill->id; ?>" class="btn btn-primary btn-sm">Download</a></td>
                                    <td><a href="shipping_document_download.php?id=<?= $bill->id; ?>" class="btn btn-success btn-sm">Download</a></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" disabled="disabled">Closed</button></td>
                                    <td><a href="open.php?id=<?= $bill->id;?>" class="btn btn-danger btn-sm">Open</a></td>
                                    <td><a href="delete_bill.php?id=<?=$bill->id; ?>"  class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></a></td>

                                    <?php
                                }else{ ?>
                                    <td><?= $bill->id; ?></td>
                                    <td> <?= $bill->bill_of_lading; ?></td>
                                    <td> <?= $bill->consignee; ?></td>
                                    <td> <?= $bill->client; ?></td>
                                    <td><a href="transire.php?id=<?= $bill->id; ?>" class="btn btn-primary btn-sm">Transire</button></a></td>
                                    <td><a href="advice.php?id=<?= $bill->id; ?>" class="btn btn-success btn-sm">Advice</a></td>
                                    <td id="td_view"><a href="view.php?id=<?= $bill->id; ?>" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a></td>
                                    <td><a href="update_bill.php?id=<?= $bill->id; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="custom_document.php?id=<?= $bill->id; ?>" class="btn btn-success btn-sm">Custom Document</a></td>
                                    <td><a href="shipping_document.php?id=<?= $bill->id; ?>" class="btn btn-primary btn-sm">Shipping Document</a></td>
                                    <td><a href="close.php?id=<?= $bill->id; ?>" class="btn btn-danger btn-sm">Close</a></td>
                                    <td></td>
                                    <td><a href="delete_bill.php?id=<?=$bill->id; ?>"  class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></a></td>
                                    
                                    <?php
                                }
                                ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>
    
    
    <script type="text/javascript">
    function switchInterface() {

        if("<?php echo $_SESSION['username']; ?>" == 'hamisu') {
            var btn_add = document.getElementById('add_bill_link');
            btn_add.hidden = true;

           
            $('td:nth-child(5),th:nth-child(5)').hide();
            $('td:nth-child(6),th:nth-child(6)').hide();
            $('td:nth-child(7),th:nth-child(7)').hide();
            $('td:nth-child(8),th:nth-child(8)').hide();
            $('td:nth-child(12),th:nth-child(12)').hide();
            $('td:nth-child(13),th:nth-child(13)').hide();
            
            
        }else if("<?php echo $_SESSION['username']; ?>" == 'MARINE' || "<?php echo $_SESSION['username']; ?>" == 'abbaale'){
            $('td:nth-child(9),th:nth-child(9)').hide();
            $('td:nth-child(10),th:nth-child(10)').hide();
            $('td:nth-child(11),th:nth-child(11)').hide();
            $('td:nth-child(12),th:nth-child(12)').hide();
            
        }else {
            $('td:nth-child(3),th:nth-child(3)').hide();
            $('td:nth-child(4),th:nth-child(4)').hide();
            $('td:nth-child(5),th:nth-child(5)').hide();
            $('td:nth-child(6),th:nth-child(6)').hide();
        }
    };
    
    
/*window.onload = function(){ 
                alert("This domain name will expire in few days");
                }*/
</script>

</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>