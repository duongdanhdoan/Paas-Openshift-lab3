<?php
    $dbName="";
    $dbserver="";
    $dbuser="";
    $dbpwd="";
    $conn = new mysqli($dbserver,$dbName,$dbuser,$dbpwd);

    if(!$conn){
        die("connection failed :". mysqli_error());
    }
    echo"connected successfuly";

?>
