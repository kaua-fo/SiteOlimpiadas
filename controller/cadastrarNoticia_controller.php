<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$img = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['img'])) ? $_POST['img'] : null;

$categoriaId = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['categoria'])) ? $_POST ['categoria'] : null;

if($paginaUrl === "cadastrarNoticia"){
    protegerTelaAdmin();
    $categorias = listarCategorias();
    include_once('./view/cadastrarNoticia-view');
    cadastrarNoticia($titulo,$descricao,$img,$categoriaId);
};