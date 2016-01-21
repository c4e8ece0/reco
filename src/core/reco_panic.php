<?php

// --------------------------------------------------------------------------
// Когда всё плохо и надежды нет
// --------------------------------------------------------------------------

function reco_panic($func, $msg) {
	header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
	print reco_err("%s: %s", $func, $msg);
	die();
}

?>