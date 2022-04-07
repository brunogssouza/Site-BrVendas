<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro - Bairros</title>
	<link rel="stylesheet" href="../Estilos_CSS/style_index.css" media="screen">
</head>

<body>
<div class="navbar">
        <a href="../index.html">BrVENDAS</a>
        <div class="dropdown" style="float:right">
            <button class="dropbtn"> FORNECEDORES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="form_fornecedor_produto_consulta.php">CONSULTA</a><!-- feito -->
                <a href="form_fornecedor_produto_inserir.php">INSERIR</a><!-- feito -->
                <a href="form_fornecedor_produto_atualizar.php">ATUALIZAR</a>
                <a href="form_fornecedor_produto_deletar.php">EXCLUIR</a><!-- feito -->
                </li>
            </div>

        </div>


        <div class="dropdown" style="float:right">
            <button class="dropbtn"> FILIAIS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="form_filial_consulta.php">CONSULTA</a><!-- feito -->
                <a href="form_filial_inserir.php">INSERIR</a><!-- feito -->
                <a href="form_filial_atualizar.php">ATUALIZAR</a>
                <a href="form_filial_deletar.php">EXCLUIR</a> <!-- feito -->

                </li>
            </div>
        </div>
        <!-- INSERIR CATEGORIA PRODUTOS NESSE DROP DOWN PARA TODAS OS TIPOS (CONSULTA, INSERIR, ETC)-->
        <div class="dropdown" style="float:right">
            <button class="dropbtn"> PRODUTOS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="form_produto_consulta.php">CONSULTA</a><!-- feito -->
                <a href="form_produto_inserir.php">INSERIR</a><!-- feito -->
                <a href="form_produto_atualizar.php">ATUALIZAR</a>
                <a href="form_produto_deletar.php">EXCLUIR</a><!-- feito -->

                </li>
            </div>
        </div>
        <div class="dropdown" style="float:right">
            <button class="dropbtn">CLIENTES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="form_cliente_consulta.php">CONSULTA</a> <!-- feito -->
                <a href="form_cliente_inserir.php">INSERIR</a> <!-- feito -->
                <a href="form_cliente_atualizar.php">ATUALIZAR</a>
                <a href="form_cliente_deletar.php">EXCLUIR</a> <!-- feito -->
                </li>
            </div>
        </div>
        <a href="form_venda.php" style="float:right">STAFF</a>
        <a href="../index.html" style="float:right" class="active">HOME</a> <!-- feito -->
    </div>

	<div id="cabecalho">
		<h1>Atualização de Fornecedores</h1>
	</div>

	<h3 id="banner">
        <fieldset>

			<legend>Atualizar nome da representante</legend>

			<form method="POST" action="../controle/atualizar_nome_fornecedor_representante_update.php">

				<label>Nome da representante:</label>
				<?php
                    include ("../controle/conexao.php");
                    try{
                    $sql = 'SELECT * FROM fornecedor_produto';
                    print "<select name='nome_rep_antigo'>";
                    foreach ($conn->query($sql) as $row) {
                        print "<option value=".$row['num_Fornecedor'].">".$row['nome_representante']."</option>";
                    }
                    print "</select>";
                    }
                    catch(PDOException $ex_){
                        echo 'Erro '. $ex->getMessage();
                    }
                    print "<br><br>";
				?>

				<label>Atualizar para:</label>
				<input type="text" value="" name="representante_nova" required="required" /></br></br>

				<input type="submit" value="Atualizar">
			</form>

		</fieldset>
                    <br><br>
        <fieldset>

			<legend>Atualizar nome do Fornecedor</legend>
			<!-- o metodo post permite com que as informações sensiveis sejam protegidas na hora do submit 
									pois as informações preenchidas não aparecem no URL-->
			<form method="POST" action="../controle/atualizar_nome_fornecedor_update.php">

				<label>Nome da fornecedora:</label>
				<?php
                    include ("../controle/conexao.php");
                    try{
                    $sql = 'SELECT * FROM fornecedor_produto';
                    print "<select name='nome_antigo'>";
                    foreach ($conn->query($sql) as $row) {
                        print "<option value=".$row['num_Fornecedor'].">".$row['nome_Fornecedor']."</option>";
                    }
                    print "</select>";
                    }
                    catch(PDOException $ex_){
                        echo 'Erro '. $ex->getMessage();
                    }
                    print "<br><br>";
				?>

				<label>Atualizar para:</label>
				<input type="text" value="" name="fornecedor_nova" required="required" /></br></br>

				<input type="submit" value="Atualizar">
			</form>

		</fieldset>
	</h3>
</body>

</html>
