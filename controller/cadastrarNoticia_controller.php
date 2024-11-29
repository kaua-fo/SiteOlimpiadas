<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$imagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fileToUpload'])) ? $_POST['fileToUpload'] : null;

$categoriaId = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['categoria'])) ? $_POST ['categoria'] : null;

if($paginaUrl === "cadastrarNoticia"){
    acesso::protegerTelaAdmin();
    $categorias = listarCategorias();
    include_once('./view/cadastrarNoticia-view.php');
    if($_POST){
        $nomeDaImagem = upload($imagem);
        cadastrarNoticia($titulo,$descricao,$nomeDaImagem,$categoriaId);
    };
};