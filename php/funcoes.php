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
    }else{
        return $str." [...]";
    };
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


function cadastrarNoticia($titulo,$descricao,$img,$categoriaId)
{
    if (!$titulo || !$descricao || !$img || !$categoriaId){return;}
    $sql = "INSERT INTO `noticia` (`titulo`,`descricao`,`img`,`categoriaId`)
    VALUES(:titulo,:descricao,:img,:categoriaId)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':categoriaId',$categoriaId);
    $result = $stmt->execute();
    return ($result)?true:false;
}

function cadastrarCategoria($nomeCategoria)
{
    if (!$nomeCategoria){return;}
    $sql = "INSERT INTO `categoria` (`nome`)
    VALUES(:nome)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nomeCategoria);
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

function listarCategorias()
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM categoria";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}

function noticiasRelacionadas($categoriaId,$id)
{
    if (!$categoriaId){return;}
    $pdo = Database::conexao();
    $sql = "SELECT * FROM `noticia` WHERE `id` != '$id' AND categoriaId LIKE '$categoriaId' LIMIT 5";
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

function verificarLoginDuplicado($login)
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM registro WHERE login = '$login'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return($list)?false:true;
}

function verificarCategoriaDuplicada($nomeCategoria)
{
    $pdo = Database::conexao();
    $sql = "SELECT * FROM categoria WHERE `nome` = '$nomeCategoria'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return($list)?false:true;
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

function upload($imagem){
    if(!$_FILES["fileToUpload"]){return;}
    $target_dir = "assets/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            return $_FILES["fileToUpload"]["name"];
        } else {
            // echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
  }
