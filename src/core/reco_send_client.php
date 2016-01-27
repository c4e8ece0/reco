<?php

// --------------------------------------------------------------------------
// Отправка запроса на клиента
// --------------------------------------------------------------------------

function reco_send_client($action="", $param = array()) {
	$t = reco_send(reco_server_config_clienturl().'?action='.$action, $param);
	// ... do next thing
}

?>