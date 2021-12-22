-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2021 às 13:14
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `calorias` varchar(10) NOT NULL,
  `destaque` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id`, `nome`, `categoria`, `descricao`, `preco`, `calorias`, `destaque`) VALUES
(5, 'camarao', 'principal', 'Ingredientes\r\n200 g de camarão pequeno sem casca.\r\n2 colheres (sopa) de azeite de oliva.\r\n2 dentes de alho amassados.\r\n1/2 cebola grande picada.\r\n2 colheres de molho shoyu.\r\nsal a gosto.\r\npimenta-do-reino a gosto.\r\nsalsa a gosto.', '50MT', '1.2g', 1),
(6, 'cheescake-sereja', 'sobremesa', 'cheesecake-de-cereja\r\nIngredientes · 300 g Queijo Creme · 3 Folhas Gelatina Hidratadas · 1 Colher de sopa Sumo de Limão · 4 Colheres de sopa Açúcar · 1 Colher de chá Essência de Baunilha', '300MT', '1g', 1),
(7, 'churrasco-misto', 'principal', 'INGREDIENTES\r\n500 g de miolo de alcatra\r\n1 xícara (chá) de vinho tinto seco\r\n1 dente de alho\r\n½ cebola\r\n½ colher (chá) de sal\r\n¼ colher (chá) de pimenta-do-reino em grãos moída\r\n2 folhas de louro\r\n1 ramo de alecrim\r\nespetos de bambu\r\n20 cebolas pérolas\r\n½ pimentão vermelho\r\n100 g de bacon', '400MT', '4.4g', 1),
(8, 'costelinha', 'principal', '2 kg costelinhas de porco aferventadas em água quente\r\nMolho:\r\n1 colher (sopa) óleo\r\n2 colheres (sopa) cebola picada\r\n1/2 xícara (chá) açúcar mascavo\r\n1/2 xícara (chá) vinagre branco\r\n2 colheres (sopa) molho inglês\r\n2 xícaras (chá) catchup\r\n1 folha de louro\r\n1 colher (sopa) chilli em pó\r\n1/2 xícara (chá) água\r\nSal e pimenta do reino a gosto', '200MT', '1.9', 1),
(11, 'Creme de papaya', 'sobremesa', 'por definir', '15MT', '1.2g', 1),
(12, 'Flan de frutas vermelhas', 'sobremesa', 'por definir', '20MT', '1.0g', 1),
(13, 'Galinha cafreal', 'principal', 'por definir', '200MT', '2.0g', 1),
(14, 'Guisado de carrangueijo', 'principal', 'por definir', '300MT', '1.0g', 1),
(15, 'Lulas', 'principal', 'Por definir', '500MT', '1.0', 1),
(16, 'Mucapata', 'principal', 'por definir', '300MT', '0.5g', 1),
(18, 'Queijo', 'sobremesa', 'por definir', '15MT', '1.1g', 0),
(19, 'picanha assada na panela', 'principal', 'Ingredientes:\r\n- 900g de picanha com gordura;\r\n- 1 dente de alho picadinho, sem o miolo;\r\n- pimenta preta a gosto;\r\n- 2 colheres de sopa rasas de sal;\r\n- óleo;\r\n\r\n.Modo de Preparo:\r\nInicie temperando a carne com o alho, a pimenta e o sal. Espalhe os temperos por toda a carne. Deixe saborisar por uns 30 minutos.\r\nColoque um fio de óleo numa panela e coloque a carne para fritar. Cada vez que iniciar a fritura, coloque um pouquinho de água e vire a carne para fritar do outro lado.\r\nDeixe no fogo, por aproximadamente 1 hora e 30 minutos, sempre deixando fritar e colocando água.', '20MT', '2.6g', 1),
(20, 'Calabresa Acebolada', 'principal', '.INGREDIENTES:\r\n2 Linguiças Calabresa\r\n2 Cebolas\r\nÓleo\r\nSal\r\nPimenta-do-reino\r\n.MODO DE PREPARO:\r\nColoque óleo em uma frigideira, o suficiente para fritar a linguiça\r\ne leve ao fogo, corte a linguiça em rodelas finas e ponha na frigideira com óleo.\r\nCorte a cebola também em rodelas e coloque na frigideira junto com a linguiça\r\ne um pouco de pimenta-do-reino, mexa tudo junto, coloque sal a gosto.', '200MT', '2.8g', 0),
(21, 'ACÉM ASSADO NA PANELA', 'principal', 'Ingredientes:\r\n1 kg de miolo de acém\r\n\r\n2 folhas de louro\r\n2 colheres de sopa de vinagre\r\n1 cebola picadinha\r\n4 dentes de alho\r\n5 colheres de sopa de shoyu\r\n\r\nCominho a gosto\r\nPimenta branca a gosto\r\nSal a gosto\r\nNoz-moscada a gosto\r\n\r\n1 colher de sopa de óleo\r\nPreparação:\r\nEtapa 1\r\n\r\nMisture todos os temperos em um recipiente, acrescente a carne e deixe marinar por 30 minutos.\r\n\r\nEtapa 2\r\nAqueça a panela de pressão, acrescente o óleo, doure a carne levemente e adicione o molho do tempero (não colocar água).\r\nEtapa 3\r\n\r\nTampe a panela e quando começar a pegar pressão, baixe o fogo e marque 1 hora (se precisar, deixe mais um pouco).\r\nEtapa 4\r\nA carne fica douradinha\r\n\r\nPreparação:', '250MT', '1.1g', 1),
(22, 'COSTELA BOVINA ASSADA', 'principal', 'INGREDIENTES:\r\n\r\n3 kg de costela não muito gordurosa\r\nAlho\r\nSal a gosto\r\nCebola\r\nPimenta bode agosto\r\n2 sachês sazon para carne (em balagem vermelha)\r\nPapel alumínio\r\n\r\n📌 MODO DE PREPARO:\r\n\r\n1. Amasse o alho, juntamente com o sal, pimenta, cebola e sazon, passe esse tempero muito bem na costela\r\n2. Envolva a costela já temperada no papel alumínio por três vezes (três folhas de papel alumínio)\r\n3. Deixando a costela em contato com o lado mais brilhante do papel, lembrando de apertar bem as bordas para ficar bem lacrado\r\n4. Leve ao forno quente por 2 horas\r\n5. Depois deste tempo retire o papel alumínio e deixe no forno para dar uma douradinha\r\n\r\nPara a costela pegar bem os temperos, deixe pelo menos umas 4 horas marinando antes de levar pra assar.', '250MT', '1.1g', 1),
(23, 'Carne Assada', 'principal', 'ngredientes\r\n\r\n1 kg de Carne para assar (da sua preferência)\r\n\r\n6 dentes de alho\r\n\r\nSuco de 1 limão e meio\r\n\r\nSal a gosto\r\nModo de Preparo\r\n\r\nTempere a carne com o alho triturado, o suco do limão e o sal. Deixe de um dia para o outro no tempero.\r\n\r\nPegue uma panela grande, coloque um pouco de óleo e esquente, em seguida coloque a carne dentro da panela e vá virando conforme a carne for dourando, vá pingando um pouquinho de água para a carne pegar cor e cozinhar, assim que começar a dourar o fundo, vire a carne e pingue mais um pouco de água.\r\n\r\nVá fazendo assim, até a carne estar completamente cozida e com uma cor maravilhosa.', '200MT', '12g', 0),
(24, 'Sardinha na panela', 'principal', 'Ingredientes\r\n1kg de filés de sardinha\r\n3 dentes de alho amassados\r\n2 folhas de louro rasgadas\r\n1/2 pimenta dedo de moça cortada em rodelas (opcional)\r\n1/4 xícara (chá) de vinagre\r\nSal e pimenta do reino a gosto\r\n2 cebolas grandes cortadas em rodelas\r\n4 tomates cortados em rodelas\r\n1/4 xícara (chá) de suco de limão\r\n1/4 xícara (chá) de azeite\r\n\r\n.Modo de preparo\r\nTempere as sardinhas com o sal, a pimenta, o alho, o louro, a pimenta dedo de moça e o vinagre.\r\nNa panela de pressão, faça uma camada de rodelas de cebola, depois o tomate e outra de sardinhas.\r\nRepita as camadas até terminarem os ingredientes.\r\nRegue com o suco de limão e o azeite.\r\nTampe a panela e leve ao fogo.\r\nQuando pegar pressão, abaixe a chama e cozinhe por 15 minutos.\r\nDesligue e deixe esfriar.\r\nAbra a panela e transfira as sardinhas para um recipiente com tampa.\r\nLeve à geladeira de um dia para o outro.\r\nDica: Assim como outros peixes de água fria, a sardinha é rica em ácidos graxos ômega-3 (EPA e DHA), reconhecidos por seu poder antioxidante e anti-inflamatório. “Esses ácidos aumentam a atividade cerebral, modulam a hiperatividade e a depressão e ainda melhoram o desempenho cognitivo”. Isso tudo porque a gordura do bem, da qual a sardinha é uma das mais ricas fontes, serve para encapar os neurônios, protegendo-os e facilitando a comunicação entre eles.', '250MT', '1.0g', 1),
(25, 'Ossobuco de Vitela', 'principal', '.Ingredientes:\r\n4 peças de ossobuco\r\n½ cebola roxa picada\r\n½ cebola branca picada\r\n600 ml de malzbier\r\nSal\r\nPimenta\r\nAzeite\r\n\r\n.Preparo:\r\nNuma panela de pressão coloque um fio de azeite e coloque o ossobuco temperado com sal e pimenta, doure bem de todos os lados.\r\nColoque as cebolas e refogue tudo junto.\r\nColoque a cerveja e feche.\r\nCozinhe por 20 minutos, abra se estiver macio, deixe o molho engrossar e sirva', '250MT', '1.9g', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `apelido`, `is_admin`, `genero`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Antonio joao zimila', NULL, 1, NULL, 'antoniojoaozimila@gmail.com', NULL, '$2y$10$5q82qyd1tOyFzsE597p1mOD3u6R52nNDbgGbBad1zx2vIwE9jGEOS', NULL, '2021-12-06 22:06:57', '2021-12-06 22:06:57'),
(4, 'Benjamim', NULL, 0, NULL, 'benjamimtorreto@gmail.com', NULL, '$2y$10$ItQ.UNyeECCjHxTniC7yz.tSxp3IIbgdS4tR84Iqy3egwKgmx6WE.', NULL, '2021-12-06 22:16:25', '2021-12-06 22:16:25'),
(5, 'pedro', NULL, NULL, NULL, 'antoniojoao.zimila@uem.ac.mz', NULL, '$2y$10$0M9aZ5uRj7l1vWd/38sCc.OOjNL2eE96XkD9pHJTsWpUn9nw2nWp6', NULL, '2021-12-07 23:56:45', '2021-12-07 23:56:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
