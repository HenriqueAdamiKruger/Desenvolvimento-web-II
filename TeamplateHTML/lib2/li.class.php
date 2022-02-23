<?php

class li{
    private $css;
    private $dados;

    function __construct($class, $dados){
        $this->css = $class;
        $this->dados = $dados;
    }

    function __toString(){
        return "<li class=\"{$this->css}\">{$this->dados}</li>";
    }
}