-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2024 às 00:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infolympic`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imc`
--

CREATE TABLE `imc` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `peso` int(11) NOT NULL,
  `altura` float NOT NULL,
  `imc` float DEFAULT NULL,
  `classificacao` varchar(255) DEFAULT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `imc`
--

INSERT INTO `imc` (`id`, `nome`, `email`, `peso`, `altura`, `imc`, `classificacao`, `dataRegistro`) VALUES
(1, 'Kaua', 'kauavictorpe@gmail.com', 20, 1.75, 6.53, 'Magreza grave', '2024-09-25 20:28:03'),
(2, 'kaua victor ferreira de oliveira', 'kauavictorpe@gmail.com', 75, 1.73, 25.06, 'Sobrepeso', '2024-11-01 19:40:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `descricao`, `img`, `categoria`, `dataRegistro`) VALUES
(1, 'GABRIEL MEDINA', ' A estrela brasileira Gabriel Medina começou a surfar aos oito anos, após o divórcio de seus pais. Seu padrasto, Charlao, era um surfista amador que ajudou a alimentar a paixão de Medina pelo esporte. Uma vitória no Rip Curl Grom Search aos 11 anos deu início a uma sucessão de títulos amadores, regionais e nacionais. Em 2011, Medina se tornou o surfista brasileiro mais jovem a ter acesso ao WSL Championship Tour (CT), com apenas 17 anos. Apesar de ter entrado na turnê no meio da temporada, o brasileiro se tornou uma estrela em ascensão ao vencer dois eventos em sua temporada de estreia. Com 1,80 m de altura, a estrela em ascensão fez história como o primeiro surfista brasileiro a vencer o Campeonato Mundial em 2014. Ele continuou a dominar o esporte, conquistando um lugar entre os três primeiros nos três anos seguintes e, finalmente, conquistando os títulos mundiais novamente em 2018 e 2021, o que consolidou seu status como o surfista número um do mundo. ', 'medina.jpg', 'surf', '2024-10-01 20:13:30'),
(2, 'RAYSSA LEAL', 'Nos Jogos Olímpicos de Tóquio 2020, em julho de 2021, uma garota radiante de 13 anos com rosto jovem e aparelho ortodôntico morde orgulhosamente uma medalha de prata. A alegria contagiante e o entusiasmo desenfreado de Rayssa Leal brilharam depois de se tornar uma das mais jovens medalhistas olímpicas da história. \'É como se eu estivesse em um parque de diversões e apenas me divertindo\', disse ela ao Olympics.com, refletindo sobre sua alegria de viver e mentalidade vencedora. \'Porque estou fazendo o que gosto e o que sempre sonhei fazer. Então, só de ir aos campeonatos e estar com minha família e meus amigos é ótimo\', explicou.', 'rayssa.jpg', 'skate', '2024-10-01 20:13:30'),
(3, 'REBECA ANDRADE', 'A incrível jornada de Andrade começou na favela nos arredores de São Paulo. Ela foi criada pela mãe, Rosa, que sozinha criou oito filhos. O talento excepcional de Andrade na ginástica foi reconhecido desde cedo, levando-a a caminhar horas para praticar. Seu trabalho e dedicação a levaram ao Rio e ao Clube Flamengo, onde continua treinando até hoje. Os sucessos de Andrade não só transformaram a sua própria vida, mas também lhe permitiram causar um impacto significativo na sua família, incluindo a compra de um novo apartamento. Suas raízes são parte integrante de sua identidade, como fica evidente em sua rotina de solo ao som de \'Baile de Favela\', em homenagem ao seu início.', 'rebeca.jpg', 'ginastica', '2024-10-01 20:13:30'),
(4, 'BEATRIZ SOUZA', 'A brasileira Beatriz Souza é campeã olímpica do judô nas Olimpíadas de Paris 2024, na categoria \'acima de 78kg\', em sua primeira participação nos Jogos. Ela, que ocupa a quinta posição no ranking mundial, venceu a israelense Raz Hershko na decisão da medalha de ouro. Nascida em Peruíbe, litoral de São Paulo, Beatriz Souza, ou \'Bia\', tem 26 anos de idade, tem 1,78m de altura e pesa cerca de 135kg (foi a terceira mais pesada da categoria em Paris). Atleta o clube Pinheiros, em São Paulo, ela é presença constante nos pódios das principais competições do esporte. Em Olimpíadas, a brasileira se tornou a primeira mulher brasileira estreante nos Jogos a ser campeã olímpica em provas individuais.', 'beatriz.jpg', 'judo', '2024-10-01 20:13:30'),
(5, 'JULIA SOARES', 'Júlia se tornou mais conhecida do público nos Jogos Olímpicos de Paris, devido à sua apresentação no solo, mas ela começou sua história com a ginástica há alguns anos, no Centro de Excelência em Ginástica do Paraná, em Curitiba. Ali mesmo, ela chamou a atenção da treinadora ucraniana Iryna Ilyashenko, que a levou para treinar com as atletas de ginástica com potencial para representar a Seleção Brasileira. Desde 2018, Júlia soma alguns resultados importantes. Ela foi campeã Sul-Americana Júnior na trave, ficou em quinto lugar no individual geral do Campeonato Brasileiro de Aparelhos, e levou o bronze na trave e no solo. Depois, ela entrou para a Seleção no Campeonato Mundial Juvenil. Em 2022, Júlia conquistou sua primeira medalha de ouro de peso na etapa de Baku da Copa do Mundo de Ginástica Artística, além de ter subido ao topo do pódio quatro vezes no Sul-Americano da modalidade.', 'julia.jpg', 'ginastica', '2024-10-01 20:13:30'),
(6, 'FLÁVIA SARAIVA', 'Flávia Lopes Saraiva nasceu no Rio de Janeiro, no dia 30 de setembro de 1999. O sonho de ser ginasta começou ainda menina quando assistia às apresentações de Daiane Hipólito e Daiane dos Santos. Treinando em um projeto social para alunos de escolas públicas, foi descoberta aos oito anos de idade. Com apenas 1,33m de altura, é considerada o novo fenômeno da ginástica artística. Com 11 anos de idade, mesmo com o receio da mãe, resolveu deixar a Zona Norte carioca e ir morar em Três Rios, no sul do Estado, com o técnico e outros atletas, no projeto criado pela técnica Georgette Vidor. Para ser competitiva a atleta começou a treinar durante seis ou sete horas por dia e logo se destacou nas competições.', 'flavia.jpg', 'ginastica', '2024-10-01 20:13:30'),
(7, 'GUILHERME COSTA', 'Nascido em Itaguaí, no Rio de Janeiro, o atleta começou a ser chamado de Cachorrão ainda na infância. Segundo ele mesmo contou no Pan-Americano do ano passado, ele jogava bola com alguns amigos, em Angra dos Reis, quando foi mordido por um cão. “A gente voltou no dia seguinte e o cachorro não estava [mais lá], aí os amigos ficaram me zoando dizendo que ele morreu depois de me morder”, contou o nadador em entrevista ao jornal Lance!. Hoje, o atleta divide seus dias com outro canino: o Thorpe. O cachorro da raça golden retriever foi batizado em homenagem ao nadador australiano Ian Thorpe, que conquistou cinco medalhas de ouro em Jogos Olímpicos.', 'guilherme.jpg', 'natacao', '2024-10-01 20:13:30'),
(8, 'HUGO CALDERANO', 'Todo mundo sabe que Hugo Calderano é sinônimo de foco. O mesa-tenista brasileiro que competiu nas Olimpíadas de Paris 2024 tirou até nota máxima em um teste de concentração da série \'O Cérebro dos Atletas\', do Fantástico. Mas o que muita gente talvez não deve saber, é que todo esse foco e dedicação ajudaram o atleta ao longo dos últimos anos a aprender a falar inglês, espanhol, alemão, italiano, francês e até mandarim. Isso mesmo, nosso mesa-tenista olímpico é poliglota. Junto com o português, ele fala 7 idiomas. Ao g1, Hugo conta que aprendeu todas essas línguas ao longo da vida, muitas vezes por necessidade, outras por interesse pessoal. Seu domínio desses idiomas se deve à convivência com pessoas de diferentes nacionalidades e ao esforço pessoal em estudar e praticar cada uma delas.', 'hugo.jpg', 'tenis', '2024-10-01 20:13:30'),
(20, 'FERRÃO', 'Três vezes eleito o melhor jogador do mundo, Ferrão lesionou o tendão de Aquiles da panturrilha esquerda e ficou quase um ano afastado das quadras em recuperação. Felizmente, o pivô conseguiu se recuperar a tempo e realizar o grande sonho.\r\n\r\n- Há um ano atrás tive uma lesão, já estava pensando nesse momento que eu sempre sonhei, principalmente porque ficamos muito perto no último Mundial. Chegamos aqui, tivemos contratempos de lesões, eu fui um deles. Antes da Copa tive outra pequena lesão muscular, mas felizmente pude ajudar - revelou.', 'ferrao2.jpg', 'futsal', '2024-10-07 21:02:07'),
(21, 'ÍTALO FERREIRA', 'Ítalo Ferreira (Baía Formosa, 6 de maio de 1994) é um surfista profissional brasileiro que está na ASP World Tour desde 2015. Em 2021 sagrou-se o primeiro campeão olímpico da história do surfe, recebendo a medalha de ouro ao derrotar o japonês Kanoa Igarashi nos Jogos Olímpicos de Verão de 2020 em Tóquio. Em 2019 já havia sagrado-se campeão do WSL, o maior campeonato mundial de surfe. Venceu a grande final em Pipeline, no Havaí, contra o tricampeão Gabriel Medina, tornando-se o terceiro brasileiro a vencer o campeonato mundial. Conquistou o quarto título para o Brasil na competição.', 'italo2.jpg', 'surf', '2024-10-24 20:02:50'),
(22, 'KELVIN HOEFLER', 'Kelvin Hoefler é um skatista profissional brasileiro. Nascido no Guarujá, em São Paulo, em 10 de fevereiro de 1994, ele é especialista em street e um dos melhores atletas do mundo na modalidade. \r\n\r\nO skatista paulista já conquistou 6 títulos mundiais de street pela WCS (World Cup Skateboarding) e foi campeão da Street League Skateboarding, principal competição da modalidade em todo o mundo.\r\n\r\nNas disputas de skate dos X Games, principal evento de esportes radicais do planeta, ele tem, até aqui, duas medalhas de ouro, uma prata e dois bronzes. Curiosamente, a história de Kelvin no skate começou dentro de casa. Kelvin Hoefler começou a andar de skate quando tinha apenas 8 anos. As primeiras pistas foram improvisadas dentro da própria casa, com a ajuda do pai, que foi seu principal incentivador no esporte.\r\n\r\nFoi o pai de Kelvin quem deu a ele o seu primeiro skate. Como eles moravam em uma rua de terra no Guarujá, no litoral paulista, o então garoto andava dentro de casa, indo da cozinha até a garagem, onde foi improvisada uma mini rampa e alguns obstáculos.\r\n\r\nEm entrevista ao jornal O Globo, Kelvin relembrou como atrapalhava a novela da mãe. “Ela ficava p… da vida quando eu passava de skate na frente da TV da sala”, disse.\r\n\r\nSegundo o próprio skatista, a disciplina para se tornar um atleta profissional foi fruto das orientações e rigidez impostas pelo pai, que é policial militar. ', 'kelvin.jpg', 'skate', '2024-10-29 20:59:37'),
(24, 'TATIANA WESTON-WEBB', 'Tatiana Weston-Webb, de 25 anos, sonha em se tornar uma atleta Olímpica desde que foi anunciado que o surfe estrearia nos Jogos de Tóquio 2020.\r\n\r\nWeston-Webb tinha oito anos quando se apaixonou pelo surfe e aprendeu o esporte vendo seu irmão mais velho surfar. As ondas estão há muito tempo em sua família, com a mãe brasileira de Weston-Webb, Tanira, que já foi uma surfista profissional de bodyboard.\r\n\r\nDepois de brincar na shore break com seu irmão, ela conseguiu sua primeira prancha de surfe.\r\n\r\nDe acordo com sua biografia na WSL, muito de sua confiança pode ser atribuída a seu pai, que \"rotineiramente remava com ela na grande Hanalei Bay\" quando criança, permitindo que ela não se intimidasse pelas consequências. Isso também resultou no fato de que quando o elenco de Soul Surfer precisava de um dublê para Bethany Hamilton, Weston-Webb se encaixou no perfil e passou três semanas filmando com sua heroína.\r\n\r\nA partir de então, ela foi se fortalecendo cada vez mais.\r\n\r\nOriginalmente, ela representava os EUA na água, mas com as Olimpíadas à vista, Weston-Webb tomou a decisão de trocar para o Brasil, afirmando que o país sempre foi uma parte importante de quem ela é.\r\n\r\n“O Brasil possui uma grande parte do meu coração. Tenho família, amigos e um grande apoio lá. É um lugar onde sempre me senti em casa e estou mais que orgulhosa em representar um país tão incrível, com tanta paixão e dedicação pelo nosso esporte”, disse ela.\r\n\r\nEnquanto os preparativos para as Olimpíadas começam, Weston-Webb continua entrando em forma. Em 2021, ela venceu o Boost Mobile Margaret River Pro, batendo a sete vezes campeã mundial, Stephanie Gilmore, na final.\r\n\r\nE agora todos os olhos estão voltados para os Jogos Olímpicos de 2020, quando Weston-Webb viajará para Tóquio não apenas para representar o surfe em sua temporada de estreia, mas também para representar o país de origem de sua mãe - o Brasil.', 'tatiana.jpg', 'surf', '2024-10-29 21:06:26'),
(25, 'WILLIAM LIMA', 'Willian Lima é um judoca brasileiro de 24 anos que luta na categoria meio-leve (até 66kg) e é atleta do Pinheiros. Além disso, ele compete também pela Marinha do Brasil e é titular da Seleção Brasileira de Judô.\r\n\r\nO brasileiro se tornou mais um judoca a conquistar uma medalha em Olimpíada, após uma grande campanha, acabou sendo derrotado na final pelo japonês Hifumi Abe, ficando com a medalha de prata em sua primeira Olimpíada. Willian Lima não teve o judô como primeira opção, quando criança, tinha uma ligação muito forte com a água e viu na natação uma escolha mais evidente. Apesar disso não tinha nem idade e nem altura para iniciar no esporte.\r\n\r\nResolveu então começar no judô mas planejando deixar a modalidade posteriormente, o que não aconteceu, pois passou viajar para torneios, conquistar medalhas e acabou se apaixonando pelo esporte.', 'william.jpg', 'judo', '2024-10-29 21:14:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` longtext NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `registro`
--

INSERT INTO `registro` (`id`, `nome`, `email`, `telefone`, `login`, `senha`, `categoria`, `dataRegistro`) VALUES
(15, 'testeRegistro', 'testeRegistro@gmail.com', '48849489159', 'testeRegistro', '2d8c2c9ccebc7305d227b7518ac652ef3343814d', 'admin', '2024-10-18 20:04:27'),
(18, 'Kauã Victor Ferreira de Oliveira', 'kauavictorpe@gmail.com', '81987395111', 'kaua', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '2024-10-24 19:31:46'),
(19, 'a', 'a@gmail.com', '2588', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'comum', '2024-10-24 20:49:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imc`
--
ALTER TABLE `imc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
