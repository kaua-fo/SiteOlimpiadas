<?php
class Contato
{
    //atributos
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $mensagem;

    //Construtor
    public function __construct($nome = null, $sobrenome = null, $email = null, $telefone = null, $mensagem = null){
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setMensagem($mensagem);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getMensagem(){
        return $this->mensagem;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    function cadastrarContato()
    {
    if (!$this->nome || !$this->sobrenome || !$this->email || !$this->telefone || !$this->mensagem){return;}
    $sql = "INSERT INTO `contato` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
    VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':sobrenome', $this->sobrenome);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':telefone', $this->telefone);
    $stmt->bindParam(':mensagem', $this->mensagem);
    $result = $stmt->execute();
    return ($result)?true:false;
    }

}