<div class="container">
    <?php include_once('tituloSite.php'); ?>
    <section class="gridContainer">
        <div class="mainContent">
    <?php foreach ($listaNoticias as $topico) : ?>
        <a class="pag-link" href="<?= constant('URL_LOCAL_SITE_PAGINA').'detalhe'?>&noticia=<?= $topico["id"] ;?>">
            <div class="categoryCard">
                <img src="<?= constant("URL_LOCAL_SITE").'imagens/'.$topico["img"] ;?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
            </div>
        </a>
    <?php endforeach ?>
        </div>
        <aside class="sidebar">
            <div class="sidebarContent">
                <div class="IMC">
                    <form method="POST" action="#">
                        <p>Índice de massa corporal (IMC)</p>
                        <label for="itext" style="margin-left: 30%">Nome:</label><br>
                        <input name="nome" placeholder="Digite seu nome..." id="itext" type="text"/><br>
                        <label for="itext" style="margin-left: 30%">Email:</label><br>
                        <input name="email" placeholder="Digite seu emai..." id="itext" type="text"/><br>
                        <label for="itext" style="margin-left: 30%">Peso(Kg):</label><br>
                        <input name="peso" placeholder="Digite seu peso..." id="itext" type="text"/><br>
                        <label for="itext"style="margin-left: 30%">Altura(M):</label><br>
                        <input name="altura" placeholder="Digite sua altura..." id="itext" type="text"/><br>
                        <input type="submit" class="botton" style="margin-left: 27%" value="Calcular"/><br>
                    </form>
                    <h4>
                    resposta: <?= $resposta ?><br>
                    estado: <?= $classificacao ?>
                    </h4>
                </div>
            </div>
        </aside>
        </section>
</div>