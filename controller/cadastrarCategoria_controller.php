<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$nomeCategoria = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nomeCategoria'])) ? $_POST ['nomeCategoria'] : null;
if($nomeCategoria){
    $nomeCategoria = ucfirst(strtolower($nomeCategoria));
}

if($paginaUrl === "cadastrarCategoria"){
    protegerTelaAdmin();
    $mensagemErro = false;
    if(!verificarCategoriaDuplicada($nomeCategoria)){
        $mensagemErro = true;
    };
    include_once('./view/cadastrarCategoria-view');
    if(verificarCategoriaDuplicada($nomeCategoria)){
        cadastrarCategoria($nomeCategoria);
    }
};