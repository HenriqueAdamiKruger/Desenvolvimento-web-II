<?php
class head{
    private $dados;

    function __construct($dados){
        $this->dados = $dados;
    }

    function __toString(){
        return  '<head>' . 
                    $this->dados .
                '</head>';
    }
}