<?php include_once('tituloSite.php');

if($_GET && isset($_GET['noticia'])){
    $noticiaId = $_GET['noticia'];
}else{
    $noticiaId = null;
}
$noticia = buscarNoticia($noticiaId);
?>
<div class="divExterna">
<div class="divInterna">
    <img class="imgAtleta" src="<?= constant("URL_LOCAL_SITE").'imagens/'.$noticia["img"] ;?>">
    <h1 class="title"><?= $noticia['titulo'];?></h1>
    <br>
    <p class="info"><?= $noticia['descricao'];?></p>
</div>
<h4>Notícias relacionadas: </h4>
<?php
$noticiaRelacionada = noticiasRelacionadas($noticia["categoria"],$noticia["titulo"]);
?>
<?php
$i = 0;
while($i < 4){
?>
<div class="noticiasRelacionadas">
    <span class="noticiacard">
    <a class="pag-link" href="<?= constant('URL_LOCAL_SITE_PAGINA').'detalhe'?>&noticia=<?= $noticiaRelacionada[$i]["id"]; ?>">
         <div class="categoryCard">
             <img src="<?= constant("URL_LOCAL_SITE").'imagens/'.$noticiaRelacionada[$i]["img"]; ?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
             <p class="mainCategoryCardTitle"><?= $noticiaRelacionada[$i]["titulo"]; ?></p>
             <p class="mainCategoryCardDescription"><?= reduzirStr($noticiaRelacionada[$i]["descricao"], 200); ?></p>
         </div>
<?php $i = $i+1; }?>
    </a>
    </span>
</div>
</div>