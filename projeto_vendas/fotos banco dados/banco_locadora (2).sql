CREATE DATABASE IF NOT EXISTS 'locadora_jm';
USE 'locadora_jm';

CREATE TABLE bairro(
    cod_bairro int NOT NULL AUTO_INCREMENT,
    bairro varchar(15) NOT NULL,
    PRIMARY KEY(cod_bairro)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE genero(
    cod_genero int NOT NULL AUTO_INCREMENT,
    genero varchar(15) NOT NULL,
    PRIMARY KEY(cod_genero)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE produtora(
    cod_produtora int NOT NULL AUTO_INCREMENT,
    produtora varchar(15) NOT NULL,
    PRIMARY KEY(cod_produtora)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE filme(
    cod_filme int NOT NULL AUTO_INCREMENT,
    titulo varchar(30) NOT NULL,
    genero_filme int NOT NULL,
    produtora_filme int NOT NULL,
    PRIMARY KEY(cod_filme),
    FOREIGN KEY(genero_filme) REFERENCES genero(cod_genero),
    FOREIGN KEY(produtora_filme) REFERENCES produtora(cod_produtora)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE cliente(
    cod_cliente int NOT NULL AUTO_INCREMENT,
    cliente varchar(35) NOT NULL,
    cpf varchar(14) NOT NULL,
    bairro_cliente int NOT NULL,
    PRIMARY KEY(cod_cliente),
    FOREIGN KEY(bairro_cliente) REFERENCES bairro(cod_bairro)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE locacao(
    cod_locacao int NOT NULL AUTO_INCREMENT,
    cliente_locacao int NOT NULL,
    data_locacao date NOT NULL,
    data_devolucao date NOT NULL,
    PRIMARY KEY(cod_locacao),
    FOREIGN KEY(cliente_locacao) REFERENCES cliente(cod_cliente)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

CREATE TABLE itens_locacao(
    filme_locado int NOT NULL,
    locacao int NOT NULL,
    valor float NOT NULL,
    FOREIGN KEY(filme_locado) REFERENCES filme(cod_filme),
    FOREIGN KEY(locacao) REFERENCES locacao(cod_locacao)
) ENGINE=innoDB DEFAULT CHARSET=utf8;

--Seleciona todos os registros da tabela uf
SELECT * FROM uf;

--Seleciona o registros de acordo com o cod_uf solicitado
SELECT * FROM uf WHERE cod_uf=2;

--seleciona registo 2 ou 15, qual existir, da tabela uf
SELECT * FROM uf WHERE cod_uf=2 or cod_uf=15;

/*seleciona todos os registos da tabela uf,
organizados por ordem decrescente de area_km2*/
SELECT * FROM uf ORDER BY area_km2 DESC;

/*seleciona as cidades com menos de 300.000 habitantes
na estado de São Paulo;*/
SELECT * FROM cidades WHERE uf='SP' AND populacao < 300000 ORDER BY populacao DESC;

/*seleciona as 3 cidades mais populosas do estado SP*/
SELECT * FROM cidades WHERE uf='SP' ORDER BY populacao DESC LIMIT 3;

/*seleciona tudo na tabela estado, exceto os registros
com cod_uf (11,12,15)*/
SELECT * FROM uf WHERE cod_uf NOT IN(11,12,15);

--lista todos estados que começam com a letra a
SELECT * FROM uf WHERE estado LIKE 'a%';


/*seleciona alguns campos nas tabelas estado e cidade,
com os mesmos cod_uf*/
SELECT u.estado, c.nome_mun, c.populacao FROM uf u INNER JOIN cidades c ON u.cod_uf = c.cod_uf LIMIT 10;

--cadastra o bairro Asa sul na tabela bairro
INSERT INTO bairro(bairro) VALUES ('Asa Sul');

--cadastra cliente Marcelo no bairro Asa sul
INSERT INTO cliente(cliente, cpf, bairro_cliente) VALUES ('Marcelo', '559.586.991-72', 1);

--seleciona nomes do cliente e bairro
SELECT c.cliente, b.bairro FROM cliente c INNER JOIN bairro b ON b.cod_bairro = c.bairro_cliente;

--seleciona filme, genero produtora, da tabela filme junto com a tabela genero, onde as chaves primárias e secundárias aão iguais
SELECT f.filme, g.genero, p.produtora FROM filme f INNER JOIN genero g ON f.cod_filme = g.cod_genero INNER JOIN f.cod_filme=p.cod_produtora;

--altera o campo produtora na tabela cliente, para o tipo inteiro, não permitindo valor nulo
ALTER TABLE cliente MODIFY produtora INT NOT NULL;

--apaga o campo produtora da tabela cliente
ALTER TABLE cliente DROP produtora;

--adiciona o campo nome_cliente, com o tipo varchar, aceitando 35 caracteres, não permitindo nulo
ALTER TABLE cliente ADD nome_cliente varchar (35) NOT NULL;

--adiciona o campo bairro cliente na tabela cliente, como chave estrangeira, associado a chave primária da tabela bairro
ALTER TABLE cliente ADD FOREIGN KEY (bairro_cliente) REFERENCES bairro(cod_bairro);

