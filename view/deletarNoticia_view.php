<div class="background-form">
    <form method="POST" action="#">
        <h1>Deletar notícia:</h1>
            <label for="titulo"></label>
            <input type="text" placeholder="Digite o título da notícia:" id="email" name="titulo">
            <br>
            <?php if($mensagemErro){
                echo("<h3>ERRO: Não encontramos nenhuma notícia com o título '$titulo'</h3>");
            }; ?>
            <br>
            <input type="submit" value="Concluir">
    </form>
</div>