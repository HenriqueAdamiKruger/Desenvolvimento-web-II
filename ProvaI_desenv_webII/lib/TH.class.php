<?php

class TH {
	private $classes;
	private $content = array();

	public function __construct($classes = '', ...$content) {
		$this->classes = $classes;
		$this->content = array_merge($this->content, $content);
	}

	public function addElement(...$content) {
		$this->content = array_merge($this->content, $content);
	}

	public function __toString() {
		$html = "<th";

		if (!is_null($this->classes) && !empty($this->classes)) 
		{
			$html .= " class='" . $this->classes . "'";
		}
		
		$html .= ">";

		foreach ($this->content as $obj) 
		{
			$html .= $obj;
		}

		$html .= "</th>";

		return $html;
	}
}