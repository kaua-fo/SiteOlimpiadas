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

$resposta = 0;

include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');
include_once('./php/funcoes.php');
$resposta = calcularImc($peso,$altura);
$classificacao = tabelaImc($resposta);
cadastrarImc($nome,$email,$peso,$altura,$resposta,$classificacao);
cadastrarRegistro($nome,$email,$telefone,$login,$senha);
cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);


/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$listaUrl = array("principal","login","registro","contato","medina","rayssa","rebeca","beatriz","julia","flavia","guilherme","hugo");

include_once('./php/header.php');

foreach ($listaUrl as $url) {
    if($paginaUrl === $url){
        include_once('./php/'.$url.'.php');
    }else{
        include_once('./php/paginaErro.php');
    }
}
include_once('./php/footer.php');