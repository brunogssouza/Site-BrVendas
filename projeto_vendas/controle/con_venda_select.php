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
		<h1>Informações de Vendas da BrVENDAS</h1>
	</div>

	<h3 id="banner">
		<fieldset>
			<legend>Dados</legend>


                <br><br>
                <?php
                    include("conexao.php");


                    try {

                        $total = 0.0;
                        $info_pag = $_POST['Informações_Pagamento'];
                        
                        $sql= "SELECT produto.nome_produto, produto.Valor_produto, categoria_produtos.CATEGORIA, fornecedor_produto.nome_Fornecedor, pagamento.data_venda,pagamento.data_inicial_pag,pagamento.data_final_pag,pagamento.qtd_parcelas, cliente.nome_cliente FROM produto 
                        INNER JOIN categoria_produtos ON categoria_produtos.NUM_CATEGORIA = produto.num_categoria 
                        INNER JOIN venda ON venda.Informações_Produtos=produto.cod_produto 
                        INNER JOIN fornecedor_produto ON fornecedor_produto.num_Fornecedor= produto.num_fornecedor 
                        INNER JOIN pagamento ON venda.Informações_Pagamento=pagamento.num_pagamento
                        INNER JOIN cliente ON pagamento.cliente = cliente.num_cliente
                        WHERE Informações_Pagamento	 = '$info_pag'";

                        foreach ($conn->query($sql) as $row) {
                            print "RECIBO DA COMPRA NUMERO '$info_pag'";
                            print "<br><br>";
                            print 'NOME DO CLIENTE'."<br><br>";
                            print $row ['nome_cliente'].    "<br><br>"; 
                            
                            print 'INFORMAÇÕES DO PRODUTO'."<br><br>";
                            print $row ['nome_produto']. "<br>"; 
                            print $row ['CATEGORIA']. "<br>";
                            print $row ['nome_Fornecedor']. "<br>";
                            print $row ['Valor_produto']. "<br><br>";


                            print 'INFORMAÇÕES DO PAGAMENTO '."<br><br>";
                            print $row ['data_venda']. "<br>" ;
                            print $row ['data_inicial_pag']. "<br>";
                            print $row ['data_final_pag']. "<br>";
                            print $row ['qtd_parcelas']. "<br><br>";
                        }
                    } catch (PDOException $e_){
                        echo "ERROR". $e_-> getMessage();
                    }

                        print "OBRIGADO POR COMPRAR EM BrVENDAS!";
                        print "<br>";
                    ?>

			</form>
		</fieldset>

        <fieldset>
            <form>

                    <?php
                include("conexao.php");


                try {
                    
                    $total = 0.0;
                    $info_pag = $_POST['Informações_Pagamento'];
                                            
                     $sql= "SELECT produto.nome_produto, produto.Valor_produto, categoria_produtos.CATEGORIA, fornecedor_produto.nome_Fornecedor, pagamento.data_venda,pagamento.data_inicial_pag,pagamento.data_final_pag,pagamento.qtd_parcelas, cliente.nome_cliente FROM produto 
                    INNER JOIN categoria_produtos ON categoria_produtos.NUM_CATEGORIA = produto.num_categoria 
                    INNER JOIN venda ON venda.Informações_Produtos=produto.cod_produto 
                    INNER JOIN fornecedor_produto ON fornecedor_produto.num_Fornecedor= produto.num_fornecedor 
                    INNER JOIN pagamento ON venda.Informações_Pagamento=pagamento.num_pagamento
                    INNER JOIN cliente ON pagamento.cliente = cliente.num_cliente
                    WHERE Informações_Pagamento	 = '$info_pag'";
                    
                    print "<table><tr><th>Venda</th><th>Valor R$</th></tr>";
                    foreach ($conn->query($sql) as $row) {
                    print "<tr><td>".$row['nome_produto']."</td><td>".$row['Valor_produto']."</td></tr>";
                    $total += $row['Valor_produto'];
                    }
                    print "<h1>Recibo da Venda</h1>Número do recibo: <u>".$row."['$info_pag']"."</u> Cliente: <u>".$row['nome_cliente']."</u> Total R$: <u><b>".$total."</b></u><h3>Produtos:</h3></table><br><a href='../index.html'>Voltar para pagina inicial</a>";
                    }
                    catch(PDOException $ex){
                    echo 'Erro '. $ex->getMessage();
                    }
                    ?>
                </form>
        </fieldset>

</body>

</html>










