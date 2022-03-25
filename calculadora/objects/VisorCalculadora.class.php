<?php

class VisorCalculadora {
	private $value;

	public function __construct($value = 0) {
		$this->value = $value;
	}

	public function __toString() {
        $html = "<div> \n";
        $html .= "<div class='resultado'>" . $this->value . "</div> \n";
        $html .= "</div> \n";
		return $html;
	}
}