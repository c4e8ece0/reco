<?php

// --------------------------------------------------------------------------
// Получение из строки валидного идентификатора
// --------------------------------------------------------------------------

function reco_slug() {
	$res = array();
	foreach(func_get_args() as $k => $v) {
		$key = $str = $v;
		$str = mb_strtolower($str, 'UTF-8');
		$str = preg_replace('/ый/u',  'yj',  $str);
		$str = preg_replace('/ья/u',  'jya', $str);
		$str = preg_replace('/ью/u',  'jyu', $str);
		$str = preg_replace('/ье/u',  'je',  $str);
		$str = preg_replace('/ьи/u',  'ji',  $str);
		$str = preg_replace('/ьё/u',  'jyo', $str);
		$str = preg_replace('/енц/u', 'enz', $str);

		$_tr = array(
			'а' => 'a', 'á' => 'a', 'ä' => 'a', 'å' => 'a', 'á' => 'a',
			'à' => 'a', 'ă' => 'a', 'â' => 'a', 'å' => 'a', 'ǻ' => 'a',
			'ä' => 'a', 'ã' => 'a', 'ą' => 'a', 'ā' => 'a', 'б' => 'b',
			'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'é' => 'e',
			'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
			'í' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
			'н' => 'n', 'о' => 'o', 'ö' => 'o', 'п' => 'p', 'р' => 'r',
			'с' => 's', 'т' => 't', 'у' => 'u', 'ú' => 'u', 'ů' => 'u',
			'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh',
			'щ' => 'sch', 'ъ' => 'j', 'ы' => 'y', 'ь' => '', 'э' => 'e',
			'ю' => 'yu', 'я' => 'ya',
			'&quot;' => ' ', '&laquo;' => ' ', '&raquo;' => ' ',
			'&mdash;' => ' ', '&ndash;' => ' ', '&nbsp;' => ' ', '&mbsp;' => ' ',
		);

		$str = strtr($str, $_tr);

		$str = preg_replace('/[^a-z0-9\-]/u', ' ',  $str);
		$str = preg_replace('/\s+/u', ' ', $str);
		$str = str_replace(' ', '-', trim($str));

		if($str) {
			$res[] = $str;
		}
	}
	return implode('-', $res);
}

?>