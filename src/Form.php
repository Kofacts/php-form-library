<?php
namespace Form\FormHelper;

/**
* @package PHP Form Library
* @author  Obodugo Rapheal Prince
**/

class Form
{
	protected $name;
	protected static $method;
	protected static $url;
	protected static $option;
	protected static $fields=[];


	public function __construct()
	{

	}

	/** 
	* @param method and url
	* The Method= GET || POST and url= url of Request Method.
	*/
	public static function Open($method,$url)
	{
		self::$method=$method;
		self::$url=$url;
		if($method=="POST" || $method=="post")
		{
			return "<form method='$method' action='$url'>\n";
		}
		elseif($method=="GET" || $method=="get")
		{
			return "<form method='GET' action='$url'>\n";
		}
		else{
			//force the user to use the POST method.
			return "<form method='POST' action='$url'>\n";
		}

		//return "This is the beginning of the test"

	}

	public static function Close()
	{
		return "\n</form>";

	}

	public static function Input($option,$fields)
	{
		self::$option=$option;
		self::$fields[]=$fields;
		//Verify which option the user chose.
		if($option=="TEXT" || $option=="text")
		{
			//create the form using the
			if(!empty($fields['style']))
			{
				//Meaning the user entered some inline-CSS styles.
				$name_field=$fields['name'];
				$style_field=$fields['style'];
				$form_input="<input type='text' name='$name_field' style='$style_field'>\n</input>"; 
				return $form_input;
			}
			else{
				$form_input="<input type='text' name='$name_field'>\n</input>"; 
				return $form_input;

			}
		}
		
	}

	//public static function 
}