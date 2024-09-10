<?php $listaNoticia = criarLista(); ?>
        <br>
        <h1><?php echo $titulo; ?></h1>
        <h2><?= $sub_titulo ?></h2>
            <?php foreach ($listaNoticia as $topico) { ?>
                <section class="gridContainer">
                    <div calss="mainContent">
                        <a class="pag-link" href="<?= $topico["href"] ;?>">
                            <div class="categoryCard">
                                <img alt="mainCardImg" class="mainCardImg" src="<?= $topico["imagem"] ;?>" width=320px height=180px>
                                <p class="mainCategoryCardTitle"><?= $topico["titulo"] ;?></p>
                                <p class="mainCategoryCardDescription"><?= reduzirStr($topico["descricao"], 200) ;?></p>
                            </div>
                        </a>
                    </div>
            <?php } ?>
                <aside class="sidebar">
                    <div class="imc">
                        <form class ="formImc">
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
                </aside>
                </section>