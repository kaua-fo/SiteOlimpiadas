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

    public static function upload($imagem)
    {
    if(!$imagem){return;};
    if(!$_FILES["fileToUpload"]){return;}
    $target_dir = "assets/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 900000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            return $_FILES["fileToUpload"]["name"];
        } else {
            // echo "Sorry, there was an error uploading your file.";
            return false;
        }
    }
    } 
    

    public static function listarNoticias()
    {
    $pdo = Database::conexao();
    $sql = "SELECT * FROM noticia";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
    }

    public static function buscarNoticia($id)
    {
    $pdo = Database::conexao();
    $sql = "SELECT * FROM noticia WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list[0];
    }

    public static function noticiasRelacionadas($categoriaId,$id)
    {
    if (!$categoriaId){return;}
    $pdo = Database::conexao();
    $sql = "SELECT * FROM `noticia` WHERE `id` != '$id' AND categoriaId LIKE '$categoriaId' LIMIT 5";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
    }

    public static function cadastrarCategoria($nomeCategoria)
    {
    if (!$nomeCategoria){return;}
    $sql = "INSERT INTO `categoria` (`nome`)
    VALUES(:nome)";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nomeCategoria);
    $result = $stmt->execute();
    return ($result)?true:false;
    }

    public static function verificarCategoriaDuplicada($nomeCategoria)
    {
    $pdo = Database::conexao();
    $sql = "SELECT * FROM categoria WHERE `nome` = '$nomeCategoria'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return($list)?false:true;
    }

    public static function listarCategorias()
    {
    $pdo = Database::conexao();
    $sql = "SELECT * FROM categoria";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
    }

    /**
     * ReduzirStr
    * Reduzir o tamanho de um texto
    * @param $str que representa o texto a ser reduzido
    * @param $quanridade que representa quantos caracteres vão ser exibidos
    */
    public static function reduzirStr($str,$quantidade)
    {
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
        return substr($str,0,$quantidade)." [...]";
    }else{
        return $str." [...]";
    };
    }

    public static function verificarTituloExistente($titulo)
    {
    $pdo = Database::conexao();
    $sql = "SELECT * FROM noticia WHERE titulo = '$titulo'";
    $stmt = $pdo->prepare($sql);
    $list = $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return ($list)?$list[0]:false;
    }

    public static function deletarNoticia($titulo)
    {
    if (!$titulo){return;}
    $sql = "DELETE FROM  `noticia` WHERE titulo = '$titulo'";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute();
    return ($result)?true:false;
    }

}