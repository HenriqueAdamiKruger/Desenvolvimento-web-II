<?php

class body{
    private $dados;

    function __construct($dados){
        $this->dados = $dados;
    }

    function __toString(){
        return  '<body> ' . 
                    $this->dados . 
                '</body>';
    }
}