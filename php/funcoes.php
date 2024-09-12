<?php
function criarLista(){
    $listaNoticia[0] = array(
        "titulo" => "GABRIEL MEDINA",
        "descricao" => "A estrela brasileira Gabriel Medina começou a surfar aos oito anos, após o divórcio de seus pais. Seu padrasto, Charlao, era um surfista amador que ajudou a alimentar a paixão de Medina pelo esporte. Uma vitória no Rip Curl Grom Search aos 11 anos deu início a uma sucessão de títulos amadores, regionais e nacionais. Em 2011, Medina se tornou o surfista brasileiro mais jovem a ter acesso ao WSL Championship Tour (CT), com apenas 17 anos. Apesar de ter entrado na turnê no meio da temporada, o brasileiro se tornou uma estrela em ascensão ao vencer dois eventos em sua temporada de estreia. Com 1,80 m de altura, a estrela em ascensão fez história como o primeiro surfista brasileiro a vencer o Campeonato Mundial em 2014. Ele continuou a dominar o esporte, conquistando um lugar entre os três primeiros nos três anos seguintes e, finalmente, conquistando os títulos mundiais novamente em 2018 e 2021, o que consolidou seu status como o surfista número um do mundo.",
        "imagem" => "./imagens/medina.jpg",
        "href" => "https://localhost/infOlympic/?pagina=medina"
    );
    $listaNoticia[1] = array(
        "titulo" => "RAYSSA LEAL",
        "descricao" => "Nos Jogos Olímpicos de Tóquio 2020, em julho de 2021, uma garota radiante de 13 anos com rosto jovem e aparelho ortodôntico morde orgulhosamente uma medalha de prata. A alegria contagiante e o entusiasmo desenfreado de Rayssa Leal brilharam depois de se tornar uma das mais jovens medalhistas olímpicas da história. 'É como se eu estivesse em um parque de diversões e apenas me divertindo', disse ela ao Olympics.com, refletindo sobre sua alegria de viver e mentalidade vencedora. 'Porque estou fazendo o que gosto e o que sempre sonhei fazer. Então, só de ir aos campeonatos e estar com minha família e meus amigos é ótimo', explicou.",
        "imagem" => "./imagens/rayssa.jpg",
        "href" => "https://localhost/infOlympic/?pagina=rayssa"
    );
    $listaNoticia[2] = array(
        "titulo" => "REBECA ANDRADE",
        "descricao" => "A incrível jornada de Andrade começou na favela nos arredores de São Paulo. Ela foi criada pela mãe, Rosa, que sozinha criou oito filhos. O talento excepcional de Andrade na ginástica foi reconhecido desde cedo, levando-a a caminhar horas para praticar. Seu trabalho e dedicação a levaram ao Rio e ao Clube Flamengo, onde continua treinando até hoje. Os sucessos de Andrade não só transformaram a sua própria vida, mas também lhe permitiram causar um impacto significativo na sua família, incluindo a compra de um novo apartamento. Suas raízes são parte integrante de sua identidade, como fica evidente em sua rotina de solo ao som de 'Baile de Favela', em homenagem ao seu início.",
        "imagem" => "./imagens/rebeca.jpg",
        "href" => "https://localhost/infOlympic/?pagina=rebeca"
    );
    $listaNoticia[3] = array(
        "titulo" => "BEATRIZ SOUZA",
        "descricao" => "A brasileira Beatriz Souza é campeã olímpica do judô nas Olimpíadas de Paris 2024, na categoria 'acima de 78kg', em sua primeira participação nos Jogos. Ela, que ocupa a quinta posição no ranking mundial, venceu a israelense Raz Hershko na decisão da medalha de ouro. Nascida em Peruíbe, litoral de São Paulo, Beatriz Souza, ou 'Bia', tem 26 anos de idade, tem 1,78m de altura e pesa cerca de 135kg (foi a terceira mais pesada da categoria em Paris). Atleta o clube Pinheiros, em São Paulo, ela é presença constante nos pódios das principais competições do esporte. Em Olimpíadas, a brasileira se tornou a primeira mulher brasileira estreante nos Jogos a ser campeã olímpica em provas individuais.",
        "imagem" => "./imagens/beatriz.jpg",
        "href" => "https://localhost/infOlympic/?pagina=beatriz"
    );
    $listaNoticia[4] = array(
        "titulo" => "JULIA SOARES",
        "descricao" => "Júlia se tornou mais conhecida do público nos Jogos Olímpicos de Paris, devido à sua apresentação no solo, mas ela começou sua história com a ginástica há alguns anos, no Centro de Excelência em Ginástica do Paraná, em Curitiba. Ali mesmo, ela chamou a atenção da treinadora ucraniana Iryna Ilyashenko, que a levou para treinar com as atletas de ginástica com potencial para representar a Seleção Brasileira. Desde 2018, Júlia soma alguns resultados importantes. Ela foi campeã Sul-Americana Júnior na trave, ficou em quinto lugar no individual geral do Campeonato Brasileiro de Aparelhos, e levou o bronze na trave e no solo. Depois, ela entrou para a Seleção no Campeonato Mundial Juvenil. Em 2022, Júlia conquistou sua primeira medalha de ouro de peso na etapa de Baku da Copa do Mundo de Ginástica Artística, além de ter subido ao topo do pódio quatro vezes no Sul-Americano da modalidade.",
        "imagem" => "./imagens/julia.jpg",
        "href" => "https://localhost/infOlympic/?pagina=julia"
    );
    $listaNoticia[5] = array(
        "titulo" => "FLÁVIA SARAIVA",
        "descricao" => "Flávia Lopes Saraiva nasceu no Rio de Janeiro, no dia 30 de setembro de 1999. O sonho de ser ginasta começou ainda menina quando assistia às apresentações de Daiane Hipólito e Daiane dos Santos. Treinando em um projeto social para alunos de escolas públicas, foi descoberta aos oito anos de idade. Com apenas 1,33m de altura, é considerada o novo fenômeno da ginástica artística. Com 11 anos de idade, mesmo com o receio da mãe, resolveu deixar a Zona Norte carioca e ir morar em Três Rios, no sul do Estado, com o técnico e outros atletas, no projeto criado pela técnica Georgette Vidor. Para ser competitiva a atleta começou a treinar durante seis ou sete horas por dia e logo se destacou nas competições.",
        "imagem" => "./imagens/flavia.jpg",
        "href" => "https://localhost/infOlympic/?pagina=flavia"
    );
    return $listaNoticia;
};

/**
 * TimeZone
 * Retorna o fuso horário local
 * que definirá a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}

/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y");
}

/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quanridade que representa quantos caracteres vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
        return substr($str,0,$quantidade)." [...]";
    }
}

/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}

