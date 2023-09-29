-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Set-2023 às 11:37
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livrostore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorio`
--

DROP TABLE IF EXISTS `acessorio`;
CREATE TABLE IF NOT EXISTS `acessorio` (
  `id_acessorio` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_acessorio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `id_livro` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sinopse` text COLLATE utf8mb4_general_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `sinopse`, `valor`, `genero`, `imagem`) VALUES
(1, 'Vilão', 'Victoria Schwab', 'Victor and Eli started out as college roommates―brilliant, arrogant, lonely boys who recognized the same sharpness and ambition in each other. In their senior year, a shared research interest in adrenaline, near-death experiences, and seemingly supernatural events reveals an intriguing possibility: that under the right conditions, someone could develop extraordinary abilities. But when their thesis moves from the academic to the experimental, things go horribly wrong.\r\n\r\nTen years later, Victor breaks out of prison, determined to catch up to his old friend (now foe), aided by a young girl whose reserved nature obscures a stunning ability. Meanwhile, Eli is on a mission to eradicate every other super-powered person that he can find―aside from his sidekick, an enigmatic woman with an unbreakable will. Armed with terrible power on both sides, driven by the memory of betrayal and loss, the archnemeses have set a course for revenge―but who will be left alive at the end?\r\n\r\nIn Vicious, V. E. Schwab brings to life a gritty comic-book-style world in vivid prose: a world where gaining superpowers does not automatically lead to heroism, and a time when allegiances are called into question.\r\n\r\nA dynamic and original twist on what it means to be a hero and a villain. A killer from page one…highly recommended! ―Jonathan Maberry, New York Times bestselling author of Marvel Universe vs The Avengers and Patient Zero', '29.30', 'Suspense', 'capa_book/6516aa2a0f3b9.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
