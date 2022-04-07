<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fornecedores - Cadastro</title>
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
		<h1>Cadastro de fornecedora de produtos</h1>
	</div>

	<h3 id="banner">

		<fieldset>
			<legend>Cadastrar novo representante</legend>
			<form method="POST" action="../controle/inserir_fornecedora_produto_insert.php">

				<label>Nome da fornecedora:</label>
				<input type="text" value="" name="fornecedora" required="required" /></br></br>
				<label>Representante:</label>
				<input type="text" value="" name="representante" required="required" /></br></br>

				<input type="submit" value="Cadastrar">

			</form>

		</fieldset>

	</h3>
</body>

</html>