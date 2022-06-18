-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jun-2022 às 11:54
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `floricultura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `adm_id` int(6) NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(45) NOT NULL,
  `adm_foto` varchar(45) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_has_pro`
--

DROP TABLE IF EXISTS `tb_categoria_has_pro`;
CREATE TABLE IF NOT EXISTS `tb_categoria_has_pro` (
  `cat_id` int(6) NOT NULL AUTO_INCREMENT,
  `cat_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria_has_pro`
--

INSERT INTO `tb_categoria_has_pro` (`cat_id`, `cat_tipo`) VALUES
(1, 'rosas'),
(2, 'orquideas'),
(3, 'margaridas'),
(4, 'violetas'),
(5, 'crisântemos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cli_id` int(6) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(45) NOT NULL,
  `cli_sobrenome` varchar(45) NOT NULL,
  `cli_cpf` varchar(15) NOT NULL,
  `cli_foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `cli_cpf_UNIQUE` (`cli_cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_foto`) VALUES
(1, 'tiago', 'holanda', '123456', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_has_adm`
--

DROP TABLE IF EXISTS `tb_email_has_adm`;
CREATE TABLE IF NOT EXISTS `tb_email_has_adm` (
  `emAdm_id` int(6) NOT NULL AUTO_INCREMENT,
  `emAdm_email` varchar(45) NOT NULL,
  `emAdm_senha` varchar(45) NOT NULL,
  `tb_admin_adm_id` int(6) NOT NULL,
  PRIMARY KEY (`emAdm_id`),
  UNIQUE KEY `emAdm_email` (`emAdm_email`),
  KEY `tb_admin_adm_id` (`tb_admin_adm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_email_has_cli`
--

DROP TABLE IF EXISTS `tb_email_has_cli`;
CREATE TABLE IF NOT EXISTS `tb_email_has_cli` (
  `emCli_id` int(6) NOT NULL AUTO_INCREMENT,
  `emCli_email` varchar(45) NOT NULL,
  `emCli_senha` varchar(45) NOT NULL,
  `tb_cliente_cli_id` int(6) NOT NULL,
  PRIMARY KEY (`emCli_id`),
  UNIQUE KEY `emCli_email` (`emCli_email`),
  KEY `tb_cliente_cli_id` (`tb_cliente_cli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_email_has_cli`
--

INSERT INTO `tb_email_has_cli` (`emCli_id`, `emCli_email`, `emCli_senha`, `tb_cliente_cli_id`) VALUES
(1, 'tiago@gmail.com', '12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `end_id` int(6) NOT NULL AUTO_INCREMENT,
  `end_cep` varchar(10) NOT NULL,
  `end_endereco` varchar(45) NOT NULL,
  `end_numero` int(5) NOT NULL,
  `end_bairro` varchar(45) NOT NULL,
  `end_complemento` varchar(45) DEFAULT NULL,
  `end_referencia` varchar(45) DEFAULT NULL,
  `end_cidade` varchar(45) NOT NULL,
  `end_uf` varchar(2) NOT NULL,
  `tb_cliente_cli_id` int(6) NOT NULL,
  PRIMARY KEY (`end_id`),
  KEY `tb_cliente_cli_id` (`tb_cliente_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_foto_has_cli`
--

DROP TABLE IF EXISTS `tb_foto_has_cli`;
CREATE TABLE IF NOT EXISTS `tb_foto_has_cli` (
  `ft_id` int(6) NOT NULL AUTO_INCREMENT,
  `ft_foto` varchar(45) NOT NULL,
  `tb_cliente_cli_id` int(6) NOT NULL,
  PRIMARY KEY (`ft_id`),
  KEY `tb_cliente_cli_id` (`tb_cliente_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_foto_has_pro`
--

DROP TABLE IF EXISTS `tb_foto_has_pro`;
CREATE TABLE IF NOT EXISTS `tb_foto_has_pro` (
  `ft_id` int(6) NOT NULL AUTO_INCREMENT,
  `ft_foto` varchar(45) NOT NULL,
  `tb_produto_pro_id` int(6) NOT NULL,
  PRIMARY KEY (`ft_id`),
  KEY `tb_produto_pro_id` (`tb_produto_pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itens`
--

DROP TABLE IF EXISTS `tb_itens`;
CREATE TABLE IF NOT EXISTS `tb_itens` (
  `it_id` int(6) NOT NULL AUTO_INCREMENT,
  `tb_venda_ven_id` int(6) NOT NULL,
  `tb_produto_pro_id` int(6) NOT NULL,
  PRIMARY KEY (`it_id`),
  KEY `tb_venda_ven_id` (`tb_venda_ven_id`),
  KEY `tb_produto_pro_id` (`tb_produto_pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

DROP TABLE IF EXISTS `tb_produto`;
CREATE TABLE IF NOT EXISTS `tb_produto` (
  `pro_id` int(6) NOT NULL AUTO_INCREMENT,
  `pro_preco` double(4,2) NOT NULL,
  `pro_nome` varchar(45) NOT NULL,
  `pro_quantidade` int(5) NOT NULL,
  `tb_categoria_has_pro_cat_id` int(6) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `tb_categoria_has_pro_cat_id` (`tb_categoria_has_pro_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone`
--

DROP TABLE IF EXISTS `tb_telefone`;
CREATE TABLE IF NOT EXISTS `tb_telefone` (
  `tel_id` int(6) NOT NULL AUTO_INCREMENT,
  `tel_telefone` varchar(20) NOT NULL,
  `tb_cliente_cli_id` int(6) NOT NULL,
  PRIMARY KEY (`tel_id`),
  UNIQUE KEY `tel_telefone_UNIQUE` (`tel_telefone`),
  KEY `tb_cliente_cli_id` (`tb_cliente_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `ven_id` int(6) NOT NULL AUTO_INCREMENT,
  `ven_data_has_venda` varchar(45) NOT NULL,
  `tb_cliente_cli_id` int(6) NOT NULL,
  PRIMARY KEY (`ven_id`),
  KEY `tb_cliente_cli_id` (`tb_cliente_cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
