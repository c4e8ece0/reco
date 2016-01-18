<?php

// --------------------------------------------------------------------------
// Получение урла сервера RECO
// --------------------------------------------------------------------------

function reco_client_config_serverurl() {
	return sprintf(
		"http://%s%sserver.php",
		$_SERVER['HTTP_HOST'],
		substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'client.php'))
	);
}

?>