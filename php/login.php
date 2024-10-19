<?php //var_dump($confirmacaoLogin)?>
    <div class="background-form">
        <form method="POST" action="#">
            <h1>Faça o seu Login:</h1>
                <label for="login"></label>
                <input type="text" placeholder="Login" name="login" required>
                <br>
                <label for="senha"></label>
                <input type="password" placeholder="Digite sua senha" name="senha" required>
                <br>
                <?php if($mensagemErro){
                    echo "<h4>Login ou senha incorretos. Tente novamente ou se registre para continuar.</h4>";
                }
                if($mensagemAcesso){
                    echo "<h4>Login efetuado com sucesso!</h4>";
                }?>
                <input type="submit" value="Concluir">
        </form>
    </div>