<?php

// --------------------------------------------------------------------------
// Выдача сообщения об ошибке из-за неготовности функционала
// --------------------------------------------------------------------------

function reco_todo($side, $action, $t) {
	return reco_err("TODO: %s.%s.%s", $side, $action, $t);
}

?>