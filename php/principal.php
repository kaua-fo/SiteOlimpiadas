<div class="container">
<?php $listaNoticia = criarLista(); ?>
    <?php include_once('tituloSite.php'); ?>
    <section class="gridContainer">
        <div class="mainContent">
    <?php foreach ($listaNoticia as $topico) : ?>
                <a class="pag-link" href="<?= $topico["href"] ;?>">
                    <div class="categoryCard">
                        <img src="<?= $topico["imagem"] ;?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                        <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                        <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
                    </div>
                </a>
    <?php endforeach ?>
        </div>
        <aside class="sidebar">
            <div class="sidebarContent">
                <div class="IMC">
                    <form method="POST" action="imc.php">
                        <div>
                            <p>Índice de massa corporal</p>
                        </div>
                        <div>
                            <div>
                                <br>
                                <label for="itext">Peso(Kg):</label>
                                <br>
                                <br>
                                <input name="peso" placeholder="Digite seu peso..." id="itext" type="text"/>
                                <br>
                                <br>
                            </div>
                            <div>
                                <label for="itext">Altura(M):</label>
                                <br>
                                <br>
                                <input name="altura" placeholder="Digite sua altura..." id="itext" type="text"/>
                                <br>
                                <br>
                            </div>
                            <div>
                                <input type="submit" value="Calcular"/>
                            </div>
                        </div>
                    </form>
            </div>
                </div>
        </aside>
        </section>
</div>