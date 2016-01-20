<?php

// --------------------------------------------------------------------------
// Константы сервера
// --------------------------------------------------------------------------
// Словные:
// Mono|Di-term = словность токена
// Strict|Base = статистики по строгой и базовой формам слова
// Local|Global = локальные (сайтовые) или глобальные (яндекс?) данные
// TF = Term Frequency
// TD = Term Density
// PF = Passage Frequency
// PD = Passage Density
// BF = Block Frequency, абзац типа
// BD = Block Density
// DF = Document Frequency
// DD = Document Density
// = {Strict|Base}{Local|Global}{TF|TD|PF|PD|DF|DD}
// --------------------------------------------------------------------------

function reco_server_const($name = "", $preset = "") {
	static $name_arr;
	static $preset_arr;

	if($name_arr === null) {

		// Словность токенов из текста
		$preset_arr["all_token"] = array(
			"Mono", "Di", "Trio", "Passage",
		);

		// Словные константы
		$preset_arr["all_wordstat"] = array(
			"StrictLocalTF",  "StrictLocalTD",  "StrictLocalPF",  "StrictLocalPD",  "StrictLocalBF",  "StrictLocalBD",  "StrictLocalDF",  "StrictLocalDD",
			"StrictGlobalTF", "StrictGlobalTD", "StrictGlobalPF", "StrictGlobalPD", "StrictGlobalBF", "StrictGlobalBD", "StrictGlobalDF", "StrictGlobalDD",
			"BaseLocalTF",    "BaseLocalTD",    "BaseLocalPF",    "BaseLocalPD",    "BaseLocalBF",    "BaseLocalBD",    "BaseLocalDF",    "BaseLocalDD",
			"BaseGlobalTF",   "BaseGlobalTD",   "BaseGlobalPF",   "BaseGlobalPD",   "BaseGlobalBF",   "BaseGlobalBD",   "BaseGlobalDF",   "BaseGlobalDD",
		);

		// Полный набор имён
		$arr = array_merge(
			$preset_arr["all_token"],
			$preset_arr["all_wordstat"]
		);
		$name_arr = array_combine($arr, $arr);

		// Дополнительные константы
		$name_arr["foo"] = "bar";
	}

	if(isset($name_arr[$name])) {
		return $name_arr[$name];
	}

	if(isset($preset_arr[$preset])) {
		return $preset_arr[$preset];
	}

	reco_panic(__FUNCTION__, sprintf("Name or preset not found (%s|%s)", htmlspecialchars($name), htmlspecialchars($preset)));
}


?>