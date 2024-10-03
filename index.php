<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$img = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['img'])) ? $_POST['img'] : null;

$href = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['href'])) ? $_POST['href'] : null;

$resposta = 0;

include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');
include_once('./php/funcoes.php');
$resposta = calcularImc($peso,$altura);
$classificacao = tabelaImc($resposta);
cadastrarImc($nome,$email,$peso,$altura,$resposta,$classificacao);
cadastrarRegistro($nome,$email,$telefone,$login,$senha);
cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);
cadastrarNoticia($titulo,$descricao,$img,$href);

$listaNoticias = listarNoticias();

/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('./php/header.php');

if($paginaUrl === "principal" && !$noticiaId){
    include_once('./php/principal.php');
}elseif($paginaUrl === "login"){
    include_once('./php/login.php');
}elseif($paginaUrl === "registro"){
    include_once('./php/registro.php');
}elseif($paginaUrl === "cadastrarNoticia"){
    include_once('./php/cadastrarNoticia.php');
}elseif($paginaUrl === "contato"){
    include_once('./php/contato.php');
}elseif($noticiaId){
    include_once('./php/detalhe.php');
}else{
    include_once('./php/paginaErro.php');
}

include_once('./php/footer.php'); 