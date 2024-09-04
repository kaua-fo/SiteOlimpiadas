<?php
$titulo = "BEM VINDO À INFOLYMPIC!";
$sub_titulo = "Aqui é onde você encontra informações sobre os principais atletas brasileiros nas olimpíadas.";
$exibir_titulo = true;
function letraMaiuscula($x){
    echo strtoupper($x);
};
include_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="InfOlympic" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>InfOlympic</title>
</head>
<header>
    <?php if($exibir_titulo){ ?>
        <a href="index.php"><h6>InfOlympic</h6></a>
    <?php } ?>
        <nav><button class="botao" type="button"><a href="./php/login.php">Login</a></button>
        <button class="botao" type="button"><a href="./php/registro.php">Registro</a></button>
        <button class="botao" type="button"><a href="./php/contato.php">Contato</a></button></nav>
</header>