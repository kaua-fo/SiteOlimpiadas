<?php
class Acesso
{
    //Construtor
    public function __construct()
    {

    }

    public static function verificarLogin($login)
    {
        if (!$login){return;}
        $pdo = Database::conexao();
        $sql = "SELECT `id`,`nome`,`login`,`senha`,`categoria` FROM registro WHERE `login` = '$login'";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($list[0]);
    }
    
    public static function validacaoSenha($senhaDb,$senhaUser)
    {
        if(!$senhaDb || !$senhaUser){return false;};
        if($senhaDb == $senhaUser){return true;};
        return false;
    }

    public static function registrarAcessoValido($infoUser)
    {
        $_SESSION["usuario"]["nome"] = $infoUser['nome'];
        $_SESSION["usuario"]["id"] = $infoUser['id'];
        $_SESSION["usuario"]["categoria"] = $infoUser['categoria'];
        $_SESSION["usuario"]["status"] = 'logado';
    }

    public static function protegerTela()
    {
        if(!$_SESSION || !$_SESSION["usuario"]["status"] === 'logado'){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        };
    }
    
    public static function protegerTelaAdmin()
    {
        if(!$_SESSION){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        };
        if($_SESSION["usuario"]["status"] !== 'logado'){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        };
        if($_SESSION["usuario"]["categoria"] !== 'admin'){
            header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
        }
    }
    
    public static function limparSessao()
    {
        unset($_SESSION["usuario"]);
        header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    }
    
    public static function criptografia($senha)
    {
        if(!$senha)return False;
        return sha1($senha);
    }
    
}