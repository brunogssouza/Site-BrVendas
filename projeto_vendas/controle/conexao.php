<?php
try { 
    $conn= new PDO("mysql:host=localhost; dbname=bruno_comercio", "root", "");
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn-> exec("set names UTF8");
}catch (PDOException $e){
    echo 'ERROR:'. $e->getMessage();
}
?>