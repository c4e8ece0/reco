<?php

// --------------------------------------------------------------------------
// Сборка массива в json-ответ
// --------------------------------------------------------------------------

function reco_jsonize($t) {
	if(strpos($t, 'reco_') === 0 && function_exists($t)) {
		return json_encode(json_encode((array) $t));
	}
	return reco_err("unknown function (".htmlspecialchars($t).")");
}

?>