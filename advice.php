<?php
//error_reporting(0);
require ('tcpdf/tcpdf.php');
require ('fpdf181/fpdf.php');
include ('connection.php');


    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $result = $conn->prepare("SELECT * FROM bill WHERE id = '$id'");
    $result->execute();
    $bills = $result->fetchAll();

    foreach ($bills as $bill):

    $bill_lading =  $bill['bill_of_lading'];
    $container_count = $bill['containers'];
    $consignee = $bill['consignee'];
    $port_of_discharge = $bill['port_of_discharge'];

    $result1 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 1");
    $result1->execute();
    $containers = $result1->fetchAll();
     

    foreach ($containers as $container) {

        $container_no = $container['container_no'];
        $container_type = $container['container_type'];
}
    $result2 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 2");
    $result2->execute();
    $containers = $result2->fetchAll();

    foreach ($containers as $container){
        $container_no2 = $container['container_no'];
        $container_type2 = $container['container_type'];
}
    $result3 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 3");
    $result3->execute();
    $containers = $result3->fetchAll();

    foreach ($containers as $container) {
        $container_no3 = $container['container_no'];
        $container_type3 = $container['container_type'];

}

    $result4 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 4");
    $result4->execute();
    $containers = $result4->fetchAll();

    foreach ($containers as $container) {
        $container_no4 = $container['container_no'];
        $container_type4 = $container['container_type'];
}

    $result5 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 5");
    $result5->execute();
    $containers = $result5->fetchAll();

    foreach ($containers as $container) {
        $container_no5 = $container['container_no'];
        $container_type5 = $container['container_type'];

}

    $result6 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 6");
    $result6->execute();
    $containers = $result6->fetchAll();

    foreach ($containers as $container) {
        $container_no6 = $container['container_no'];
        $container_type6 = $container['container_type'];

}

    $result7 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 7");
    $result7->execute();
    $containers = $result7->fetchAll();

    foreach ($containers as $container) {
        $container_no7 = $container['container_no'];
        $container_type7 = $container['container_type'];

}

    $result8 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 8");
    $result8->execute();
    $containers = $result8->fetchAll();

    foreach ($containers as $container) {
        $container_no8 = $container['container_no'];
        $container_type8 = $container['container_type'];

}

    $result9 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 9");
    $result9->execute();
    $containers = $result9->fetchAll();

    foreach ($containers as $container) {
        $container_no9 = $container['container_no'];
        $container_type9 = $container['container_type'];

}

    $result10 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 10");
    $result10->execute();
    $containers = $result10->fetchAll();

    foreach ($containers as $container) {
        $container_no10 = $container['container_no'];
        $container_type10 = $container['container_type'];

}

    $result11 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 11");
        $result11->execute();
        $containers = $result11->fetchAll();
    
        foreach ($containers as $container) {
            $container_no11 = $container['container_no'];
            $container_type11 = $container['container_type'];
    
    }
    
    $result12 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 12");
    $result12->execute();
    $containers = $result12->fetchAll();

    foreach ($containers as $container) {
        $container_no12 = $container['container_no'];
        $container_type12 = $container['container_type'];

}

    $result13 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 13");
    $result13->execute();
    $containers = $result13->fetchAll();

    foreach ($containers as $container) {
        $container_no13 = $container['container_no'];
        $container_type13 = $container['container_type'];

}

    $result14 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 14");
    $result14->execute();
    $containers = $result14->fetchAll();

    foreach ($containers as $container) {
        $container_no14 = $container['container_no'];
        $container_type14 = $container['container_type'];

}

    $result15 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 15");
        $result15->execute();
        $containers = $result15->fetchAll();
    
        foreach ($containers as $container) {
            $container_no15 = $container['container_no'];
            $container_type15 = $container['container_type'];
    
    }






class myPDFTwo extends TCPDF {

