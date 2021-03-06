-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.19 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para lojaaluguel
CREATE DATABASE IF NOT EXISTS `lojaaluguel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lojaaluguel`;

-- Copiando estrutura para tabela lojaaluguel.alugueis
CREATE TABLE IF NOT EXISTS `alugueis` (
  `idAlugueis` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `valor` float NOT NULL,
  `desconto` float DEFAULT NULL,
  `valorFinal` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `Funcionarios_idFuncionario` int(11) NOT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Trajes_idTrajes` int(11) NOT NULL,
  PRIMARY KEY (`idAlugueis`),
  KEY `fk_Alugueis_Funcionarios1_idx` (`Funcionarios_idFuncionario`),
  KEY `fk_Alugueis_Clientes1_idx` (`Clientes_idClientes`),
  KEY `fk_Alugueis_Trajes1_idx` (`Trajes_idTrajes`),
  CONSTRAINT `fk_Alugueis_Clientes1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alugueis_Funcionarios1` FOREIGN KEY (`Funcionarios_idFuncionario`) REFERENCES `funcionarios` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alugueis_Trajes1` FOREIGN KEY (`Trajes_idTrajes`) REFERENCES `trajes` (`idTrajes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.alugueis: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `alugueis` DISABLE KEYS */;
INSERT INTO `alugueis` (`idAlugueis`, `descricao`, `valor`, `desconto`, `valorFinal`, `data`, `Funcionarios_idFuncionario`, `Clientes_idClientes`, `Trajes_idTrajes`) VALUES
	(2, 'Subir 4cm da barra', 180, 20, '160', '2020-04-06', 1, 1, 678);
/*!40000 ALTER TABLE `alugueis` ENABLE KEYS */;

-- Copiando estrutura para tabela lojaaluguel.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Funcionarios_idFuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idClientes`),
  KEY `fk_Clientes_Funcionarios_idx` (`Funcionarios_idFuncionario`),
  CONSTRAINT `fk_Clientes_Funcionarios` FOREIGN KEY (`Funcionarios_idFuncionario`) REFERENCES `funcionarios` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.clientes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`idClientes`, `nome`, `endereco`, `telefone`, `dataNascimento`, `cpf`, `cep`, `email`, `Funcionarios_idFuncionario`) VALUES
	(1, 'Bruna', 'Americana', '999007654', '2020-04-06', '67890567890', '67777', 'bruna@gmail.com', 1);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela lojaaluguel.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `idFornecedores` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFornecedores`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.fornecedores: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`idFornecedores`, `nome`, `endereco`, `telefone`, `cnpj`, `email`, `cep`) VALUES
	(1, 'Sonia Ternos', 'Machado', '988765678', NULL, 'sonia@gmail.com', '37750-000');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela lojaaluguel.funcao
CREATE TABLE IF NOT EXISTS `funcao` (
  `idFuncao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(10) NOT NULL,
  PRIMARY KEY (`idFuncao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.funcao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `funcao` DISABLE KEYS */;
INSERT INTO `funcao` (`idFuncao`, `nome`) VALUES
	(1, 'Atendente'),
	(2, 'Diretor');
/*!40000 ALTER TABLE `funcao` ENABLE KEYS */;

-- Copiando estrutura para tabela lojaaluguel.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `dataNascimento` date NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `dataAdmissao` date NOT NULL,
  `dataDemissao` date DEFAULT NULL,
  `salario` float NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `Funcao_idFuncao` int(11) NOT NULL,
  PRIMARY KEY (`idFuncionario`),
  KEY `fk_Funcionarios_Funcao1_idx` (`Funcao_idFuncao`),
  CONSTRAINT `fk_Funcionarios_Funcao1` FOREIGN KEY (`Funcao_idFuncao`) REFERENCES `funcao` (`idFuncao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.funcionarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`idFuncionario`, `nome`, `telefone`, `email`, `endereco`, `dataNascimento`, `cpf`, `rg`, `dataAdmissao`, `dataDemissao`, `salario`, `login`, `senha`, `Funcao_idFuncao`) VALUES
	(1, 'Natalia', '988765432', 'natalia@gmail.com', 'Rua Beija Flor, 3 Bairro Sol', '2020-04-06', '56789054323', 'mg - 89765432', '2020-04-06', '2020-04-06', 789, 'natalia', '123', 1);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- Copiando estrutura para tabela lojaaluguel.trajes
CREATE TABLE IF NOT EXISTS `trajes` (
  `idTrajes` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `status` enum('disponivel','indisponivel','alugado','lavando') NOT NULL,
  `Funcionarios_idFuncionario` int(11) NOT NULL,
  `Fornecedores_idFornecedores` int(11) NOT NULL,
  PRIMARY KEY (`idTrajes`),
  KEY `fk_Trajes_Funcionarios1_idx` (`Funcionarios_idFuncionario`),
  KEY `fk_Trajes_Fornecedores1_idx` (`Fornecedores_idFornecedores`),
  CONSTRAINT `fk_Trajes_Fornecedores1` FOREIGN KEY (`Fornecedores_idFornecedores`) REFERENCES `fornecedores` (`idFornecedores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trajes_Funcionarios1` FOREIGN KEY (`Funcionarios_idFuncionario`) REFERENCES `funcionarios` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela lojaaluguel.trajes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `trajes` DISABLE KEYS */;
INSERT INTO `trajes` (`idTrajes`, `nome`, `descricao`, `status`, `Funcionarios_idFuncionario`, `Fornecedores_idFornecedores`) VALUES
	(678, 'Vestido de pedraria vermelho', 'Sereia com fenda', 'alugado', 1, 1);
/*!40000 ALTER TABLE `trajes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
