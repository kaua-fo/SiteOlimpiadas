<div class="background-form">
    <form method="POST" action="#" enctype="multipart/form-data">
        <h1>Cadastrar noticia:</h1>
            <label for="titulo"></label>
            <input type="text" placeholder="Título" id="email" name="titulo">
            <br>
            <textarea
                class = "descricaoNoticia"
                id="tarea"
                name="descricao"
                placeholder="Descrição:"></textarea>
                <br>
            <label for="imagem"></label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <div class="input-box">
                <select name="categoria" class="name">
                    <?php foreach ($categorias as $itemCategoria):?>
                        <option value="<?=$itemCategoria['id']?>"><?=$itemCategoria['nome']?></option>
                    <?php endforeach;?>
                </select>
            </div>   
            <br>
            <input type="submit" value="Concluir">
    </form>
</div>