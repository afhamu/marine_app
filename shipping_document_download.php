<?php

$id = $_REQUEST['id'];
$file = basename($_POST['file']);
$file = 'uploads/shipping/'.$id.'.pdf'.$file;

if (!file_exists($file)) {
    echo "File does not exist\n";

}else{
    header("Content-Description: File Transfer");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename = $file");
    header("Cache-Control: public");
    header("Content-Transfer-Encoding: binary");
    readfile($file);
}
echo $file;
?>