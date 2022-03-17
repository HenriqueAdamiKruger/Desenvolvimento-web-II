<?php

class Button {
	private $description;
	private $type;
	private $classes;

	public function __construct($description, $type, $classes = null) {
		$this->description = $description;
		$this->type = $type;
		$this->classes = $classes;
	}

	public function __toString() {
		$html = "<button type='" . $this->type . "'";

		if(!is_null($this->classes))
		{
			$html .= " class='" . $this->classes . "'";
		}

		$html .= ">" . $this->description . "</button>\n";
		
		return $html;
	}
}