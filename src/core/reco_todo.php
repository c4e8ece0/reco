<?php

// --------------------------------------------------------------------------
// Выдача сообщения об ошибке из-за неготовности функционала
// --------------------------------------------------------------------------

function reco_todo($side, $action, $t) {
	return reco_err("TODO: $side.$action.$t");
}

?>