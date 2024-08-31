<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="Login" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <a href="../index.php"><h6>InfOlympic</h6></a>
        <nav><button type="button"><a href="../php/login.php">Login</a></button>
        <button type="button"><a href="../php/registro.php">Registro</a></button>
        <button type="button"><a href="../php/contato.php">Contato</a></button></nav>
    </header>
    <div class="background-form">
        <form>
            <h1>Faça o seu Login:</h1>
            <br>
            <br>
            <br>
            <div>
                <label for="email"></label>
                <input type="email" placeholder="Email" id="email" name="email" required=>
                <br>
                <br>
            </div>
            <div>
                <label for="tel"></label>
                <input type="tel" id="phone" placeholder="Telefone" name="phone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" required>
                <br>
                <br>
            </div>
            <div>
                <input type="submit" value="Concluir">
                <br>
            </div>
        </form>
    </div>
        <div>
            <footer class="footer"><span>InfOlympic</span><a class="linkFooter" href="#top">Voltar para o topo</a></footer>
        </div>
</body>
</html>