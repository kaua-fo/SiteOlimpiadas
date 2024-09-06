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
if($paginaUrl == "principal"){
    include_once('./php/principal.php');
}
if($paginaUrl == "medina"){
    include_once('./php/medina.php');
}
if($paginaUrl == "rayssa"){
    include_once('./php/rayssa.php');
}
if($paginaUrl == "rebeca"){
    include_once('./php/rebeca.php');
}
include_once('./php/footer.php'); 
?>