<?php $listaNoticia = criarLista(); ?>
        <br>
        <h1>BEM VINDO À INFOLYMPIC</h1>
        <br>
        <h2>Aqui é onde você encontra informações sobre os principais atletas brasileiros nas olimpíadas</h2>
        <br>
        <br>
    <div class="divInterna">
        <img src="<?= $listaNoticia[0]['imagem'];?>">
        <h1 class="title"><?= $listaNoticia[0]['título'];?></h1>
        <p class="info"><?= $listaNoticia[0]['descrição'];?></p>
    </div>