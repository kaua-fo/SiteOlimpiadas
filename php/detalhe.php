<?php
include_once('tituloSite.php');

if($_GET && isset($_GET['noticia'])){
    $noticiaId = $_GET['noticia'];
}else{
    $noticiaId = null;
}
$noticia = buscarNoticia($noticiaId);
var_dump($noticia);die;
?>

<div class="divInterna">
    <img class="imgAtleta" src="<?= $noticia['img'];?>">
    <h1 class="title"><?= $noticia['titulo'];?></h1>
    <br>
    <p class="info"><?= $noticia['descricao'];?></p>
</div>