<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="Gabriel Medina" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Gabriel Medina</title>
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
            <h1>Cadastre-se para acompanhas as notícias:</h1>
            <br>
            <br>
            <br>
            <div>
                <input name="itext" id="itext" placeholder="Nome" type="text" required>
                <br>
                <br>
            </div>
            <div>
                <input type="email" placeholder="Email" id="email" name="email" required=>
                <br>
                <br>
            </div>
            <div>
                <input type="tel" id="phone" placeholder="Telefone" name="phone" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required>
                <br>
                <br>
            </div>
            <div>
                <input type="submit" value="Concluir">
                <br>
            </div>
        </form>
    </div>
    <footer><span>InfOlympic</span><a class="linkFooter" href="#top">Voltar para o topo</a></footer>
</body>
</html>