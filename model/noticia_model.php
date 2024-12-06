<?php
class Noticia
{
    //atributos
    private $titulo;
    private $descricao;
    private $imagem;
    private $categoriaId;

    //Construtor
    public function __construct($titulo = null, $descricao = null, $imagem = null, $categoriaId)
    {
        $this->setTitulo($titulo);
        $this->setDescricao($descricao);
        $this->setImagem($imagem);
        $this->setCategoriaId($categoriaId);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getImagem(){
        return $this->imagem;
    }
    public function getCategoriaId(){
        return $this->categoriaId;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
    public function setCategoriaId($categoriaId){
        $this->categoriaId = $categoriaId;
    }

    function cadastrarNoticia()
    {
    if (!$this->titulo || !$this->descricao || !$this->imagem || !$this->categoriaId){return;}
    $sql = "INSERT INTO `noticia` (`titulo`,`descricao`,`imagem`,`categoriaId`)
    VALUES(:titulo,:descricao,:imagem,:categoriaId)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $this->titulo);
    $stmt->bindParam(':descricao', $this->descricao);
    $stmt->bindParam(':imagem', $this->imagem);
    $stmt->bindParam(':categoriaId',$this->categoriaId);
    $result = $stmt->execute();
    return ($result)?true:false;
    }
}