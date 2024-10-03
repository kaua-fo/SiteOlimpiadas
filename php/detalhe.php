<?php include_once('tituloSite.php');
if($_GET && isset($_GET['noticia'])){
    $noticiaId = $_GET['noticia'];
}else{
    $noticiaId = null;
}var_dump($noticiaId); ?>
    <div class="divInterna">
        <img class="imgAtleta" src="<?= $listaNoticias[$noticiaId]['img'];?>">
        <h1 class="title"><?= $listaNoticias[$noticiaId]['titulo'];?></h1>
        <br>
        <p class="info"><?= $listaNoticias[$noticiaId]['descricao'];?></p>
    </div>