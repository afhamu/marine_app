<?php

   include('connection.php');
   
    if (isset($_POST['save'])){
        if(!empty($_POST['client_name']) && !empty($_POST['date'])) {
            $client_name = $_POST['client_name'];
            $type = $_POST['transaction_type'];
            $date = $_POST['date'];
            $amount = $_POST['amount'];
            $container_number = $_POST['container_number'];
            $remark = $_POST['remark'];
            $description = $_POST['description'];
            $invoice = 0;
            $payment = 0;

            $stripped = str_replace(' ', '', $client_name);
            $stripped_client_name = strtolower($stripped);
            if(strpos($stripped_client_name, 'mr') === 0){
                $stripped_client_name = ltrim(strpbrk($stripped_client_name , "." ),'.');
            }
           

            $createTable = "CREATE TABLE IF NOT EXISTS $stripped_client_name (
             id int(11) NOT NULL AUTO_INCREMENT,
             invoice_date varchar(20) NOT NULL,
             invoice_amount double NOT NULL,
             container_no varchar(50) NOT NULL,
             remark varchar(50) NOT NULL,
             payment double NOT NULL,
             invoice_description varchar(50) NOT NULL,
             balance double NOT NULL,
             PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1" ;

               $conn->exec($createTable);

                $oldBalance = 0;
                $statement1 =$conn->prepare("SELECT * FROM $stripped_client_name");
                $statement1->execute();
                $rows = $statement1->fetchAll();

                foreach($rows as $row){
                    $oldBalance = $row['balance'];
                }

                if ($type === 'invoice'){
                    $invoice = $amount;
                    $balance = $oldBalance + $invoice;
                }else{
                    $payment = $amount;
                    $balance = $oldBalance - $payment;
                }

                $sql = "INSERT INTO $stripped_client_name (invoice_date, invoice_amount, container_no, remark, payment, invoice_description, balance) VALUES ('$date', '$invoice', '$container_number', '$remark', '$payment', '$description', '$balance')";
                $conn->exec($sql);
                
                header("Location: invoice.php");
            }
        }
    
?>