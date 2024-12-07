<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['email'])) ? $_POST['email'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['senha'])) ? acesso::criptografia($_POST['senha']) : null;

$categoriaUser = 'comum';

if($paginaUrl === "registro"){
    $objRegistro = new Registro($nome, $email, $telefone, $login, $senha, $categoriaUser);
    $mensagemErro = false;
    if($_POST){
        if($objRegistro->verificarLoginDuplicado($login)){
        $objRegistro->cadastrarRegistro();
        }else{
            $mensagemErro = true;
        }
    };
    include_once('./view/registro-view.php');
};