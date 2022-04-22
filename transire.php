<?php
//error_reporting(0);
require ('tcpdf/tcpdf.php');
include ('connection.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM bill WHERE id = '$id'";
$statement1 =$conn->prepare($sql);
$statement1->execute();
$bills = $statement1->fetchAll();

foreach ($bills as $bill):

    $bill_lading =  $bill['bill_of_lading'];
    $consignee = $bill['consignee'];
    $address = $bill['address'];
    $vessel = $bill['vessel'];
    $voyage_no = $bill['voyage_no'];
    $port_of_loading = $bill['port_of_loading'];
    $client = $bill['client'];
    $shipping_line = $bill['shipping_line'];
    $eta_date = $bill['eta_date'];
    $port_of_discharge = $bill['port_of_discharge'];
    $container_count = $bill['containers'];
    $fractional_num = $container_count.'X';


    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 1");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {

        $container_no = $container['container_no'];
        $seal_no = $container['seal_no'];
        $container_type = $container['container_type'];
        $description = $container['description'];
        $weight = $container['weight_net'];
        if(strpos($weight, '.') != 0){
            $weight = $container['weight_net'];
        }else{
            $weight = $weight.'.'.'000';
        }
    }


    $result1 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 2");
    $result1->execute();
    $containers = $result1->fetchAll();

    foreach ($containers as $container){
        $container_no2 = $container['container_no'];
        $seal_no2 = $container['seal_no'];
        $container_type2 = $container['container_type'];
        $description2 = $container['description'];
        $weight2 = $container['weight_net'];
        if(strpos($weight2, '.') != 0){
            $weight2 = $container['weight_net'];
        }else{
            $weight2 = $weight2.'.'.'000';
        }
    }

    $result2 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 3");
    $result2->execute();
    $containers = $result2->fetchAll();

    foreach ($containers as $container) {
        $container_no3 = $container['container_no'];
        $seal_no3 = $container['seal_no'];
        $container_type3 = $container['container_type'];
        $description3 = $container['description'];
        $weight3 = $container['weight_net'];
        if(strpos($weight3, '.') != 0){
            $weight3 = $container['weight_net'];
        }else{
            $weight3 = $weight3.'.'.'000';
        }
    }

    $result3 = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 4");
    $result3->execute();
    $containers = $result3->fetchAll();

    foreach ($containers as $container) {
        $container_no4 = $container['container_no'];
        $seal_no4 = $container['seal_no'];
        $container_type4 = $container['container_type'];
        $description4 = $container['description'];
        $weight4 = $container['weight_net'];
        if(strpos($weight4, '.') != 0){
            $weight4 = $container['weight_net'];
        }else{
            $weight4 = $weight4.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 5");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no5 = $container['container_no'];
        $seal_no5 = $container['seal_no'];
        $container_type5 = $container['container_type'];
        $description5 = $container['description'];
        $weight5 = $container['weight_net'];
        if(strpos($weight5, '.') != 0){
            $weight5 = $container['weight_net'];
        }else{
            $weight5 = $weight5.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 6");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no6 = $container['container_no'];
        $seal_no6 = $container['seal_no'];
        $container_type6 = $container['container_type'];
        $description6 = $container['description'];
        $weight6 = $container['weight_net'];
        if(strpos($weight6, '.') != 0){
            $weight6 = $container['weight_net'];
        }else{
            $weight6 = $weight6.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 7");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no7 = $container['container_no'];
        $seal_no7 = $container['seal_no'];
        $container_type7 = $container['container_type'];
        $description7 = $container['description'];
        $weight7 = $container['weight_net'];
        if(strpos($weight7, '.') != 0){
            $weight7 = $container['weight_net'];
        }else{
            $weight7 = $weight7.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 8");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no8 = $container['container_no'];
        $seal_no8 = $container['seal_no'];
        $container_type8 = $container['container_type'];
        $description8 = $container['description'];
        $weight8 = $container['weight_net'];
        if(strpos($weight8, '.') != 0){
            $weight8 = $container['weight_net'];
        }else{
            $weight8 = $weight8.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 9");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no9 = $container['container_no'];
        $seal_no9 = $container['seal_no'];
        $container_type9 = $container['container_type'];
        $description9 = $container['description'];
        $weight9 = $container['weight_net'];
        if(strpos($weight9, '.') != 0){
            $weight9 = $container['weight_net'];
        }else{
            $weight9 = $weight9.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 10");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no10 = $container['container_no'];
        $seal_no10 = $container['seal_no'];
        $container_type10 = $container['container_type'];
        $description10 = $container['description'];
        $weight10 = $container['weight_net'];
        if(strpos($weight10, '.') != 0){
            $weight10 = $container['weight_net'];
        }else{
            $weight10 = $weight10.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 11");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no11 = $container['container_no'];
        $seal_no11 = $container['seal_no'];
        $container_type11 = $container['container_type'];
        $description11 = $container['description'];
        $weight11 = $container['weight_net'];
        if(strpos($weight11, '.') != 0){
            $weight11 = $container['weight_net'];
        }else{
            $weight11 = $weight11.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 12");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no12 = $container['container_no'];
        $seal_no12 = $container['seal_no'];
        $container_type12 = $container['container_type'];
        $description12 = $container['description'];
        $weight12 = $container['weight_net'];
        if(strpos($weight12, '.') != 0){
            $weight12 = $container['weight_net'];
        }else{
            $weight12 = $weight12.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 13");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no13 = $container['container_no'];
        $seal_no13 = $container['seal_no'];
        $container_type13 = $container['container_type'];
        $description13 = $container['description'];
        $weight13 = $container['weight_net'];
        if(strpos($weight13, '.') != 0){
            $weight13 = $container['weight_net'];
        }else{
            $weight13 = $weight13.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 14");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no14 = $container['container_no'];
        $seal_no14 = $container['seal_no'];
        $container_type14 = $container['container_type'];
        $description14 = $container['description'];
        $weight14 = $container['weight_net'];
        if(strpos($weight14, '.') != 0){
            $weight14 = $container['weight_net'];
        }else{
            $weight14 = $weight14.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 15");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no15 = $container['container_no'];
        $seal_no15 = $container['seal_no'];
        $container_type15 = $container['container_type'];
        $description15 = $container['description'];
        $weight15 = $container['weight_net'];
        if(strpos($weight15, '.') != 0){
            $weight15 = $container['weight_net'];
        }else{
            $weight15 = $weight15.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 16");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no16 = $container['container_no'];
        $seal_no16 = $container['seal_no'];
        $container_type16 = $container['container_type'];
        $description16 = $container['description'];
        $weight16 = $container['weight_net'];
        if(strpos($weight16, '.') != 0){
            $weight16 = $container['weight_net'];
        }else{
            $weight16 = $weight16.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 17");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no17 = $container['container_no'];
        $seal_no17 = $container['seal_no'];
        $container_type17 = $container['container_type'];
        $description17 = $container['description'];
        $weight17 = $container['weight_net'];
        if(strpos($weight17, '.') != 0){
            $weight17 = $container['weight_net'];
        }else{
            $weight17 = $weight17.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 18");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no18 = $container['container_no'];
        $seal_no18 = $container['seal_no'];
        $container_type18 = $container['container_type'];
        $description18 = $container['description'];
        $weight18 = $container['weight_net'];
        if(strpos($weight18, '.') != 0){
            $weight18 = $container['weight_net'];
        }else{
            $weight18 = $weight18.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 19");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no19 = $container['container_no'];
        $seal_no19 = $container['seal_no'];
        $container_type19 = $container['container_type'];
        $description19 = $container['description'];
        $weight19 = $container['weight_net'];
        if(strpos($weight19, '.') != 0){
            $weight19 = $container['weight_net'];
        }else{
            $weight19 = $weight19.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 11");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no11 = $container['container_no'];
        $seal_no11 = $container['seal_no'];
        $container_type11 = $container['container_type'];
        $description11 = $container['description'];
        $weight11 = $container['weight_net'];
        if(strpos($weight11, '.') != 0){
            $weight11 = $container['weight_net'];
        }else{
            $weight11 = $weight11.'.'.'000';
        }
    }

    $result = $conn->prepare("SELECT * FROM containers WHERE bill = '$bill_lading' AND num = 20");
    $result->execute();
    $containers = $result->fetchAll();

    foreach ($containers as $container) {
        $container_no20 = $container['container_no'];
        $seal_no20 = $container['seal_no'];
        $container_type20 = $container['container_type'];
        $description20 = $container['description'];
        $weight20 = $container['weight_net'];
        if(strpos($weight20, '.') != 0){
            $weight20 = $container['weight_net'];
        }else{
            $weight20 = $weight20.'.'.'000';
        }
    }



    class myPDF extends TCPDF{
        function Header()
        {
            $this->SetFont('Times', 'BU', 30);
            $this->Cell(0, 10, 'TRANSIRE MANIFEST', 0,0, 'C');
            $this->Ln();
            $this->SetFont('Times', '', 16);
            $this->Cell(0, 15, 'INLAND CONTAINERS (NIGERIA LIMITED)', 0,0, 'C');
            $this->Ln();
        }

        function HeaderTwo(){

            $this->SetFont('', 'B', 12);
            $this->SetLeftMargin(20);
            $this->Cell(0, 10, 'TERMINAL REQUESTING TRANSFER:', 0,0,'L');
            $this->SetRightMargin(125);
            $this->SetFont('', 'U', 12);
            $this->Cell(0, 10, 'APAPA, TINCAN, KIRIKIRI LIGHTER', 0,0,'R');
            $this->Ln();
            $this->SetFont('', 'B', 12);
            $this->SetLeftMargin(20);
            $this->Cell(0, 10, 'AREA COMMAND:', 0,0,'L');
            $this->SetRightMargin(205);
            $this->SetFont('', 'U', 12);
            $this->Cell(0, 10, 'KANO/JIGAWA', 0,0,'R');
            $this->SetRightMargin(80);
            $this->SetFont('', 'B', 12);
            $this->Cell(0, 10, 'PORT OF DISCHARGE: ', 0,0,'R');
            $this->SetFont('', 'U', 12);
            $this->SetRightMargin(60);
            $this->Cell(0,10, ' TERMINAL & LILYPOND');
            $this->SetLeftMargin(10);
            $this->Ln();

        }

        function tableHeader()
        {

            $this->SetFont('', 'B', 10);

            $x = $this->GetX();
            $y = $this->GetY();
            $this->MultiCell(30, 12, 'Bill of Lading', 1, 'C', false, '', $x, $y , '','','','',0, 'M');
            $this->MultiCell(35, 12, 'Ship Rotation No. & Date', 1, 'C', false, '', $x + 30, $y);
            $this->MultiCell(25, 12, 'Country of Origin', 1, 'C', false, '', $x + 65, $y );
            $this->MultiCell(20, 12, 'Fractional Numbering', 1, 'C', false, '', $x + 90, $y);
            $this->MultiCell(15, 12, 'Type', 1, 'C', false, '', $x + 110, $y , '','','','',0, 'M');
            $this->MultiCell(25, 12, 'Container No.', 1, 'C', false, '', $x + 125, $y , '','','','',0, 'M');
            $this->MultiCell(25, 12, 'Seal No.', 1, 'C', false, '', $x + 150, $y , '','','','',0, 'M');
            $this->MultiCell(45, 12, 'Importer\'s Name & Addr.', 1, 'C', false, '', $x + 175, $y , '','','','',0, 'M');
            $this->MultiCell(30, 12, 'Description of Goods', 1, 'C', false, '', $x + 220, $y , true,0,false,false,0, 'M', true);
            $this->MultiCell(25, 12, 'Net Weight (kgs)', 1, 'C', false, '', $x + 250, $y);

            $this->SetFillColor(255, 255, 255);
            $this->SetTextColor(0, 0, 0);
            $this->SetDrawColor(0, 0, 0);
        }

        function OneContainerTable(){

            global $bill_lading, $consignee, $fractional_num, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function TwoContainersTable(){

            global $bill_lading, $fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2, $container_type2;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function ThreeContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function FourContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }
        function FiveContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function SixContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function SevenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7;
            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);


            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function EightContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function NineContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function TenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function ElevenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function TwelveContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11,$container_no12, $seal_no12, $weight12, $container_type12;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function ThirteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11,$container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function FourteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11,$container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function FifteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11,$container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function SixteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11, $container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15, $container_no16, $seal_no16, $weight16, $container_type16;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15.chr(10).chr(10).$container_type16, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15.chr(10).chr(10).$container_no16, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15.chr(10).chr(10).$seal_no16, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15.chr(10).chr(10).$weight16, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function SeventeenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11, $container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15, $container_no16, $seal_no16, $weight16, $container_type16,
                   $container_no17, $seal_no17, $weight17, $container_type17;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15.chr(10).chr(10).$container_type16.chr(10).chr(10).$container_type17, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15.chr(10).chr(10).$container_no16.chr(10).chr(10).$container_no17, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15.chr(10).chr(10).$seal_no16.chr(10).chr(10).$seal_no17, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15.chr(10).chr(10).$weight16.chr(10).chr(10).$weight17, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function EighteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11, $container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15, $container_no16, $seal_no16, $weight16, $container_type16,
                   $container_no17, $seal_no17, $weight17, $container_type17, $container_no18, $seal_no18, $weight18, $container_type18;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15.chr(10).chr(10).$container_type16.chr(10).chr(10).$container_type17.chr(10).chr(10).$container_type18, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15.chr(10).chr(10).$container_no16.chr(10).chr(10).$container_no17.chr(10).chr(10).$container_no18, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15.chr(10).chr(10).$seal_no16.chr(10).chr(10).$seal_no17.chr(10).chr(10).$seal_no18, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15.chr(10).chr(10).$weight16.chr(10).$weight17.chr(10).chr(10).$weight18, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function NineteenContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11, $container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15, $container_no16, $seal_no16, $weight16, $container_type16,
                   $container_no17, $seal_no17, $weight17, $container_type17, $container_no18, $seal_no18, $weight18, $container_type18, $container_no19, $seal_no19, $weight19, $container_type19;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15.chr(10).chr(10).$container_type16.chr(10).chr(10).$container_type17.chr(10).chr(10).$container_type18.chr(10).chr(10).$container_type19, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15.chr(10).chr(10).$container_no16.chr(10).chr(10).$container_no17.chr(10).chr(10).$container_no18.chr(10).chr(10).$container_no19, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15.chr(10).chr(10).$seal_no16.chr(10).chr(10).$seal_no17.chr(10).chr(10).$seal_no18.chr(10).chr(10).$seal_no19, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15.chr(10).chr(10).$weight16.chr(10).$weight17.chr(10).chr(10).$weight18.chr(10).chr(10).$weight19, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function TwentyContainersTable(){

            global $bill_lading,$fractional_num, $consignee, $address, $vessel, $voyage_no,$port_of_loading, $container_no,  $seal_no, $weight,$container_type, $description,
                   $container_no2,  $seal_no2, $weight2,$container_type2, $container_no3,  $seal_no3, $weight3,$container_type3, $container_no4,  $seal_no4, $weight4,$container_type4,
                   $container_no5,  $seal_no5, $weight5,$container_type5, $container_no6, $seal_no6, $weight6, $container_type6,  $container_no7, $seal_no7, $weight7, $container_type7,
                   $container_no8, $seal_no8, $weight8, $container_type8, $container_no9, $seal_no9, $weight9, $container_type9, $container_no10, $seal_no10, $weight10, $container_type10,
                   $container_no11, $seal_no11, $weight11, $container_type11, $container_no12, $seal_no12, $weight12, $container_type12,$container_no13, $seal_no13, $weight13, $container_type13,
                   $container_no14, $seal_no14, $weight14, $container_type14, $container_no15, $seal_no15, $weight15, $container_type15, $container_no16, $seal_no16, $weight16, $container_type16,
                   $container_no17, $seal_no17, $weight17, $container_type17, $container_no18, $seal_no18, $weight18, $container_type18, $container_no19, $seal_no19, $weight19, $container_type19,
                   $container_no20, $seal_no20, $weight20, $container_type20;

            $this->tableHeader();
            $this->Ln();

            $this->SetFont('helvetica', '', 9);

            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,110,chr(10).$bill_lading, 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,110,chr(10).$vessel.chr(10).$voyage_no, 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$port_of_loading, 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,110,chr(10).$fractional_num, 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,110,chr(10).$container_type.chr(10).chr(10).$container_type2.chr(10).chr(10).$container_type3.chr(10).chr(10).$container_type4.chr(10).chr(10).$container_type5.chr(10).chr(10).$container_type6.chr(10).chr(10).$container_type7.chr(10).chr(10).$container_type8.chr(10).chr(10).$container_type9.chr(10).chr(10).$container_type10.chr(10).chr(10).$container_type11.chr(10).chr(10).$container_type12.chr(10).chr(10).$container_type13, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$container_no.chr(10).chr(10).$container_no2.chr(10).chr(10).$container_no3.chr(10).chr(10).$container_no4.chr(10).chr(10).$container_no5.chr(10).chr(10).$container_no6.chr(10).chr(10).$container_no7.chr(10).chr(10).$container_no8.chr(10).chr(10).$container_no9.chr(10).chr(10).$container_no10.chr(10).chr(10).$container_no11.chr(10).chr(10).$container_no12.chr(10).chr(10).$container_no13, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$seal_no.chr(10).chr(10).$seal_no2.chr(10).chr(10).$seal_no3.chr(10).chr(10).$seal_no4.chr(10).chr(10).$seal_no5.chr(10).chr(10).$seal_no6.chr(10).chr(10).$seal_no7.chr(10).chr(10).$seal_no8.chr(10).chr(10).$seal_no9.chr(10).chr(10).$seal_no10.chr(10).chr(10).$seal_no11.chr(10).chr(10).$seal_no12.chr(10).chr(10).$seal_no13, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,110,chr(10).$consignee.chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10)."",1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,110,chr(10).$description, 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,110,chr(10).$weight.chr(10).chr(10).$weight2.chr(10).chr(10).$weight3.chr(10).chr(10).$weight4.chr(10).chr(10).$weight5.chr(10).chr(10).$weight6.chr(10).chr(10).$weight7.chr(10).chr(10).$weight8.chr(10).chr(10).$weight9.chr(10).chr(10).$weight10.chr(10).chr(10).$weight11.chr(10).chr(10).$weight12.chr(10).chr(10).$weight13, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);

            $this->AddPage('L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->MultiCell(30,60,chr(10)."", 1,'C', false, '',$x,$y,true,0,false,false,0, 'T', true);
            $this->MultiCell(35,60,chr(10)."".chr(10)."", 1,'C', false,'', $x+30,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10)."", 1,'C', false,'', $x+65,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(20,60,chr(10)."", 1,'C', false, '', $x+90,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(15,60,chr(10).$container_type14.chr(10).chr(10).$container_type15.chr(10).chr(10).$container_type16.chr(10).chr(10).$container_type17.chr(10).chr(10).$container_type18.chr(10).chr(10).$container_type19.chr(10).chr(10).$container_type20, 1,'C',false, '', $x+110,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$container_no14.chr(10).chr(10).$container_no15.chr(10).chr(10).$container_no16.chr(10).chr(10).$container_no17.chr(10).chr(10).$container_no18.chr(10).chr(10).$container_no19.chr(10).chr(10).$container_no20, 1,'C',false, '', $x+125,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$seal_no14.chr(10).chr(10).$seal_no15.chr(10).chr(10).$seal_no16.chr(10).chr(10).$seal_no17.chr(10).chr(10).$seal_no18.chr(10).chr(10).$seal_no19.chr(10).chr(10).$seal_no20, 1,'C',false, '', $x+150,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(45,60,chr(10)."".chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).chr(10).$address,1,'C', false, '', $x+175,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(30,60,chr(10)."", 1,'C',false, '', $x+220,$y ,true,0,false,false,0, 'T', true);
            $this->MultiCell(25,60,chr(10).$weight14.chr(10).chr(10).$weight15.chr(10).chr(10).$weight16.chr(10).$weight17.chr(10).chr(10).$weight18.chr(10).chr(10).$weight19.chr(10).chr(10).$weight20, 1,'C',false, '', $x+250,$y ,true,0,false,false,0, 'T', true);
        }

        function Footer()
        {

            $this->SetFont('', 'B', 10);
            $this->SetDrawColor(0,0,0);
            $this->SetTextColor(0,0,0);

            $this->Ln();
            $this->setCellMargins(10,0,0,0);
            $this->Cell(0,20,'RECOMMENDED BY C.A.C ORIGINATING AREA: ', 0,0,'L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->Line(105, $y+12, $x+50, $y+12);
            $this->Ln();
            $this->Cell(0,0,'APPROVAL BY C.A.C PORT OF DISCHARGE: ', 0,0,'L');
            $x=$this->GetX();
            $y=$this->GetY();
            $this->Line(100, $y+3, $x+50, $y+3);
            $x=$this->GetX();
            $y=$this->GetY();
            $this->Line(20, $y+12, $x+50, $y+12);

        }

        function Signature(){
            $this->Ln();
            $x=$this->GetX();
            $y=$this->GetY();
            $image1 = "images/signature.png";
            $this->SetXY($x+220,$y+8);
            $this->Cell( 0, 0, $this->Image($image1, $this->GetX(), $this->GetY(), 60.00), 0, 0, 'L', false );
        }

    }

    $pdf = new myPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor(' ');
    $pdf->SetTitle(' ');

    $pdf->SetPrintHeader(false);
    $pdf->SetPrintFooter(false);

    $pdf->AddPage('L','A4');
    $pdf->Header();
    $pdf->HeaderTwo();
    if ($container_count == 1){
        $pdf->OneContainerTable();
    }elseif ($container_count == 2){
        $pdf->TwoContainersTable();
    }elseif ($container_count == 3){
        $pdf->ThreeContainersTable();
    }elseif ($container_count == 4){
        $pdf->FourContainersTable();
    }elseif ($container_count == 5){
        $pdf->FiveContainersTable();
    }elseif ($container_count == 6){
        $pdf->SixContainersTable();
    }elseif ($container_count == 7){
        $pdf->SevenContainersTable();
    }elseif ($container_count == 8){
        $pdf->EightContainersTable();
    }elseif ($container_count == 9){
        $pdf->NineContainersTable();
    }elseif ($container_count == 10){
        $pdf->TenContainersTable();
    }elseif ($container_count == 11){
        $pdf->ElevenContainersTable();
    }elseif ($container_count == 12){
        $pdf->TwelveContainersTable();
    }elseif ($container_count == 13){
        $pdf->ThirteenContainersTable();
    }elseif ($container_count == 14){
        $pdf->FourteenContainersTable();
    }elseif ($container_count == 15){
        $pdf->FifteenContainersTable();
    }elseif ($container_count == 16){
        $pdf->SixteenContainersTable();
    }elseif ($container_count == 17){
        $pdf->SeventeenContainersTable();
    }elseif ($container_count == 18){
        $pdf->EighteenContainersTable();
    }elseif ($container_count == 19){
        $pdf->NineteenContainersTable();
    }elseif ($container_count == 20){
        $pdf->TwentyContainersTable();
    }

    $pdf->Footer();
    $pdf->Signature();
    $pdf->Output();

    endforeach;
?>
