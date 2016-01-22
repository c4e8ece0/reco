<?php

// --------------------------------------------------------------------------
// Обработка POST-параметров
// --------------------------------------------------------------------------

function reco_post($param, $func) {
	$val = (string) @$_POST[$param];

	switch($func) {
		// ------------------------------------------------------------------
		case "none":
			return $val;
		// ------------------------------------------------------------------
		case "url":
			$opts = array(
			    "options" => array(
			        "default" => null,
			    ),
			);
			return filter_var($val, FILTER_VALIDATE_URL);
		// ------------------------------------------------------------------
		case "secret":
			if(strlen($param) != 32
		 		|| !preg_match("#[a-f0-9]{32}#", $param)
		 	) {
				return null;
			}
			return reco_server_checksecret($param) ? true : null;
		// ------------------------------------------------------------------
		case "chk":
			return md5($param);
		// ------------------------------------------------------------------
		default:
			return reco_panic(sprintf("Unknown func(%s)", $func));			
		// ------------------------------------------------------------------
	}
}

?>