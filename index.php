<?php
include_once('model/time_model.php');
include_once('php/configuracao.php');
include_once('configuracao/conexao.php');
include_once('model/acesso_model.php');

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('./view/header-view.php');
if($paginaUrl === "principal"){
    include_once('model/imc_model.php');
    include_once('model/noticia_model.php');
    include_once('controller/principal_controller.php');
}elseif($paginaUrl === "login"){
    include_once('controller/login_controller.php');
}elseif($paginaUrl === "registro"){
    include_once('model/registro_model.php');
    include_once('controller/registro_controller.php');
}elseif($paginaUrl === "cadastrarNoticia"){
    include_once('model/noticia_model.php');
    include_once('controller/cadastrarNoticia_controller.php');
}elseif($paginaUrl === "cadastrarCategoria"){
    include_once('model/noticia_model.php');
    include_once('controller/cadastrarCategoria_controller.php');
}elseif($paginaUrl === "contato"){
    include_once('model/contato_model.php');
    include_once('controller/contato_controller.php');
}elseif($paginaUrl === "detalhe"){
    include_once('model/noticia_model.php');
    include_once('controller/detalhe_controller.php');
}elseif($paginaUrl === 'deletarNoticia'){
    include_once('model/noticia_model.php');
    include_once('controller/deletarNoticia_controller.php');
}elseif($paginaUrl === "sair"){
    acesso::limparSessao();
}else{
    include_once('view/paginaErro-view.php');
}
include_once('view/footer-view.php');