<?php

include_once('./php/funcoes.php');
include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('./view/header-view');
if($paginaUrl === "principal"){
    include_once('controller/principal_controller.php');
}elseif($paginaUrl === "login"){
    include_once('controller/login_controller.php');
}elseif($paginaUrl === "registro"){
    include_once('model/registro_model.php')
    include_once('controller/registro_controller.php');
}elseif($paginaUrl === "cadastrarNoticia"){
    include_once('controller/cadastrarNoticia_controller.php');
}elseif($paginaUrl === "cadastrarCategoria"){
    include_once('controller/cadastrarCategoria_controller.php');
}elseif($paginaUrl === "contato"){
    include_once('controller/contato_controller.php');
}elseif($paginaUrl === "detalhe"){
    include_once('controller/detalhe_controller.php');
}elseif($paginaUrl === "sair"){
    limparSessao();
}else{
    include_once('./view/paginaErro-view');
}
include_once('./view/footer-view');