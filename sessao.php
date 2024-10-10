<?php
include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');
include_once('./php/funcoes.php');
$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;

$senha = criptografia($senha);
$confirmacaoLogin = confirmarLogin($login);
var_dump($confirmacaoLogin);

if(!empty($confirmacaoLogin) && $confirmacaoLogin["senha"] == $senha){
    session_start();
    $_SESSION['nome'] =  $confirmacaoLogin["nome"];
    echo "<h2>Bem vindo, $</h2>";
}else{
    echo "<h2>Login ou senha errado. Caso ainda não tenha uma conta, se registre para continuar.</h2>";?>
    <nav><button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'login'?>">Login</a></button>
    <nav><button class="botao" type="button"><a href="<?= constant('URL_LOCAL_SITE_PAGINA').'registro'?>">Login</a></button>
<?php }
?>