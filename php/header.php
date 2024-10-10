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
            <link rel="stylesheet" href="./css/contato.css">
        <?php endif ?>
        <?php if($paginaUrl === "cadastrarNoticia"): ?>
            <link rel="stylesheet" href="./css/login.css">
        <?php endif ?>
<title>InfOlympic</title>
</head>
<header>
        <a href="<?= constant('URL_LOCAL_SITE_PAGINA').'principal'?>""><h6>InfOlympic</h6></a>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'cadastrarNoticia'?>">Cadastrar notícias</a></button></nav>
        <nav><button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'login'?>">Login</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'registro'?>">Registro</a></button>
        <button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'contato'?>">Contato</a></button></nav>
</header>
<body>