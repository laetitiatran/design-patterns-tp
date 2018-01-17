<?php

include_once('horoscope.php');
include_once('infoclimat.php');

include_once('adapter.php');

$horoscope = new Horoscope();

//$horoscope_adapter = new Adapter('Horoscope', 'data');
$horoscope_adapter = new Adapter($horoscope, 'data');
var_dump($horoscope_adapter->toJSON());



