<?php
class Imc
{
    //atributos
    private $nome;
    private $email;
    private $peso;
    private $altura;

    //Construtor
    public function __construct($nome = null, $email = null, $peso = null, $altura = null, $imc = null, $classificacao = null)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setPeso($peso);
        $this->setAltura($altura);

    }

    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }

    /**
     * tabelaImc
     * Retorna o estado da pessoa
     * baseado no IMC dela
     */
    public static function tabelaImc($imc)
    {
        if($imc <= 16){
            $classificacao = 'Magreza grave';
        }elseif($imc >16 && $imc <17){
            $classificacao = 'Magreza moderada';
        }elseif($imc >=17 && $imc <=18.50){
            $classificacao = 'Magreza leve';
        }elseif($imc >=18.51 && $imc <25){
            $classificacao = 'Peso ideal';
        }elseif($imc >=25 && $imc <30){
            $classificacao = 'Sobrepeso';
        }elseif($imc >=30 && $imc <35){
            $classificacao = 'Obesidade grau I';
        }elseif($imc >=35 && $imc <40){
            $classificacao = 'Obesidade grau II ou severa';
        }elseif($imc >=40){
            $classificacao = 'Obesidade grau III ou mórbida';
        }
        return $classificacao;
    }

    /**
     * calcularImc
     * Calcula o Imc e retorna 
     * o resultado
     */
    public static function calcularImc($peso,$altura)
    {
        $imc = 0;
        if($peso && $altura){
            $imc = $peso / ($altura * $altura);
        }
        return round($imc, 2);
    }

    public static function imcBuscarPorId($id)
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM imc WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    function cadastrarImc($imc, $classificacao)
    {
        if (!$this->nome || !$this->email || !$this->peso || !$this->altura || !$imc || !$classificacao){return;}
        $sql = "INSERT INTO `imc` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
        VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

}