<?php

// --------------------------------------------------------------------------
// Сборка массива в json-ответ
// --------------------------------------------------------------------------

function reco_jsonize($t) {
	if(strpos($t, "reco_") !== 0) {
		return reco_err("impossible function (%s), reco_* required", $t);
	}
	if(!function_exists($t)) {
		return reco_err("unknown function (%s)", $t);
	}

	$arr = array_slice(func_get_args(), 1);
	foreach($arr as $k => $v) {
		if($v === null) {
			return reco_err("Bad param or validator for %s(param #%d)", $t, $k+1);
		}
	}

	$r = call_user_func_array($t, $arr);
	// TODO: ... check fields, bububu

	if(!isset($r["errstr"])) {
		return reco_err("%s: errstr not exists", $t);
	}

	if(!is_scalar($r["errstr"])) {
		return reco_err("%s: errstr not scalar", $t);
	}

	return json_encode($r);
}

?>