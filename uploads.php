<?php
include 'config.php';

if(isset($_POST['import'])){

    $fileName =   $_FILES['excel']['name'];
    $fileExtension =  explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));

    $newFileName = date("Y.m.d") . "-" . date("h.i.sa") . "." . $fileExtension;

    $targetDirectory = "uploads_file/" . $newFileName;
    move_uploaded_file( $_FILES["excel"]["tmp_name"],$targetDirectory );
  
    
    error_reporting(0);
    ini_set('display_error',0);

    require "excelReader/excel_reader2.php";
    require "excelReader/SpreadsheetReader.php";

    $read = new SpreadsheetReader($targetDirectory);
    foreach($read as $key=>$value){

    $nom=$value[0];
    $prenom=$value[1];
    $age=$value[2];

        $conn->query("INSERT INTO test values('','$nom','$prenom','$age')");
    }

    header('location:list-prof.php');

}

?>