-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Fev-2022 às 19:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bruno_comercio_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_produtos`
--

CREATE TABLE `categoria_produtos` (
  `NUM_CATEGORIA` int(11) NOT NULL,
  `CATEGORIA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria_produtos`
--

INSERT INTO `categoria_produtos` (`NUM_CATEGORIA`, `CATEGORIA`) VALUES
(1, 'BELEZA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `num_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(15) NOT NULL,
  `CPF` int(14) NOT NULL,
  `Filial` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `num_filial` int(11) NOT NULL,
  `nome_bairro` varchar(15) NOT NULL,
  `CNPJ` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor_produto`
--

CREATE TABLE `fornecedor_produto` (
  `num_Fornecedor` int(11) NOT NULL,
  `nome_Fornecedor` varchar(25) DEFAULT NULL,
  `nome_representante` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedor_produto`
--

INSERT INTO `fornecedor_produto` (`num_Fornecedor`, `nome_Fornecedor`, `nome_representante`) VALUES
(1, 'Johnson & Johnson', 'Rebeca Johnson');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `num_pagamento` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `data_inicial_pag` date NOT NULL,
  `data_final_pag` date DEFAULT NULL,
  `qtd_parcelas` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Cod_produto` int(11) NOT NULL,
  `nome_produto` varchar(30) DEFAULT NULL,
  `Valor_produto` decimal(10,0) DEFAULT NULL,
  `num_categoria` int(11) DEFAULT NULL,
  `num_fornecedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`Cod_produto`, `nome_produto`, `Valor_produto`, `num_categoria`, `num_fornecedor`) VALUES
(1, 'Lenço umidecido', '10', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `num_venda` int(11) NOT NULL,
  `Informações_Pagamento` int(11) NOT NULL,
  `Informações_Produtos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria_produtos`
--
ALTER TABLE `categoria_produtos`
  ADD PRIMARY KEY (`NUM_CATEGORIA`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`num_cliente`),
  ADD KEY `Filial` (`Filial`);

--
-- Índices para tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`num_filial`);

--
-- Índices para tabela `fornecedor_produto`
--
ALTER TABLE `fornecedor_produto`
  ADD PRIMARY KEY (`num_Fornecedor`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`num_pagamento`),
  ADD KEY `cliente` (`cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Cod_produto`),
  ADD KEY `num_categoria` (`num_categoria`),
  ADD KEY `num_fornecedor` (`num_fornecedor`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`num_venda`),
  ADD KEY `Informações_Pagamento` (`Informações_Pagamento`),
  ADD KEY `Informações_Produtos` (`Informações_Produtos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria_produtos`
--
ALTER TABLE `categoria_produtos`
  MODIFY `NUM_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `num_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `num_filial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor_produto`
--
ALTER TABLE `fornecedor_produto`
  MODIFY `num_Fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `num_pagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `Cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `num_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Filial`) REFERENCES `filiais` (`num_filial`);

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`num_cliente`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`num_categoria`) REFERENCES `categoria_produtos` (`NUM_CATEGORIA`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`num_fornecedor`) REFERENCES `fornecedor_produto` (`num_Fornecedor`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`Informações_Pagamento`) REFERENCES `pagamento` (`num_pagamento`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`Informações_Produtos`) REFERENCES `produto` (`Cod_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
