<?php

// --------------------------------------------------------------------------
// Саморегистрация на сервере
// --------------------------------------------------------------------------

function reco_client_api_ping() {
	return reco_send_server("awake", reco_client_profile());
}

?>