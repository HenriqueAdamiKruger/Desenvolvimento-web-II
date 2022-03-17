<?php

class HyperLink {
	private $description;
	private $classes;
	private $href;

	public function __construct($description, $href, $classes = null) {
		$this->description = $description;
		$this->href = $href;
		$this->classes = $classes;
	}

	public function __toString() {
		$html = "<a href='" . $this->href . "'";

		if(!is_null($this->classes))
		{
			$html .= " class='" . $this->classes . "'";
		}

		$html .= ">" . $this->description . "</a>\n";
		
		return $html;
	}


}