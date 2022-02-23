<?php
class meta{
    private $dados;
    
    function __construct($dados){
        $this->dados = $dados;
    }

    function __toString(){
        return '<meta ' . $this->dados . '>';
    }
}