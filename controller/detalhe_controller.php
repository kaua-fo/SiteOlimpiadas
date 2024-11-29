<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

if($_GET && isset($_GET['noticia'])){
    $noticiaId = $_GET['noticia'];
}else{
    $noticiaId = null;
}
$noticia = buscarNoticia($noticiaId);
$noticiaRelacionada = noticiasRelacionadas( $noticia["categoriaId"], $noticia["id"]);

if($paginaUrl === "detalhe"){
    acesso::protegerTela();
    include_once('./view/detalhe-view.php');
};