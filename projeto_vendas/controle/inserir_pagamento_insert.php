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



    
<div id=cabecalho>
    <h1>Venda de produtos</h1>
</div>
<h3 id="banner">
    <fieldset>
            <?php
                    include("conexao.php");
                    try {
                        $numero_cliente = $_POST['numero_cliente'];
                        $data_venda = $_POST['data_venda'];
                        $data_inicial = $_POST['data_inicial'];
                        $data_final = $_POST['data_final'];
                        $parcelas = $_POST['parcelas'];
                    
                        $sql = "INSERT INTO pagamento (cliente,data_venda,data_inicial_pag,data_final_pag,qtd_parcelas) VALUES ($numero_cliente, '$data_venda','$data_inicial','$data_final', '$parcelas')";
                        $conn->query($sql);

                        echo "<a href='form_produtos_nova_venda.php'>Vamos selecionar os produtos?</a>";
                    
                    }catch (PDOException $e_){
                        echo "ERROR". $e_-> getMessage();
                    }
                    echo "<br><br>";
                    echo "Nova compra constatada com sucesso!";

                    print "<br><br>";
                    echo "<a href='../index.html'>Deseja retornar para pagina principal?</a>";
            ?>
    </fieldset>
</body>
</html>
	
