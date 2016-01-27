<?php

// --------------------------------------------------------------------------
// Отправка запроса на сервер
// --------------------------------------------------------------------------

function reco_send_server($action="", $param = array()) {
	$t = reco_send(reco_client_config_serverurl().'?action='.$action, $param);
	// ... do next thing

	return json_encode(array(
		"errstr" => ""
	));
}

?>