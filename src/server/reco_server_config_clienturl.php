<?php

// --------------------------------------------------------------------------
// Получение урла клиента RECO
// --------------------------------------------------------------------------

function reco_server_config_clienturl() {
	return sprintf(
		"http://%s%sclient.php",
		$_SERVER["HTTP_HOST"],
		substr($_SERVER["REQUEST_URI"], 0, strpos($_SERVER["REQUEST_URI"], "server.php"))
	);
}

?>