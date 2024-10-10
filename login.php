<?php //var_dump($confirmacaoLogin)?>
    <div class="background-form">
        <form method="POST" action="sessao.php">
            <h1>Faça o seu Login:</h1>
                <label for="login"></label>
                <input type="text" placeholder="Login" name="login" required>
                <br>
                <label for="senha"></label>
                <input type="password" placeholder="Digite sua senha" name="senha" required>
                <br>
                <input type="submit" value="Concluir">
        </form>
    </div>