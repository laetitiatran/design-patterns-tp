<?php

/*
	Generic Adapter handling XML APIs and exposing
	a toJSON method to parse data.
*/
class Adapter {

	function __construct(
		$classname,
		$attribute_name="raw"
	)
	{
		$this->attribute_name = $attribute_name;
		$this->instance = new $classname;

		$this->xml = new SimpleXMLElement(
			$this->instance->{$this->attribute_name}
		);
	}


	function toJSON()
	{
		return json_encode($this->xml);
	}
}
