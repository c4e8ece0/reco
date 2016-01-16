<?php

// --------------------------------------------------------------------------
// Выдача сообщения об ошибке из-за неготовности функционала
// --------------------------------------------------------------------------

function reco_todo($side, $action, $t) {
	return reco_err(sprintf("TODO: %s.%s.%s", htmlspecialchars($side), htmlspecialchars($action), htmlspecialchars($t)));
}

?>