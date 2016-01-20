<?php

// --------------------------------------------------------------------------
// Пробы всякой фигни на клиенте RECO
// --------------------------------------------------------------------------

function reco_client_try() {
	ob_start();
	header("Content-type: text/plain; charset=utf-8");

	print reco_client_config_serverurl();

	return ob_get_clean();
}


?>