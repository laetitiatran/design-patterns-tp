<?php

// Include Horoscope and InfoClimat
// Required to instanciate it within Facade
include_once('horoscope.php');
include_once('infoclimat.php');


class Facade {
	
	function __construct($user)
	{
		$this->horoscope = new Horoscope();
		$this->infoclimat = new InfoClimat();
		$this->user = $user;
	}


	/*
		Check $this->user has astrological sign defined,
		Retuns Horoscope API info if yes,
		Else returns false
	*/
	function getHoroscope()
	{
		if($this->user->astrologicalSign === null) {
			return false;
		}
		else {
			return $this->getInfos($this->user->astrologicalSign);
		}
	}


	/*
		Check $this->user has location defined,
		Returns InfoClimat data if yes,
		Else, returns false
	*/
	function getInfoClimat()
	{
		if($this->user->location === null) {
			return $this->infoclimat->getInfos($this->user->location);
		}
		else {
			return $this->infoclimat->getAllInfos();
		}
	}
}

