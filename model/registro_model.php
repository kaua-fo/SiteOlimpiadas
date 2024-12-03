<?php
class Registro
{
    //atributos
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $login;
    private $senha;
    private $categoria;

    //Construtor
    public function __construct($nome = null, $email = null, $telefone = null, $login = null, $senha = null, $categoria = null)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setLogin($login);
        $this->setSenha($senha);
        $this->setCategoria($categoria);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getCategoria(){
        return $this->categoria;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    function cadastrarRegistro()
    {
        if(!$this->nome || !$this->email || !$this->telefone || !$this->login ||!$this->senha){return;}
        $sql = "INSERT INTO `registro` (`nome`,`email`,`telefone`,`login`,`senha`,`categoria`)
        VALUES(:nome,:email,:telefone,:login,:senha,:categoria)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':login', $this->login);
        $stmt->bindParam(':senha',$this->senha);
        $stmt->bindParam(':categoria',$this->categoria);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

}