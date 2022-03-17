<?php

class Table {
	private $id;
	private $classes;
	private $thead;
	private $tbody;
	private $tfoot;

	public function __construct($id, $classes, $thead, $tbody, $tfoot) {
		$this->id = $id;
		$this->classes = $classes;
		$this->thead = $thead;
		$this->tbody = $tbody;
		$this->tfoot = $tfoot;
	}

	public function __toString() {
		$html = "<table";

		if (!is_null($this->id) && !empty($this->id)) 
		{
			$html .= " id='" . $this->id . "'";
		}

		if (!is_null($this->classes) && !empty($this->classes)) 
		{
			$html .= " class='" . $this->classes . "'";
		}

		$html .= ">";

		if (!is_null($this->thead) && !empty($this->thead)) 
		{
			$html .= $this->thead;
		}
		if (!is_null($this->tbody) && !empty($this->tbody)) 
		{
			$html .= $this->tbody;
		}
		if (!is_null($this->tfoot) && !empty($this->tfoot)) 
		{
			$html .= $this->tfoot;
		}

		$html .= "</table>";

		return $html;
	}
}