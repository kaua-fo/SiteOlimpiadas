<?php
class Time
{
    //Construtor
    public function __construct()
    {

    }

     /* TimeZone
     * Retorna o fuso horário local
     * que definirá a hora e a data
     */
    public static function timeZone(){
        date_default_timezone_set("America/Recife");
    }

    /**
     * DataAtual
     * Retorna a data atualizada
     */
    public static function dataAtual(){
        return date("d/m/Y");
    }

    /**
     * horaAtual
     * Retorna a hora atualizada
     */
    public static function horaAtual(){
        return date("h:i:sa");
    }
}