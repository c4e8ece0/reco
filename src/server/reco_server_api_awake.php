<?php

// --------------------------------------------------------------------------
// API - Регистрация|Перерегистрация|Пинг клиента
// --------------------------------------------------------------------------

function reco_server_api_awake($siteurl, $name, $secret) {
	// TODO
	// 1. Check secret
	// 2. Create/Update client
	
	if(!reco_server_checksecret()) {
		return reco_err("Bad secret");
	}

	if(reco_server_db()->CreateUpdateClient($siteurl, $name, $secret)) {
		return array("ok" => "ok", "errstr" => "");
	}

	return array(

	);
}

?>