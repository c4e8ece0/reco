<?php

// --------------------------------------------------------------------------
// Получение базовой формы слова через phpMorphy
// --------------------------------------------------------------------------

function reco_morphy($str) {
	$arr = array_filter(array_map("trim", explode(" ", $str)), "strlen");
	//
	return implode(" ", $arr);
}

?>