<?php

if($_GET && isset($_GET['pagina'])){
    $paginaUrl = $_GET['pagina'];
}else{
    $paginaUrl = null;
}

$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$resposta = 0;
$resposta = calcularImc($peso,$altura);
$classificacao = tabelaImc($resposta);
$listaNoticias = listarNoticias();
$data = dataAtual();
$hora = horaAtual();

if($paginaUrl === "principal"){
    include_once('./view/principal-view');
    cadastrarImc($nome,$email,$peso,$altura,$resposta,$classificacao);
};