<?php

class THead {
	private $classes;
	private $trs = array();

	public function __construct($classes, ...$trs) {
		$this->classes = $classes;
		$this->trs = array_merge($this->trs, $trs);
	}

	public function addElement(...$trs) {
		$this->trs = array_merge($this->trs, $trs);
	}

	public function __toString() {
		$html = "<thead";

		if (!is_null($this->classes) && !empty($this->classes)) 
		{
			$html .= " class='" . $this->classes . "'";
		}
		
		$html .= ">";

		foreach ($this->trs as $obj) 
		{
			$html .= $obj;
		}

		$html .= "</thead>";

		return $html;
	}
}