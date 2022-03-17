<?php

class Input {
	private $id;
	private $name;
	private $descricao;
	private $type;
	private $value;
	private $readonly;

	public function __construct($id, $name, $descricao, $type, $value = null, $readonly = false) {
		$this->id = $id;
		$this->name = $name;
		$this->descricao = $descricao;
		$this->type = $type;
		$this->value = $value;
		$this->readonly = $readonly;
	}

	public function __toString() {
		$html = "<span class='sr-only' id='span-" . $this->id . "' >" . $this->descricao . "</span>\n";
		$html .= "<input class='form-control' " . ($this->readonly ? 'readonly' : '') . " aria-describedby='span-" . $this->id . "' id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "' placeholder='" . $this->descricao . "' value='" . $this->value . "'/>\n";
		
		return $html;
	}


}