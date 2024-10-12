<?php
include_once('configuracao.php');

 /* TimeZone
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

function criptografia($senha){
    if(!$senha)return False;
    return sha1($senha);
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
    $senha = criptografia($senha);
    $sql = "INSERT INTO `registro` (`nome`,`email`,`telefone`,`login`,`senha`)
    VALUES(:nome,:email,:telefone,:login,:senha)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha',$senha);
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

function cadastrarNoticia($titulo,$descricao,$img)
{
    if (!$titulo || !$descricao || !$img){return;}
    $sql = "INSERT INTO `noticia` (`titulo`,`descricao`,`img`)
    VALUES(:titulo,:descricao,:img)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':img', $img);
    $result = $stmt->execute();
    return ($result)?true:false;
}

function listarNoticias()
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM noticia";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}

function buscarNoticia($id)
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM noticia WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list[0];
}

function loginUnico($login)
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM registro WHERE login = '$login'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($list){
        return false;
    }else{
        return true;
    }
}

function confirmarLogin($login)
{
    if (!$login){return;}
    $pdo = Database::conexao();
    $sql = "SELECT * FROM registro WHERE `login` = '$login'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return ($list)?$list[0]:false;
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

