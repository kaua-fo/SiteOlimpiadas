<?php
/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

include_once('./php/header.php');

if($paginaUrl === "principal"){
    include_once('./php/principal.php');
}elseif($paginaUrl === "login"){
    include_once('./php/login.php');
}elseif($paginaUrl === "registro"){
    include_once('./php/registro.php');
}elseif($paginaUrl === "contato"){
    include_once('./php/contato.php');
}elseif($paginaUrl === "medina"){
    include_once('./php/medina.php');
}elseif($paginaUrl === "rayssa"){
    include_once('./php/rayssa.php');
}elseif($paginaUrl === "rebeca"){
    include_once('./php/rebeca.php');
}elseif($paginaUrl === "beatriz"){
    include_once('./php/beatriz.php');
}elseif($paginaUrl === "julia"){
    include_once('./php/julia.php');
}elseif($paginaUrl === "flavia"){
    include_once('./php/flavia.php');
}else{
    include_once('./php/paginaErro.php');
}

include_once('./php/footer.php'); 
