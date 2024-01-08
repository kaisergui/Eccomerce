-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/07/2023 às 05:55
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eccomerce`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id_avaliacao` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `classificacao` int(11) DEFAULT NULL,
  `comentario_avaliacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho_compras`
--

CREATE TABLE `carrinho_compras` (
  `id_carrinho` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `total_carrinho` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho_compras`
--

INSERT INTO `carrinho_compras` (`id_carrinho`, `id_usuario`, `total_carrinho`) VALUES
(1, 2, 7599.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_carrinho`
--

CREATE TABLE `itens_carrinho` (
  `id_item` int(11) NOT NULL,
  `id_carrinho` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade_produto` int(11) DEFAULT NULL,
  `preco_unitario_produto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `status_pedido` varchar(255) DEFAULT NULL,
  `total_pedido` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `id_produto`, `status_pedido`, `total_pedido`) VALUES
(1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_usuario`
--

CREATE TABLE `pedidos_usuario` (
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos_usuario`
--

INSERT INTO `pedidos_usuario` (`id_produto`, `id_usuario`) VALUES
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(6, 2),
(6, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(4, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(4, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao_produto` text DEFAULT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `categoria_produto` varchar(255) DEFAULT NULL,
  `marca_produto` varchar(255) DEFAULT NULL,
  `imagem_produto` varchar(255) DEFAULT NULL,
  `estoque_disponivel` int(11) DEFAULT NULL,
  `avaliacoes_comentarios` text DEFAULT NULL,
  `url_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `categoria_produto`, `marca_produto`, `imagem_produto`, `estoque_disponivel`, `avaliacoes_comentarios`, `url_imagem`) VALUES
(1, 'Iphone 14', 'iPhone 14 (128 GB) - Preto', 7599.00, NULL, NULL, NULL, NULL, NULL, 'images/iphone14-preto.png'),
(2, 'Apple Macbook Air M1', 'Apple Macbook Air (13 polegadas, 2020, Chip M1, 256 GB de SSD, 8 GB de RAM) - Cinza-espacial', 6150.00, NULL, NULL, NULL, NULL, NULL, 'images/Macbook-PNG-Image-File.png'),
(3, 'Notebook Gamer Alienware m16', 'Notebook Dell Alienware m16 AW16-i1300-M10P 16\" QHD 13ª Geração Intel Core i9 16GB 1TB SSD RTX 4060 Windows 11', 17229.00, NULL, NULL, NULL, NULL, NULL, 'images/notebook-alienware-m16-hd-black-gallery-13.png'),
(4, 'Apple Watch Ultra', 'Apple Watch Ultra Titanium Case 49mm Gps ', 5589.00, NULL, NULL, NULL, NULL, NULL, 'images/pngwing.com.png'),
(5, 'Galaxy Watch4 Classic', 'Galaxy Watch4 Classic BT 46mm Preto', 971.00, NULL, NULL, NULL, NULL, NULL, 'images/galaxyw.png'),
(6, 'Samsung Galaxy S23 Ultra', 'Samsung Galaxy S23 Ultra Dual SIM 256 GB phantom black 12 GB RAM', 5799.00, NULL, NULL, NULL, NULL, NULL, 'images/s23.png'),
(7, 'iPad Pro', 'Apple iPad Pro 12,9\" (6ª geração, Wi-Fi, 2TB) - Cinza-espacial', 23849.00, NULL, NULL, NULL, NULL, NULL, 'images/ipad-pro_specs__bnuyb5pohkly_og.png'),
(8, 'Galaxy Tab S8 Ultra 5G', 'Tablet Samsung Galaxy Tab S8+ 5G, 8GB RAM, 256GB, Tela de 12.4\" Prata', 6749.00, NULL, NULL, NULL, NULL, NULL, 'images/tab.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `transacoes_pagamento`
--

CREATE TABLE `transacoes_pagamento` (
  `id_transacao` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `valor_transacao` decimal(10,2) DEFAULT NULL,
  `metodo_pagamento` varchar(255) DEFAULT NULL,
  `status_transacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `transacoes_pagamento`
--

INSERT INTO `transacoes_pagamento` (`id_transacao`, `id_usuario`, `id_pedido`, `valor_transacao`, `metodo_pagamento`, `status_transacao`) VALUES
(1, NULL, NULL, NULL, 'boleto', NULL),
(2, NULL, NULL, NULL, 'pix', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `senha_usuario` varchar(255) NOT NULL,
  `endereco_entrega` varchar(255) DEFAULT NULL,
  `informacoes_contato` varchar(255) DEFAULT NULL,
  `historico_pedidos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `endereco_entrega`, `informacoes_contato`, `historico_pedidos`) VALUES
(1, 'oi', 'guilhermekaiserds@gmail.com', 'fa', NULL, NULL, NULL),
(2, 'kaiser', 'guilhermekaiserds@gmail.com', 'opa', NULL, NULL, NULL),
(3, 'gui', '287792@mesquita.com.br', 'kk', NULL, NULL, NULL),
(4, 'asada', 'kaiserclothingg@gmail.com', '', NULL, NULL, NULL),
(5, 'asada', 'kaiserclothingg@gmail.com', '', NULL, NULL, NULL),
(6, 'eita', 'adada@AS.AS', '', NULL, NULL, NULL),
(7, 'eita', 'opa@a.b', 'asa', NULL, NULL, NULL),
(8, 'lasa', 'ei@l.s', 'asa', NULL, NULL, NULL),
(9, 'pp', 'oi@k.p', 'sada', NULL, NULL, NULL),
(10, 'carlos', 'h@j.i', 'sada', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_carrinho` (`id_carrinho`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD UNIQUE KEY `id_produto` (`id_produto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `transacoes_pagamento`
--
ALTER TABLE `transacoes_pagamento`
  ADD PRIMARY KEY (`id_transacao`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `transacoes_pagamento`
--
ALTER TABLE `transacoes_pagamento`
  MODIFY `id_transacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Restrições para tabelas `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD CONSTRAINT `carrinho_compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Restrições para tabelas `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  ADD CONSTRAINT `itens_carrinho_ibfk_1` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho_compras` (`id_carrinho`),
  ADD CONSTRAINT `itens_carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `transacoes_pagamento`
--
ALTER TABLE `transacoes_pagamento`
  ADD CONSTRAINT `transacoes_pagamento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `transacoes_pagamento_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
