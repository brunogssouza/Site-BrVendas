<?php
include("conexao.php");


try {
    $sql= 'SELECT CATEGORIA FROM categoria_produtos';
    foreach ($conn->query($sql) as $row) {
        print "<br><br>";
        print $row ['CATEGORIA']. "<br> ";
    }
} catch (PDOException $e_){
    echo "ERROR". $e-> getMessage();
}
?>