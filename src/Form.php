<?php
namespace Form\FormHelper;

/**
* @package PHP Form Library
* @author  Obodugo Rapheal Prince
**/

class Form
{
	protected $name;
	protected $method;
	protected $url;

	public function __construct()
	{

	}

	/** 
	* @param method and url
	* The Method= GET || POST and url= url of Request Method.
	*/
	public static function Open($method,$url)
	{
		$this->method=$method;
		$this->url=$url;
		return "<form method='".$method."' action='".$url."''>"

	}

	public static function Close()
	{

	}

	public static function 
}