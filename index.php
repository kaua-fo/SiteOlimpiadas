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
}else{
    include_once('./php/medina.php');
}
include_once('./php/footer.php'); 
?>