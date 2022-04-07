
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clientes - Cadastro</title>
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
		<h1>Exclusão de Clientes</h1>
	</div>



		<fieldset>
			<legend>Excluir cliente</legend>

                <?php
                    include("conexao.php");
                    try {
                        
                        $del_cliente = $_POST['deletar_cliente'];
                    
                        $sql = "DELETE FROM cliente WHERE CPF = '$del_cliente'";
                        $conn->query($sql);
                    
                    }catch (PDOException $e_){
                        echo "ERROR". $e_-> getMessage();
                    }
                    echo "<br><br>";
                    echo "Cliente com o CPF de '$del_cliente' excluido com sucesso!";
                    echo "<br><br>";
                    echo "<a href='../index.html'>Retornar para pagina principal</a>";
                ?>

			</form>

		</fieldset>
	</h3>
</body>

</html>
