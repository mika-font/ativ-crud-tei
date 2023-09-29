-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2023 às 01:10
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `acessorio`
--

INSERT INTO `acessorio` (`id_acessorio`, `nome`, `descricao`, `valor`, `imagem`) VALUES
(4, 'Ecobag de livros', 'Uma ecobag maravilhosa com tecido a prova de água.', '30.25', 'acessorios/65174fd8255a3.webp'),
(6, 'Kindle', 'O Kindle mais leve e compacto, agora com tela de 300 ppi de alta resolução para textos e imagens nítidos.\r\nLeia confortavelmente em uma tela antirreflexo como se fosse em papel. Com a iluminação embutida ajustável e o modo noturno, ler fica mais fácil durante o dia e a noite.\r\nSe perca na história. Dê uma pausa em mensagens, e-mails e redes sociais com um dispositivo feito para leitura sem distrações.\r\nAgora com bateria com duração estendida – Uma única carga por USB-C dura até 6 semanas.\r\nAgora com 16 GB para você armazenar milhares de livros – o dobro de capacidade de armazenamento da geração anterior.\r\nDescubra novas histórias – Com o Kindle Unlimited, obtenha acesso ilimitado a milhões de títulos.\r\nDesenvolvido pensando na sustentabilidade. Este Kindle foi desenvolvido usando de 30% a 75% de plásticos reciclados e 90% de magnésio reciclado.', '400.99', 'acessorios/651755be81c9d.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `sinopse`, `valor`, `genero`, `imagem`) VALUES
(1, 'Vilão', 'Victoria Schwab', 'Victor and Eli started out as college roommates―brilliant, arrogant, lonely boys who recognized the same sharpness and ambition in each other. In their senior year, a shared research interest in adrenaline, near-death experiences, and seemingly supernatural events reveals an intriguing possibility: that under the right conditions, someone could develop extraordinary abilities. But when their thesis moves from the academic to the experimental, things go horribly wrong.\r\n\r\nTen years later, Victor breaks out of prison, determined to catch up to his old friend (now foe), aided by a young girl whose reserved nature obscures a stunning ability. Meanwhile, Eli is on a mission to eradicate every other super-powered person that he can find―aside from his sidekick, an enigmatic woman with an unbreakable will. Armed with terrible power on both sides, driven by the memory of betrayal and loss, the archnemeses have set a course for revenge―but who will be left alive at the end?\r\n\r\nIn Vicious, V. E. Schwab brings to life a gritty comic-book-style world in vivid prose: a world where gaining superpowers does not automatically lead to heroism, and a time when allegiances are called into question.\r\n\r\nA dynamic and original twist on what it means to be a hero and a villain. A killer from page one…highly recommended! ―Jonathan Maberry, New York Times bestselling author of Marvel Universe vs The Avengers and Patient Zero', '29.30', 'Suspense', 'capa_book/6516aa2a0f3b9.jpg'),
(2, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 'Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais. A fábula, recheada de fantasmas, paredes que falam, caldeirões, sapos, unicórnios, dragões e gigantes, não é, entretanto, apenas um passatempo.', '26.99', 'Fantasia', 'capa_book/651750ffe0c56.jpg');

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
  MODIFY `id_acessorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
