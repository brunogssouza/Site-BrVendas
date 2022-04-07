<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produtos - Nova compra</title>
	<link rel="stylesheet" href="../Estilos_CSS/style_index.css	" media="screen">
</head>
<body>


<div class="navbar">
        <a href="../index.html">BrVENDAS</a>

        <div class="dropdown" style="float:right">
            <button class="dropbtn"> FORNECEDORES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../formularios/form_fornecedor_produto_consulta.php">CONSULTA</a>
                <a href="../formularios/form_fornecedor_produto_inserir.php">INSERIR</a>
                <a href="../formularios/form_fornecedor_produto_atualizar">ATUALIZAR</a>
                <a href="../formularios/form_fornecedor_produto_deletar.php">EXCLUIR</a>
                </li>
            </div>

        </div>


        <div class="dropdown" style="float:right">
            <button class="dropbtn"> FILIAIS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../formularios/form_filial_consulta.php">CONSULTA</a>
                <a href="../formularios/form_filial_inserir.php">INSERIR</a>
                <a href="../formularios/form_filial_atualizar.php">ATUALIZAR</a>
                <a href="../formularios/form_filial_deletar.php">EXCLUIR</a>

                </li>
            </div>
        </div>
        
        <div class="dropdown" style="float:right">
            <button class="dropbtn"> PRODUTOS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../formularios/form_produto_consulta.php">CONSULTA</a>
                <a href="../formularios/form_produto_inserir.php">INSERIR</a>
                <a href="../formularios/form_produto_atualizar.php">ATUALIZAR</a>
                <a href="../formularios/form_produto_deletar.php">EXCLUIR</a>

                </li>
            </div>
        </div>
        <div class="dropdown" style="float:right">
            <button class="dropbtn">CLIENTES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../formularios/form_cliente_consulta.php">CONSULTA</a>
                <a href="../formularios/form_cliente_inserir.php">INSERIR</a>
                <a href="../formularios/form_cliente_atualizar.php">ATUALIZAR</a>
                <a href="../formularios/form_cliente_deletar.php">EXCLUIR</a>
                </li>
            </div>
        </div>
        <a href="../formularios/form_venda.php" style="float:right">STAFF</a>
        <a href="../index.html" style="float:right" class="active">HOME</a>
    </div>

	<div id="cabecalho">
		<h1>Produtos</h1>
	</div>



<div id=cabecalho>
    <h1>Venda de produtos</h1>
</div>
<h3 id="banner">
    <fieldset>
    <form method="POST" action="inserir_pagamento_insert.php">
        <label>Cliente:</label>
<?php
include ("conexao.php");
try{
  $sql = 'SELECT * FROM cliente';
  print "<select name='numero_cliente'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value=".$row['num_cliente'].">".$row['nome_cliente']." - ".$row['CPF']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
<br><br>
				<label>Data da venda:</label>

				<input type="date" value="" placeholder="" name="data_venda"><br><br>
				<label for="parcelas">Quantidade de parcelas:</label>
				<select name="parcelas" id="parcelas" value="">
					<option value=""></option>
					<option value="1x">1x</option>
					<option value="2x">2x</option>
					<option value="3x">3x</option>
					<option value="4x">4x</option>
				</select><br><br>

				<label>Data do inicial do pagamento:</label>
				<input type="date" value="" placeholder="" name="data_inicial">

				<label>Data do final do pagamento:</label>
				<input type="date" value="" placeholder="" name="data_final"><br><br>

				<input type="submit" value="Confirmar">
				
				<br><br>
				
				<a href='../index.html'>Retornar para pagina principal</a>	
    </fieldset>
</body>
</html>