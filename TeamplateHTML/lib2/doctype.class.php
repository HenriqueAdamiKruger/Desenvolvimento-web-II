<?php

class doctype{
    private $doctype;

    function __construct($doctype){
        $this->doctype = $doctype;
    }

    function __toString(){
        return '<!DOCTYPE ' . $this->doctype . '>'; 
    }
}