<?php

class Div {
	private $lista = array();
	private $class;

	public function __construct($class = '', ...$content) {
		$this->class = $class;
		$this->lista = array_merge($this->lista, $content);
	}

	public function addElementToDiv(...$content) {
		$this->lista = array_merge($this->lista, $content);
	}

	public function __toString() {
		$div = '<div class="' . $this->class . '">';

		foreach ($this->lista as $item) 
		{
			$div .= $item;
		}

		$div .= "</div>\n";

		return $div;
	}
}