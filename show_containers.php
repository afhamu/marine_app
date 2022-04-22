<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Containers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="css/my_style.css" rel="stylesheet">
    <script src="js/responsive-paginate.js"></script>
    <script>
        $(document).ready(function () {
            $(".pagination").rPage();
        });
    </script>
</head>
<body style="background-image: url('images/body-bg1.jpeg'); background-repeat: no-repeat; background-size: cover;">
<?php
    require 'connection.php';

    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $sql1 = "SELECT * FROM containers LIMIT $start, $limit";
    $statement = $conn->prepare($sql1);
    $statement->execute();
    $containers = $statement->fetchAll(PDO::FETCH_OBJ);
    
    
    $sql2 = "SELECT count(id) as id FROM containers";
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
        <div class="col-md-6">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm">
                    <li class="page-item">
                        <a class="page-link" href="show_containers.php?page=<?= $previous ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Previous</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <?php for ($i =1; $i<= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="show_containers.php?page=<?= $i ?>"> <?= $i ?></a></li>
                    <?php endfor; ?>
                    <a class="page-link" href="show_containers.php?page=<?= $next ?>" aria-label="Next">
                        <span aria-hidden="true">Next &raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                   
                    <form action="" class="form-inline" style="margin-left: 100px; float: right">
                        <div class="col-md-4">
                            <a class="btn btn-success" href="home.php" >
                                <span aria-hidden="true">Home</span>
                            </a>
                        </div>

                        <div class="col-md-8">
                            <input type="text" id="search" class="form-control mr-sm-2 input-width-md" onkeyup="myFunction()" style="margin-left: 15px;" placeholder="Search Bill">
                        </div>
                        
                    </form>
                </ul>
            </nav>
        </div>
    </div>
    <div style="height: 600px; overflow-y: auto; font-size: 15px;">
        <table class="table table-striped table-bordered table-dark">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Bill</th>
                    <th>Container Number</th>
                    <th>Seal Number</th>
                    <th>Container Type</th>
                    <th>Description</th>
                    <th>Weight Net</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($containers as $container ):
                ?>
                <tr>
                    <td> <?= $container->id; ?></td>
                    <td> <?= $container->bill; ?></td>
                    <td> <?= $container->container_no; ?></td>
                    <td> <?= $container->seal_no; ?></td>
                    <td> <?= $container->container_type; ?></td>
                    <td> <?= $container->description; ?></td>
                    <td> <?= $container->weight_net; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>