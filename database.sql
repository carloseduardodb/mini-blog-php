-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Mar-2021 às 20:01
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `serie_criando_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_postagem` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_postagem`, `nome`, `mensagem`) VALUES
(1, 100, 'Carlos', 'Olá Mundo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id_postagem` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `titulo`, `conteudo`) VALUES
(1, 'Hoyt Knapp', 'facilisis facilisis, magna tellus faucibus leo,'),
(2, 'Rebekah Savage', 'risus. Nulla eget metus eu erat semper rutrum.'),
(3, 'Tyler Burt', 'faucibus orci luctus'),
(4, 'Quincy Reilly', 'nunc ac'),
(5, 'Alma Avila', 'arcu. Vestibulum ante ipsum primis in faucibus'),
(6, 'Zorita Powell', 'in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus'),
(7, 'Abdul Scott', 'eget metus eu'),
(8, 'Zephania Horne', 'montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod'),
(9, 'Courtney Turner', 'lorem ac risus. Morbi metus. Vivamus euismod'),
(10, 'Odysseus Pittman', 'nibh. Quisque nonummy ipsum non'),
(11, 'Acton Carrillo', 'a tortor. Nunc'),
(12, 'Nolan Stone', 'vulputate, posuere vulputate, lacus. Cras interdum.'),
(13, 'Alec Fleming', 'felis orci, adipiscing non,'),
(14, 'Connor Cortez', 'nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse'),
(15, 'Abbot Cortez', 'Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui,'),
(17, 'Lavinia Mullen', 'Aliquam nec enim. Nunc ut erat.'),
(18, 'Keely Avery', 'Maecenas libero est, congue'),
(19, 'Richard Herrera', 'Duis gravida. Praesent eu nulla at sem'),
(20, 'Zane Gill', 'mollis'),
(21, 'Brittany Aguilar', 'Nam nulla magna, malesuada'),
(22, 'Xandra Alvarado', 'ipsum ac mi'),
(23, 'Dominic Boyle', 'risus. Donec'),
(24, 'Hope Barnes', 'dolor, tempus non, lacinia at, iaculis quis,'),
(25, 'Rama Banks', 'Suspendisse'),
(26, 'Herrod Howe', 'ac mattis semper,'),
(27, 'Kristen Rocha', 'natoque penatibus et'),
(28, 'Leonard Parker', 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas.'),
(29, 'Quamar Higgins', 'hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer,'),
(30, 'Fulton Dalton', 'purus'),
(31, 'Riley Frye', 'mi pede, nonummy ut, molestie in, tempus eu,'),
(32, 'Jada Rosario', 'Suspendisse aliquet molestie tellus.'),
(33, 'Reed Hughes', 'elit erat vitae'),
(34, 'Gay Berry', 'cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut,'),
(35, 'Fletcher Mccormick', 'non'),
(36, 'Quinn Lang', 'arcu. Vivamus sit'),
(37, 'Lois Miller', 'euismod mauris eu elit. Nulla facilisi. Sed'),
(38, 'Brent Graves', 'ac urna.'),
(39, 'Roth Joyce', 'pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod'),
(40, 'Stuart Knowles', 'placerat eget, venenatis a,'),
(41, 'Whoopi David', 'eget lacus. Mauris non'),
(43, 'Robin Arnold', 'Vivamus non lorem vitae odio sagittis semper. Nam'),
(44, 'Velma Black', 'pretium aliquet, metus urna convallis erat,'),
(45, 'Reed Francis', 'nonummy ipsum non arcu. Vivamus sit amet risus. Donec'),
(46, 'Gannon Cohen', 'In at pede. Cras'),
(47, 'Maryam Sweet', 'dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit.'),
(48, 'Jermaine Larson', 'Etiam laoreet, libero'),
(49, 'Anjolie Sweeney', 'nec mauris blandit mattis.'),
(50, 'Abel Maddox', 'neque. In'),
(51, 'Brian Baldwin', 'eu tellus. Phasellus elit pede,'),
(52, 'September Maxwell', 'ut, molestie in, tempus eu, ligula. Aenean'),
(53, 'Nayda Hahn', 'eleifend, nunc risus varius'),
(54, 'Winifred Mcmillan', 'non, bibendum sed,'),
(55, 'Bradley Bolton', 'euismod et, commodo at, libero.'),
(56, 'Vernon Bridges', 'eget lacus.'),
(57, 'Sean Love', 'sit'),
(58, 'Chester Goff', 'non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa'),
(59, 'Bryar Schwartz', 'Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem.'),
(61, 'Vaughan Bartlett', 'pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.'),
(62, 'Hasad Richard', 'sociis natoque penatibus et magnis'),
(63, 'Camden Christensen', 'ligula. Aenean euismod mauris eu elit. Nulla facilisi.'),
(64, 'Allistair Jefferson', 'ipsum non arcu. Vivamus');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices para tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id_postagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_postagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
