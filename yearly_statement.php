<?php
//error_reporting(0);
require ('tcpdf/tcpdf.php');
require ('fpdf181/fpdf.php');
include ('connection.php');


if(isset($_POST['submit'])){
    $client_name = $_POST['client_name'];
    
}

 
$sql = "SELECT * FROM client WHERE client_name = '$client_name'";
$statement =$conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll();

foreach($rows as $row){
    $customer_phone = $row['phone'];
    $customer_name = $row['client_name'];
    $currency = $row['currency'];
}


$stripped = str_replace(' ', '', $client_name);
$stripped_client_name = strtolower($stripped);


class myPDFTwo extends FPDF {

    function MainHeader(){
        global $customer_phone, $customer_name, $currency;
        $this->Image('images/logo.jpg', 15, 5, 60, 40, 'JPG', 'http://www.tcpdf.org', 'L', true, 300, '', false, false, 0, false, false, false);
        $this->SetFont('Arial','B',22);
        $this->Cell(0,5,'BLACK HORSE LOGISTICS', 0, 1, 'C');
        $this->SetFont('Arial','B',9);
        $this->Cell(0,5,'No 47c Abdullahi Bayero Way, Nassarawa Kano Nigeria', 0, 1, 'C');
        $this->Ln();
        $this->SetFont('', 'B', 12);
        $this->Cell(0,5,'CUSTOMER STATEMENT OF ACCOUNT', 0, 1, 'C');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->SetFont('', 'B', 9);
        $this->SetLeftMargin(20);
        $this->Cell(0,5,'Customer Name: '.$customer_name, 0, 1, 'L');
        $this->Ln();
        $this->SetFont('', 'B', 9);
        $this->Cell(0,5,'Phone Number: '.$customer_phone, 0, 1, 'L');
        $this->Ln();
        $this->SetFont('', 'B', 9);
        $this->Cell(0,5,'Currency: '.$currency, 0, 1, 'L');
       
    }

    function tableHeader()
    {

        $this->SetLeftMargin(20);
        $this->Ln();
        $this->SetFont('Arial', 'B', 10);
        $x = $this->GetX();
        $y = $this->GetY();
        $this->Cell(25, 8, 'Date', 1, 0, 'C');
        $this->Cell(40, 8, 'Invoice Amount', 1, 0, 'C');
        $this->Cell(55, 8, 'Container Number', 1, 0, 'C');
        $this->Cell(40, 8, 'Remark', 1, 0, 'C');
        $this->Cell(30, 8, 'Payment', 1, 0, 'C');
        $this->Cell(40, 8, 'Description', 1, 0, 'C');
        $this->MultiCell(35, 8, 'Balance', 1, 'C', false, '', $x + 230, $y , '','','','',0, 'M');
      

        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(0, 0, 0);
    }

    function TableBody(){

            global $stripped_client_name, $month , $conn;
            $sql = "SELECT * FROM $stripped_client_name";
            $statement =$conn->prepare($sql);
            $statement->execute();
            $rows = $statement->fetchAll();

            foreach($rows as $row){
               
            $this->SetLeftMargin(20);
          //  $this->Ln();
            $this->SetFont('Arial', '', 10);
            $this->Cell(25, 8, $row['invoice_date'], 1, 0, 'C');
            if($row['invoice_amount'] > 0){
                $this->Cell(40, 8, number_format($row['invoice_amount']), 1, 'C');
            }else{
                $this->Cell(40, 8, '', 1, 0, 'C');
            }
            
            $this->Cell(55, 8, $row['container_no'], 1, 0, 'C');
            $this->Cell(40, 8, $row['remark'], 1, 0, 'C');
            if($row['payment'] > 0){
                $this->Cell(30, 8, number_format($row['payment']), 1, 0, 'C');
            }else{
                $this->Cell(30, 8, '', 1, 0, 'C');
            }
            
            $this->Cell(40, 8, $row['invoice_description'], 1, 0, 'C');
            $this->Cell(35, 8, number_format($row['balance'],2), 1, 0, 'C');
            $this->Ln();
                
        
            }
    }
}
    
   
    $pdf = new myPDFTwo();
    $pdf->AddPage('L');
    $pdf->MainHeader();
    $pdf->tableHeader();
    $pdf->TableBody();
    $pdf->Output();
    
?>
