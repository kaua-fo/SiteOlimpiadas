<div class="background-form">
    <form method="POST" action="#">
        <h1>Cadastre-se para acompanhas as notícias:</h1>
            <input name="nome" placeholder="Nome" type="text" required>
            <br>
            <input name="email" type="email" placeholder="Email" id="email" required>
            <br>
            <input name="telefone" type="text" id="phone" placeholder="Telefone"  required>
            <br>
            <input name="login" type="text" placeholder="Login" id="email" required>
            <?php if($mensagemErro){
                echo "<h3>Já existe um usuário com o login '$login' cadastrado, por favor, tente outro.</h3>";
            }; ?>
            <br>
            <input name="senha" type="password" placeholder="Digite uma senha válida..."required>
            <br>
            <input type="submit" value="Concluir">
    </form>
</div>