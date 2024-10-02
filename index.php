<?php
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) ? $_POST['login'] : null;

$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$resposta = 0;

include_once('./php/configuracao.php');
include_once('./configuracao/conexao.php');
include_once('./php/funcoes.php');
$resposta = calcularImc($peso,$altura);
$classificacao = tabelaImc($resposta);
cadastrarImc($nome,$email,$peso,$altura,$resposta,$classificacao);
cadastrarRegistro($nome,$email,$telefone,$login,$senha);
cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem);



/**
 * Pegando informação da url
 */
if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$arrayUrl = criarArrayUrl();
$includeUrl = FALSE;

include_once('./php/header.php');
foreach($arrayUrl as $chave => $valor){
    if($paginaUrl === $chave){
        echo include_once($valor);
        $includeUrl = TRUE;
        return $includeUrl;
    };
};
// if($includeUrl === FALSE){
//     include_once('./php/paginaErro.php');
// };
include_once('./php/footer.php');