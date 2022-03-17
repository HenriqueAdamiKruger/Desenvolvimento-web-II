<?php

class Li {
	private $lista = array();
	private $classes;

	public function __construct($classes, ...$content) {
		$this->classes = $classes;
		$this->lista = array_merge($this->lista, $content);
	}

	public function addElement(...$content) {
		$this->lista = array_merge($this->lista, $content);
	}

	public function __toString() {
		$sUl = '<li class="'.$this->classes.'">';

		foreach ($this->lista as $sItemLista) 
		{
			$sUl .= $sItemLista;
		}
		
		$sUl .= "</li>\n";

		return $sUl;
	}

}