<?php
/**
 * Classe de conexão ao banco de dados usando PDO no padrão Singleton.
 * 
 * Exemplo de uso:
 * ```
 * require_once './Database.class.php';
 * $db = Database::conexao(); // Pega a instância da conexao com o banco de dados.
 * $insercao = $db->prepare("INSERT INTO pessoa (nome, idade) VALUES (:nome, :idade)"); // Prepara a instrução de inserção de uma pessoa no banco de dados.
 * $insercao->bindParam(':nome', $nome); // Faz a ligação entre o parâmetro ":name" da instrução preparada acima com a variável $nome (supondo que $nome contém uma sequência de caracteres fornecida pelo usuário).
 * $insercao->bindParam(':idade', $idade); // Faz a ligação entre o parâmetro ":idade" com a variável $idade (supondo que $idade contém um número fornecido pelo usuário).
 * $insercao->execute(); // Executa a instrução no banco de dados (com os parâmetros já substituídos por seus respectivos valores).
 * ```
 * 
 * Para mais informações, confira o Manual do PDO: https://www.php.net/manual/en/intro.pdo.php
 */

 class Database

 {
    # Variável que guarda a conecão PDO.
    protected static $db;

    # Private construvt - garante que a classe só possa ser instanciada internamente.
    private function   __construct()
    {  
        # Informações sobre o banco de dados:
            $db_host = "localhost";
            $db_nome = "infolympic";
            $db_usuario = "root";
            $db_senha = "";
            $db_driver = "mysql";
        
        # Informações sobre o sistema:
        $sistema_titulo = "Site";
        $sistema_email = "";

        try
        {
            #Atribui o objeto PDO à variável $db
        }
    }













































 }