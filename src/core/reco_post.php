<?php

// --------------------------------------------------------------------------
// Обработка POST-параметров
// --------------------------------------------------------------------------

function reco_post($param, $func) {
	switch($func) {
		case 'url':
			return null;

		case 'none':
			return null;

		case 'secret':
			return null;

		case 'ts':
			return null;

		default:
			return reco_panic(sprintf("Unknown func(%s)", $func));			
	}
}

?>