<div class="container">
<?php $listaNoticia = criarLista(); ?>
    <br>
    <h1><?php echo $titulo; ?></h1>
    <h2><?= $sub_titulo ?></h2>
    <section class="gridContainer">
        <div class="mainContent">
    <?php foreach ($listaNoticia as $topico) { ?>
                <a class="pag-link" href="<?= $topico["href"] ;?>">
                    <div class="categoryCard">
                        <img src="<?= $topico["imagem"] ;?>" alt="mainCardImg" class="mainCardImg" width=320px height=180px>
                        <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                        <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
                    </div>
                </a>
    <?php } ?>
        </div>
        <aside class="sidebar">
            <div class="sidebarContent">
                <div class="IMC">
                    <form>
                        <div>
                            <p>Índice de massa corporal</p>
                        </div>
                        <div>
                            <div>
                                <br>
                                <label for="itext">Peso(Kg):</label>
                                <br>
                                <br>
                                <input name="itext" placeholder="Digite seu peso..." id="itext" type="text"/>
                                <br>
                                <br>
                            </div>
                            <div>
                                <label for="itext">Altura(M):</label>
                                <br>
                                <br>
                                <input name="itext" placeholder="Digite sua altura..." id="itext" type="text"/>
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