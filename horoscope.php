<?php


class Horoscope {

	static public $base_url = 'https://www.horoscope.fr/rss/horoscope/jour';

	function __construct() {
		$this->data = file_get_contents(self::$base_url);
		$this->xml = new SimpleXMLElement($this->data);
	}

	function getInfos() {
	}
}

