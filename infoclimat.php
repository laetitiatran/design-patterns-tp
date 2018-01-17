<?php

class InfoClimat {

	static public $base_url = 'http://www.infoclimat.fr/public-api/gfs/xml?_ll=48.85341,2.3488&_auth=BhwCFVYoBCYEKVNkA3VSe1U9UGUNewYhB3sHZABlBHkHbABhBWVWMFA%2BBnsBLlVjUXxVNl5lUmJTOAB4WihePwZsAm5WPQRjBGtTNgMsUnlVe1AxDS0GIQdlB2gAaAR5B2UAYQV4VjZQOAZ6ATJVaVF9VSpeYFJvUzEAYVo3XjUGYgJgVjAEYQR0Uy4DNlI3VWNQZA1jBjcHYgdpAG4EbwdgAGAFNFY1UCEGZAE2VWNRZlU9XmRSalM5AHhaKF5EBhYCe1Z1BCQEPlN3Ay5SM1U4UGQ%3D&_c=1ae75db69f57ff8c9b41c9cdf3fa7eb7';

	function __construct() {
		$this->raw = file_get_contents(self::$base_url);
		$this->xml = new SimpleXMLElement($this->raw);
	}

	function getAllInfos() {
		return $this->raw;
	}
}

