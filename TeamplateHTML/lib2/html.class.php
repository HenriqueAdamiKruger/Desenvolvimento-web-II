<?php

class html{
    private $vLang;
    private $vCharset;
    private $vTitle;
    private $vConteudo;

    function __construct($vLang, $vCharset, $vTitle, $vConteudo){
        $this->vLang = $vLang;
        $this->vCcharset = $vCharset;
        $this->vTitle = $vTitle;
        $this->vConteudo = $vConteudo;
    }

    function __toString(){
        $return = '<!DOCTYPE html>
                  <html lang="' . $this->vLang . '">';

        $return .= '<head>
                       <meta charset="' . $this->vCharset . '">';

        $return .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">';

        $return .= '<title>' . $this->vTitle . '</title>';

        $return .= '</head>
                    <body>' . 
                        $this->vConteudo . 
                   '</body>
                    </html>';
        
        return $return;
    }
}
