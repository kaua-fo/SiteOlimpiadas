<?php
include_once('./php/funcoes.php');
include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? criptografia($_POST['senha']) : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$img = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['img'])) ? $_POST['img'] : null;

$href = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['href'])) ? $_POST['href'] : null;

$categoria = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['categoria'])) ? $_POST['categoria'] : null;

$categoriaUser = 'comum';

$resposta = 0;

$resposta = calcularImc($peso,$altura);
$classificacao = tabelaImc($resposta);
$listaNoticias = listarNoticias();
$data = dataAtual();
$hora = horaAtual();

/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('./view/header-view');

if($paginaUrl === "principal"){
    include_once('./view/principal-view');
    cadastrarImc($nome,$email,$peso,$altura,$resposta,$classificacao);
}elseif($paginaUrl === "login"){
    $mensagemErro = false;
    $mensagemAcesso = false;
    $infoUser = verificarLogin($login);
    if($infoUser && validacaoSenha($infoUser['senha'],$senha)){
        registrarAcessoValido($infoUser);
        $mensagemAcesso = true;
    }
    if($login && !$infoUser){
        $mensagemErro = true;
    };
    include_once('./view/login-view');
}elseif($paginaUrl === "registro"){
    $mensagemErro = false;
    $permissaoRegistro = '';
    if($login){
        $permissaoRegistro = loginUnico($login);
    };
    if($permissaoRegistro === false){
        $mensagemErro = true;
    };
    include_once('./view/registro-view');
    if(!empty($permissaoRegistro) && $permissaoRegistro === true){
        cadastrarRegistro($nome,$email,$telefone,$login,$senha,$categoriaUser);
    };
}elseif($paginaUrl === "cadastrarNoticia"){
    protegerTelaAdmin();
    include_once('./view/cadastrarNoticia-view');
    cadastrarNoticia($titulo,$descricao,$img,$categoria);
}elseif($paginaUrl === "contato"){
    include_once('./view/contato-view');
    cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);
}elseif($paginaUrl === "detalhe"){
    protegerTela();
    include_once('./view/detalhe-view');
}elseif($paginaUrl === "sair"){
    limparSessao();
}else{
    include_once('./view/paginaErro-view');
}

include_once('./view/footer-view');