    function Date(){
        global $consignee;
        $currentDate = date("j/n/Y");
        $y=$this->GetY();
        $x = $this->GetX();
        if(strpos($consignee, 'SAHAL') === 0){
        $this->SetXY($x-200,$y+30);
        }else{
        $this->SetXY($x-200,$y+50);
        }
        $this->SetFont('helvetica', '', 12);
        $this->SetRightMargin(20);
        $this->Cell(0,5,''.$currentDate, '','','R');
        $this->Ln();
    }

    function Custom(){
        
        global $port_of_discharge;
        $this->SetLeftMargin(20);
        $this->Ln();
        $this->Ln();
        $this->SetFont('helvetica', '', 10);
        $this->Cell(0,5,'THE AREA COMPTROLLER, ');
        $this->Ln();
        $this->Cell(0, 5, 'NIGERIA CUSTOM SERVICE,');
        if($port_of_discharge == "ONNE"){
            $this->Ln();
            $this->Cell(0,5,'ONNE PHASE II,', '', '', 'L');
            $this->Ln();
            $this->Cell(0,5,'PORT-HARCOURT, '.chr(10));
            $this->Ln();
            $this->Cell(0,5, 'RIVERS STATE.');
        }else{
            $this->Ln();
            $this->Cell(0,5,'APAPA, LILLYPONG & KIRIKIRI LIGHTER TERMINAL,', '', '', 'L');
            $this->Ln();
            $this->Cell(0,5,'TINCAN, PTML GRIMALDI, '.chr(10));
            $this->Ln();
            $this->Cell(0,5, 'LAGOS.');
        }
        $this->Ln();
        $this->Ln();
        $this->SetFont('helvetica', '', 10);
        $this->Cell(0,5,'THROUGH');
        $this->Ln();
        $this->SetFont('helvetica', '', 10);
        $this->Cell(0,5,'THE AREA COMPTROLLER,');
        $this->Ln();
        $this->Cell(0,5, 'NIGERIA CUSTOM SERVICE,');
        $this->Ln();
        $this->Cell(0,5,'KANO/JIGAWA AREA COMMAND,');
        $this->Ln();
        $this->Cell(0,5,'BOMPAI, KANO. ');
        $this->Ln();
        $this->Ln();
        $this->Cell(0,5,'Dear Sir,');
        $this->Ln();
        $this->Ln();
        $this->SetFont('helvetica', 'BU', 13);
        $this->Cell(0,5,'APPLICATION FOR THE TRANSFER OF CONTAINER(S)','', '','C');
        $this->Ln();
        $this->Ln();
        $this->SetFont('helvetica', '', 11);
        $this->SetTopMargin(5);
        $this->MultiCell(170,5,'We hereby apply for the transfer of the below listed Container(s) to Inland Container Deport Kano, where Customs Clearance will be effected.'.chr(10).chr(10), '','L', false);
        
    }

    function Containers(){
        global $consignee;
        $this->SetLeftMargin(20);
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetXY($x,$y);
        $this->SetFont('helvetica', 'B', 11);
        $this->SetFillColor(0,0,0);
        $this->SetTextColor(255,255,255);
        $this->SetDrawColor(255,255,255);
        $this->Cell(20,5, 'Importer: ', 1,'','L', true);
        $this->SetFillColor(255,2555,255);
        $this->SetTextColor(0,0,0);
        $this->SetDrawColor(0,0,0);
        $this->SetXY($x+22,$y);
        $this->Cell(0,5,$consignee, 0);
    }

    function tableHeader()
    {

        $this->SetFillColor(0,0,0);
        $this->SetTextColor(255,255,255);
        $this->SetDrawColor(255,255,255);
        $this->SetFont('', 'B', 10);
        $this->Ln();
        $x = $this->GetX();
        $y = $this->GetY();
        $this->MultiCell(30, 5, 'Container No.', 'R', 'C', true, '', $x, $y , '','',false,true,0, 'T');
        $this->MultiCell(15, 5, 'Type', 'LR', 'C', true, '', $x+30, $y , '','',false,true,0, 'T');
        
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetDrawColor(0, 0, 0);
    }

