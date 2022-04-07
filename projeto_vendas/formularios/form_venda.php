<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Info - VENDA</title>
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
		<h1>Controle de Vendas</h1>
	</div>

	<h3 id="banner">
		<fieldset>

			<legend>Pesquisar recibo</legend>
			<!-- o metodo post permite com que as informações sensiveis sejam protegidas na hora do submit 
				pois as informações preenchidas não aparecem no URL/ USAREMOS PARA CONSULTA-->
			<form method="POST" action="../controle/con_venda_select.php">
				<!--O produto vendido será uma informação advinda do banco de dados venda e nos devolvera as informações da compra-->
				<label>Numero do pagamento:</label>
				<?php
				include ("../controle/conexao.php");
				try{
				  $sql = 'SELECT * FROM venda';
				  print "<select name='Informações_Pagamento'>";
				  foreach ($conn->query($sql) as $row) {
				    print "<option value=".$row['Informações_Pagamento'].">".$row['Informações_Pagamento']."</option>";
				  }
				  print "</select>";
				}
				catch(PDOException $ex_){
					echo 'Erro '. $ex->getMessage();
				}
				?>

                <input type="submit" value="Procurar">
		</fieldset>
			</form>

		</fieldset>
		<br><br><br><br><br>
		<fieldset>
			<legend>Inserir nova compra</legend>

			<form method="POST" action="../controle/form_venda_nova_compra.php">

				<input type="submit" value="Nova compra">

			</form>

		</fieldset>
	</h3>
</body>

</html>