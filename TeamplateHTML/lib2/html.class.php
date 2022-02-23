<?php
class html{
    private $lang;
    private $dados;

    function __construct($lang, $dados){
        $this->lang = $lang;
        $this->dados = $dados;
    }

    function __toString(){
        return '<html lang="' . $this->lang . '">' .
                $this->dados . 
                '</html>';
    }

}