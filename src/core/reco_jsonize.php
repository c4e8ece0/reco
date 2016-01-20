<?php

// --------------------------------------------------------------------------
// Сборка массива в json-ответ
// --------------------------------------------------------------------------

function reco_jsonize($t) {
	if(strpos($t, "reco_") !== 0) {
		return reco_err("impossible function (".htmlspecialchars($t)."), reco_* required");
	}
	if(!function_exists($t)) {
		return reco_err("unknown function (".htmlspecialchars($t).")");
	}

	$r = $t();
	if(!isset($r["errstr"])) {
		return reco_err(htmlspecialchars($t).": errstr not exists");
	}
	if(!is_scalar($r["errstr"])) {
		return reco_err(htmlspecialchars($t).": errstr not scalar");	
	}

	$res = call_user_func_array($t, array_slice(func_get_args(), 1));
	// TODO: ... check fields, bububu

	return json_encode($res);
}

?>