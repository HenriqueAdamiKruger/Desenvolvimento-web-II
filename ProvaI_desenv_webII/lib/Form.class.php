<?php

class Form {
	private $id;
	private $name;
	private $action;
	private $autocomplete;
	private $method;
	private $enctype;
	private $novalidate;
	private $classes;
	private $content = array();

	public function __construct($id, $name, $method, $classes, ...$content) {
		$this->id = $id;
		$this->name = $name;
		$this->method = $method;
		$this->classes = $classes;
		$this->content = array_merge($this->content, $content);
	}

	function addContent(...$content) {
		$this->content = array_merge($this->content, $content);
	}

	public function setAction($action) {
		$this->action = $action;
	}

	public function setAutocomplete($autocomplete) {
		$this->autocomplete = $autocomplete;
	}

	public function setEnctype($enctype) {
		$this->enctype = $enctype;
	}

	public function setNovalidate($novalidate) {
		$this->novalidate = $novalidate;
	}

	public function __toString() {
		$html = "<form";

		if (isset($this->id) && !is_null($this->id)) 
		{
			$html .= " id='" . $this->id . "'";
		}

		if (isset($this->name) && !is_null($this->name)) 
		{
			$html .= " name='" . $this->name . "'";
		}

		if (isset($this->method) && !is_null($this->method)) 
		{
			$html .= " method='" . $this->method . "'";
		}

		if (isset($this->classes) && !is_null($this->classes)) 
		{
			$html .= " class='" . $this->classes . "'";
		}

		if (isset($this->action) && !is_null($this->action)) 
		{
			$html .= " action='" . $this->action . "'";
		}

		if (isset($this->autocomplete) && !is_null($this->autocomplete)) 
		{
			$html .= " autocomplete='" . $this->autocomplete . "'";
		}

		if (isset($this->enctype) && !is_null($this->enctype)) 
		{
			$html .= " enctype='" . $this->enctype . "'";
		}

		if (isset($this->novalidate) && $this->novalidate) 
		{
			$html .= " novalidate";
		}
		
		$html .= ">";

		foreach ($this->content as $obj) 
		{
			$html .= $obj;
		}

		$html .= "</form>";

		return $html;
	}
}