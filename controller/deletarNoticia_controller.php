<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

if($paginaUrl === 'deletarNoticia'){
    acesso::protegerTelaAdmin();
    $mensagemErro = false;
    if(noticia::verificarTituloExistente($titulo)){
        noticia::deletarNoticia($titulo);
    }else{
        $mensagemErro = true;
    }
    include_once("view/deletarNoticia_view.php");
}