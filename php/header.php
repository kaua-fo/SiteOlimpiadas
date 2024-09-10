<?php
$titulo = "BEM VINDO À INFOLYMPIC!";
$sub_titulo = "Aqui é onde você encontra informações sobre os principais atletas brasileiros nas olimpíadas.";
$exibir_titulo = true;
include_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="InfOlympic" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
        <?php if($paginaUrl === "login"): ?>
            <link rel="stylesheet" href="./css/login.css">
        <?php endif ?>
        <?php if($paginaUrl === "contato"): ?>
            <link rel="stylesheet" href="./css/contato.css">
        <?php endif ?>
        <?php if($paginaUrl === "registro"): ?>
            <link rel="stylesheet" href="./css/registro.css">
        <?php endif ?>
    <title>InfOlympic</title>
</head>
<header>
    <?php if($exibir_titulo){ ?>
        <a href="https://localhost/siteOlimpiadas/index.php?pagina=principal"><h6>InfOlympic</h6></a>
    <?php } ?>
        <nav><button class="botao" type="button"><a href="https://localhost/siteOlimpiadas/index.php?pagina=login">Login</a></button>
        <button class="botao" type="button"><a href="https://localhost/siteOlimpiadas/index.php?pagina=registro">Registro</a></button>
        <button class="botao" type="button"><a href="https://localhost/siteOlimpiadas/index.php?pagina=contato">Contato</a></button></nav>
</header>
<body>
<?php $listaNoticia = criarLista(); ?>