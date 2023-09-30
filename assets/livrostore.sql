-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2023 às 14:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

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

CREATE TABLE `acessorio` (
  `id_acessorio` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessorio`
--

INSERT INTO `acessorio` (`id_acessorio`, `nome`, `descricao`, `valor`, `imagem`) VALUES
(1, 'Organizador de Livros', 'Com 03 divisões\r\nBoa durabilidade\r\nAlta Resistência a quedas\r\nMultiuso', '35.00', 'acessorios/65175a6fac532.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `sinopse` text NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `sinopse`, `valor`, `genero`, `imagem`) VALUES
(1, 'Vilão', 'Victoria Schwab', 'Victor and Eli started out as college roommates―brilliant, arrogant, lonely boys who recognized the same sharpness and ambition in each other. In their senior year, a shared research interest in adrenaline, near-death experiences, and seemingly supernatural events reveals an intriguing possibility: that under the right conditions, someone could develop extraordinary abilities. But when their thesis moves from the academic to the experimental, things go horribly wrong.\r\n\r\nTen years later, Victor breaks out of prison, determined to catch up to his old friend (now foe), aided by a young girl whose reserved nature obscures a stunning ability. Meanwhile, Eli is on a mission to eradicate every other super-powered person that he can find―aside from his sidekick, an enigmatic woman with an unbreakable will. Armed with terrible power on both sides, driven by the memory of betrayal and loss, the archnemeses have set a course for revenge―but who will be left alive at the end?\r\n\r\nIn Vicious, V. E. Schwab brings to life a gritty comic-book-style world in vivid prose: a world where gaining superpowers does not automatically lead to heroism, and a time when allegiances are called into question.\r\n\r\nA dynamic and original twist on what it means to be a hero and a villain. A killer from page one…highly recommended! ―Jonathan Maberry, New York Times bestselling author of Marvel Universe vs The Avengers and Patient Zero', '29.30', 'Suspense', 'capa_book/6516aa2a0f3b9.jpg'),
(2, 'O Morro dos ventos uivantes', 'Emily Brontë', 'Um dos clássicos mais importantes e conhecidos do século XIX, este é o único romance publicado da autora Emily Brontë e já foi adaptado diversas vezes para o cinema. Em O Morro dos Ventos Uivantes as personagens são apresentadas na sua forma mais humana: invejosas, rancorosas, imperfeitas. Longe de trazer heróis, o livro é um clássico que aborda sobre a transformação do caráter humano. A obra conta a história da adoção de Heathcliff, órfão, abandonado e desemparado, pelo sr. Earnshaw. O ato de bondade do patriarca da família dá início a um ciclo de amor, ódio, rejeição e vingança', '48.00', 'Romance', 'capa_book/6517508eee674.jpg'),
(3, 'A última casa da rua Needless', 'Catriona Ward', 'Esta é a história de Ted Bannerman, um homem com problemas de memória, que vive com a sua filha adolescente Lauren, e sua gata Olívia, em uma casa comum, no final de uma rua sem saída. Ted costuma beber sozinho em frente à TV e já foi interrogado pela polícia quando uma menina desapareceu por ali, há onze anos. Quando Didi, a irmã da menina desaparecida resolve se mudar para a casa ao lado, o que está enterrado há bastante tempo pode voltar para assombrá-los. Um thriller de suspense aterrorizante que envolve um assassinato, uma criança sequestrada... e uma terrível vingança.', '44.00', 'terror', 'capa_book/65175448529dc.jpg'),
(4, 'Um lugar muito distante: Um conto passado na pequena ilha da Escócia', 'Jennyt Colgan', 'Saif precisa de um emprego e Mure precisa de um médico. Assim, com as lembranças de sua vida partida e a esperança de reencontrar a família perdida, ele chega à ilhazinha. Quando ele e Lorna se conhecem, as diferenças entre seus mundos formam um muro aparentemente intransponível.', '18.00', 'Romance', 'capa_book/651758ff89bd2.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessorio`
--
ALTER TABLE `acessorio`
  ADD PRIMARY KEY (`id_acessorio`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessorio`
--
ALTER TABLE `acessorio`
  MODIFY `id_acessorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
