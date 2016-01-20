<?php

// --------------------------------------------------------------------------
// Пробы всякой фигни на сервере RECO
// --------------------------------------------------------------------------

function reco_server_try() {
	ob_start();
	header("Content-type: text/plain; charset=utf-8");

	print "here";

	return ob_get_clean();
}


?>