    function OneRowTable(){
        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_type;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 12);
        $this->MultiCell(30,10, $container_no, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'M', true);
        $this->MultiCell(15,10, $container_type, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'M', true);

    }

    function TwoRowTable(){
        
        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_type, $container_type2;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 12);
        $this->MultiCell(30,20, chr(10).$container_no.chr(10).chr(10).$container_no2, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,20, chr(10).$container_type.chr(10).chr(10).$container_type2, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);

    }

    function ThreeRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_type, $container_type2, $container_type3;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,30,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,30,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
    }
    
    function FourRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_type, $container_type2, 
        $container_type3, $container_type4;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,35,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,35,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
    }

    function FiveRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_type, $container_type2, $container_type3,
        $container_type4, $container_type5;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 12);
        $this->MultiCell(30,35,$container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,35,$container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
    }

    function SixRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_no6, $container_type, $container_type2, $container_type3,
        $container_type4, $container_type5, $container_type6;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,35,$container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5.chr(10).$container_no6, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,35,$container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5.chr(10).$container_type6, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);



    }

    function SevenRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_no6, $container_no7, 
        $container_type, $container_type2, $container_type3,$container_type4, $container_type5, $container_type6, $container_type7;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,35,$container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5.chr(10).$container_no6.chr(10).$container_no7, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,35,$container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5.chr(10).$container_type6.chr(10).$container_type7, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);

    }

    function EightRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_no6, $container_no7, $container_no8, 
        $container_type, $container_type2, $container_type3,$container_type4, $container_type5, $container_type6, $container_type7, $container_type8;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,45,$container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5.chr(10).$container_no6.chr(10).$container_no7.chr(10).$container_no8, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,45,$container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5.chr(10).$container_type6.chr(10).$container_type7.chr(10).$container_type8, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
    }

    function NineRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_no6, $container_no7, $container_no8, $container_no9,
        $container_type, $container_type2, $container_type3,$container_type4, $container_type5, $container_type6, $container_type7, $container_type8, $container_type9;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,45, $container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5.chr(10).$container_no6.chr(10).$container_no7.chr(10).$container_no8.chr(10).$container_no9, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,45, $container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5.chr(10).$container_type6.chr(10).$container_type7.chr(10).$container_type8.chr(10).$container_type9, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
    }
    
    function FourteenRowTable(){

        $this->SetLeftMargin(20);
        $this->Ln();
        global $container_no, $container_no2, $container_no3, $container_no4, $container_no5, $container_no6, $container_no7, $container_no8, $container_no9, $container_no10,
        $container_no11, $container_no12, $container_no13, $container_no14, 
        $container_type, $container_type2, $container_type3,$container_type4, $container_type5, $container_type6, $container_type7, $container_type8, $container_type9, $container_type10, 
        $container_type11, $container_type12, $container_type13, $container_type14;
        $this->tableHeader();
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetFont('', '', 10);
        $this->MultiCell(30,60, $container_no.chr(10).$container_no2.chr(10).$container_no3.chr(10).$container_no4.chr(10).$container_no5.chr(10).$container_no6.chr(10).$container_no7.chr(10).$container_no8.chr(10).$container_no9.chr(10).$container_no10.chr(10).$container_no11.chr(10).$container_no12.chr(10).$container_no13.chr(10).$container_no14, 1,'C',false, '', $x,$y ,true,0,false,false,0, 'T', true);
        $this->MultiCell(15,60, $container_type.chr(10).$container_type2.chr(10).$container_type3.chr(10).$container_type4.chr(10).$container_type5.chr(10).$container_type6.chr(10).$container_type7.chr(10).$container_type8.chr(10).$container_type9.chr(10).$container_type10.chr(10).$container_type11.chr(10).$container_type12.chr(10).$container_type13.chr(10).$container_type14, 1,'C',false, '', $x+30,$y ,true,0,false,false,0, 'T', true);
        
        $this->AddPage();
        $x=$this->GetX();
        $y=$this->GetY();
        
    }


    function FooterOne(){
        global $consignee, $container_count;
        $this->SetLeftMargin(20);
        if ($container_count == 1){
            $this->Ln(15);
        }elseif ($container_count == 2){
            $this->Ln(25);
        }elseif ($container_count == 3){
            $this->Ln(35);
        }elseif ($container_count == 5){
            $this->Ln(41);
        }elseif ($container_count == 4 OR $container_count == 6 OR $container_count == 7){
            $this->Ln(38);
        }elseif ($container_count == 8 OR $container_count == 9 OR $container_count == 10){
            $this->Ln();
        }

        $this->SetFont('helvetica','',11);
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetXY($x,$y+2);
        $this->Cell(0,5,'Find attached herewith, the necessary documents.');
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetXY($x,$y+2);
        $this->Cell(0,5,'Thanks for your co-operation');
        $this->Ln();
        $x=$this->GetX();
        $y=$this->GetY();
        $this->SetXY($x,$y+2);
        $this->Cell(0,5,'Yours faithfully,');
        $this->Ln();
        if(strpos($consignee, 'SAHAL') === 0){
            $x=$this->GetX();
            $y=$this->GetY();
            $this->SetXY($x,$y);
            $this->Cell(0,5,'For: ');
            $this->SetFont('', 'B', 13);
            $x=$this->GetX();
            $y=$this->GetY();
            $this->SetXY($x-371,$y);
            $this->SetRightMargin(0);
            $this->Cell(0,5,'SYNERGY INDEX NIG. LTD. ');
            $this->SetFont('helvetica', 'B', 15);
            $this->MultiCell(0,30, chr(10).chr(10).chr(10).'FAROUK SUFI'.chr(10).chr(10).'Manager', 0,'L',false, '', $x-170,$y ,true,0,false,false,0, 'T', true);
        }else{
            $x=$this->GetX();
            $y=$this->GetY();
            $this->SetXY($x,$y);
            $this->Cell(0,5,'For: ');
            $this->SetFont('', 'B', 11);
            $x=$this->GetX();
            $y=$this->GetY();
            $this->SetXY($x-371,$y);
            $this->SetRightMargin(0);
            $this->Cell(0,5,'HIMMA SUCCESS & INTEGRITY NIG. LTD. ');
            $this->SetFont('helvetica', 'B', 15);
            $this->MultiCell(0,30, chr(10).chr(10).chr(10).'HAMISU GARBA'.chr(10).'Manager', 0,'L',false, '', $x-170,$y ,true,0,false,false,0, 'T', true);
        }

    }

}

    $pdf = new myPDFTwo();

    $pdf->SetPrintHeader(false);
    $pdf->SetPrintFooter(false);
    
    $pdf->AddPage();
    $pdf->Date();
    $pdf->Custom();
    $pdf->Containers();
    if ($container_count == 1){
        $pdf->OneRowTable();
    }elseif ($container_count == 2){
        $pdf->TwoRowTable();
    }elseif ($container_count == 3){
        $pdf->ThreeRowTable();
    }elseif ($container_count == 4){
        $pdf->FourRowTable();
    }elseif ($container_count == 5){
        $pdf->FiveRowTable();
    }elseif ($container_count == 6){
        $pdf->SixRowTable();
    }elseif ($container_count == 7){
        $pdf->SevenRowTable();
    }elseif ($container_count == 8){
        $pdf->EightRowTable();
    }elseif ($container_count == 9){
        $pdf->NineRowTable();
    }elseif ($container_count == 10){
        $pdf->TenRowTable();
    }elseif ($container_count == 14){
        $pdf->FourteenRowTable();
    }
    $pdf->FooterOne();
    if ($container_count == 5 OR $container_count == 6 OR $container_count == 7 OR $container_count == 8 OR $container_count == 9){
        $pdf->deletePage(2);
    }
    $pdf->Output();
    endforeach;
    $conn->close();
?>
