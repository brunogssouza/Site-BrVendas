<?php
include("conexao.php");


try {
    $sql= 'SELECT 	pagamento.data_venda,pagamento.data_inicial_pag,pagamento.data_final_pag,pagamento.qtd_parcelas, cliente.nome_cliente FROM pagamento INNER JOIN cliente ON pagamento.cliente = cliente.num_cliente';
    foreach ($conn->query($sql) as $row) {
        print "<br><br>";
        print $row ['nome_cliente']. "<br> ";
        print $row ['data_venda']. "<br>";
        print $row ['data_inicial_pag']. "<br>";
        print $row ['data_final_pag']. "<br>";
        print $row ['qtd_parcelas']. "<br>";
        print "<br><br>";
    }
} catch (PDOException $e_){
    echo "ERROR". $e-> getMessage();
}
?>