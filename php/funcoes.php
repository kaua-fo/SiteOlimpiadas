<?php
include_once('configuracao.php');

function criarLista(){
    $listaNoticia[0] = array(
        "titulo" => "GABRIEL MEDINA",
        "descricao" => "A estrela brasileira Gabriel Medina começou a surfar aos oito anos, após o divórcio de seus pais. Seu padrasto, Charlao, era um surfista amador que ajudou a alimentar a paixão de Medina pelo esporte. Uma vitória no Rip Curl Grom Search aos 11 anos deu início a uma sucessão de títulos amadores, regionais e nacionais. Em 2011, Medina se tornou o surfista brasileiro mais jovem a ter acesso ao WSL Championship Tour (CT), com apenas 17 anos. Apesar de ter entrado na turnê no meio da temporada, o brasileiro se tornou uma estrela em ascensão ao vencer dois eventos em sua temporada de estreia. Com 1,80 m de altura, a estrela em ascensão fez história como o primeiro surfista brasileiro a vencer o Campeonato Mundial em 2014. Ele continuou a dominar o esporte, conquistando um lugar entre os três primeiros nos três anos seguintes e, finalmente, conquistando os títulos mundiais novamente em 2018 e 2021, o que consolidou seu status como o surfista número um do mundo.",
        "imagem" => "./imagens/medina.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."medina"
    );
    $listaNoticia[1] = array(
        "titulo" => "RAYSSA LEAL",
        "descricao" => "Nos Jogos Olímpicos de Tóquio 2020, em julho de 2021, uma garota radiante de 13 anos com rosto jovem e aparelho ortodôntico morde orgulhosamente uma medalha de prata. A alegria contagiante e o entusiasmo desenfreado de Rayssa Leal brilharam depois de se tornar uma das mais jovens medalhistas olímpicas da história. 'É como se eu estivesse em um parque de diversões e apenas me divertindo', disse ela ao Olympics.com, refletindo sobre sua alegria de viver e mentalidade vencedora. 'Porque estou fazendo o que gosto e o que sempre sonhei fazer. Então, só de ir aos campeonatos e estar com minha família e meus amigos é ótimo', explicou.",
        "imagem" => "./imagens/rayssa.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."rayssa"
    );
    $listaNoticia[2] = array(
        "titulo" => "REBECA ANDRADE",
        "descricao" => "A incrível jornada de Andrade começou na favela nos arredores de São Paulo. Ela foi criada pela mãe, Rosa, que sozinha criou oito filhos. O talento excepcional de Andrade na ginástica foi reconhecido desde cedo, levando-a a caminhar horas para praticar. Seu trabalho e dedicação a levaram ao Rio e ao Clube Flamengo, onde continua treinando até hoje. Os sucessos de Andrade não só transformaram a sua própria vida, mas também lhe permitiram causar um impacto significativo na sua família, incluindo a compra de um novo apartamento. Suas raízes são parte integrante de sua identidade, como fica evidente em sua rotina de solo ao som de 'Baile de Favela', em homenagem ao seu início.",
        "imagem" => "./imagens/rebeca.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."rebeca"
    );
    $listaNoticia[3] = array(
        "titulo" => "BEATRIZ SOUZA",
        "descricao" => "A brasileira Beatriz Souza é campeã olímpica do judô nas Olimpíadas de Paris 2024, na categoria 'acima de 78kg', em sua primeira participação nos Jogos. Ela, que ocupa a quinta posição no ranking mundial, venceu a israelense Raz Hershko na decisão da medalha de ouro. Nascida em Peruíbe, litoral de São Paulo, Beatriz Souza, ou 'Bia', tem 26 anos de idade, tem 1,78m de altura e pesa cerca de 135kg (foi a terceira mais pesada da categoria em Paris). Atleta o clube Pinheiros, em São Paulo, ela é presença constante nos pódios das principais competições do esporte. Em Olimpíadas, a brasileira se tornou a primeira mulher brasileira estreante nos Jogos a ser campeã olímpica em provas individuais.",
        "imagem" => "./imagens/beatriz.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."beatriz"
    );
    $listaNoticia[4] = array(
        "titulo" => "JULIA SOARES",
        "descricao" => "Júlia se tornou mais conhecida do público nos Jogos Olímpicos de Paris, devido à sua apresentação no solo, mas ela começou sua história com a ginástica há alguns anos, no Centro de Excelência em Ginástica do Paraná, em Curitiba. Ali mesmo, ela chamou a atenção da treinadora ucraniana Iryna Ilyashenko, que a levou para treinar com as atletas de ginástica com potencial para representar a Seleção Brasileira. Desde 2018, Júlia soma alguns resultados importantes. Ela foi campeã Sul-Americana Júnior na trave, ficou em quinto lugar no individual geral do Campeonato Brasileiro de Aparelhos, e levou o bronze na trave e no solo. Depois, ela entrou para a Seleção no Campeonato Mundial Juvenil. Em 2022, Júlia conquistou sua primeira medalha de ouro de peso na etapa de Baku da Copa do Mundo de Ginástica Artística, além de ter subido ao topo do pódio quatro vezes no Sul-Americano da modalidade.",
        "imagem" => "./imagens/julia.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."julia"
    );
    $listaNoticia[5] = array(
        "titulo" => "FLÁVIA SARAIVA",
        "descricao" => "Flávia Lopes Saraiva nasceu no Rio de Janeiro, no dia 30 de setembro de 1999. O sonho de ser ginasta começou ainda menina quando assistia às apresentações de Daiane Hipólito e Daiane dos Santos. Treinando em um projeto social para alunos de escolas públicas, foi descoberta aos oito anos de idade. Com apenas 1,33m de altura, é considerada o novo fenômeno da ginástica artística. Com 11 anos de idade, mesmo com o receio da mãe, resolveu deixar a Zona Norte carioca e ir morar em Três Rios, no sul do Estado, com o técnico e outros atletas, no projeto criado pela técnica Georgette Vidor. Para ser competitiva a atleta começou a treinar durante seis ou sete horas por dia e logo se destacou nas competições.",
        "imagem" => "./imagens/flavia.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."flavia"
    );
    $listaNoticia[6] = array(
        "titulo" => "GUILHERME COSTA",
        "descricao" => "Nascido em Itaguaí, no Rio de Janeiro, o atleta começou a ser chamado de Cachorrão ainda na infância. Segundo ele mesmo contou no Pan-Americano do ano passado, ele jogava bola com alguns amigos, em Angra dos Reis, quando foi mordido por um cão. “A gente voltou no dia seguinte e o cachorro não estava [mais lá], aí os amigos ficaram me zoando dizendo que ele morreu depois de me morder”, contou o nadador em entrevista ao jornal Lance!. Hoje, o atleta divide seus dias com outro canino: o Thorpe. O cachorro da raça golden retriever foi batizado em homenagem ao nadador australiano Ian Thorpe, que conquistou cinco medalhas de ouro em Jogos Olímpicos.",
        "imagem" => "./imagens/guilherme.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."guilherme"
    );
    $listaNoticia[7] = array(
        "titulo" => "HUGO CALDERANO",
        "descricao" => "Todo mundo sabe que Hugo Calderano é sinônimo de foco. O mesa-tenista brasileiro que competiu nas Olimpíadas de Paris 2024 tirou até nota máxima em um teste de concentração da série 'O Cérebro dos Atletas', do Fantástico. Mas o que muita gente talvez não deve saber, é que todo esse foco e dedicação ajudaram o atleta ao longo dos últimos anos a aprender a falar inglês, espanhol, alemão, italiano, francês e até mandarim. Isso mesmo, nosso mesa-tenista olímpico é poliglota. Junto com o português, ele fala 7 idiomas. Ao g1, Hugo conta que aprendeu todas essas línguas ao longo da vida, muitas vezes por necessidade, outras por interesse pessoal. Seu domínio desses idiomas se deve à convivência com pessoas de diferentes nacionalidades e ao esforço pessoal em estudar e praticar cada uma delas.",
        "imagem" => "./imagens/hugo.jpg",
        "href" => constant('URL_LOCAL_SITE_PAGINA')."hugo"
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
 * calcularImc
 * Calcula o Imc e retorna 
 * o resultado
 */
function calcularImc($peso,$altura){
    $resposta = 0;
    if($peso && $altura){
        $resposta = $peso / ($altura * $altura);
    }
    return round($resposta, 2);
}

/**
 * tabelaImc
 * Retorna o estado da pessoa
 * baseado no IMC dela
 */
function tabelaImc($imc){
    if($imc <= 16){
        $estado = 'Magreza grave';
    }elseif($imc >16 && $imc <17){
        $estado = 'Magreza moderada';
    }elseif($imc >=17 && $imc <=18.50){
        $estado = 'Magreza leve';
    }elseif($imc >=18.51 && $imc <25){
        $estado = 'Peso ideal';
    }elseif($imc >=25 && $imc <30){
        $estado = 'Sobrepeso';
    }elseif($imc >=30 && $imc <35){
        $estado = 'Obesidade grau I';
    }elseif($imc >=35 && $imc <40){
        $estado = 'Obesidade grau II ou severa';
    }elseif($imc >=40){
        $estado = 'Obesidade grau III ou mórbida';
    }
    return $estado;
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

function imcBuscarPorId($id)
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM imc WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}
function cadastrarImc($nome,$email,$peso,$altura,$imc,$classificacao)
{
    if (!$nome || !$email || !$peso || !$altura || !$imc || !$classificacao){return;}
    $sql = "INSERT INTO `imc` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
    VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':altura', $altura);
    $stmt->bindParam(':imc', $imc);
    $stmt->bindParam(':classificacao', $classificacao);
    $result = $stmt->execute();
    return ($result)?true:false;
}

function cadastrarRegistro($nome,$email,$telefone,$login,$senha)
{
    if (!$nome || !$email || !$telefone|| !$login|| !$senha){return;}
    $sql = "INSERT INTO `registro` (`nome`,`email`,`telefone`´,`login`,`senha`)
    VALUES(:nome,:email,:telefone,:login,:senha)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', criptografia($senha));
    $result = $stmt->execute();
    return ($result)?true:false;
}
function cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem)
{
    if (!$nome || !$sobrenome || !$email || !$telefone || !$mensagem){return;}
    $sql = "INSERT INTO `contato` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
    VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':mensagem', $mensagem);
    $result = $stmt->execute();
    return ($result)?true:false;
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

function criptografia($senha){
    if(!$senha)return False;
    return sha1($senha);
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

