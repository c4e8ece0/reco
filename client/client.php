<?php

// --------------------------------------------------------------------------
// Клиентская часть от RECO
// --------------------------------------------------------------------------
header('Content-type: application/json');

// Подключение функций происходит в порядке: корневые, начальные, рабочие
// ОСОБОЕ ВНИМАНИЕ: МАСКИРОВАНИЕ ПРОИСХОДИТ ЗА СЧЁТ ИМЕНИ ФАЙЛА
// Таким образом можно легко подменять базовые функции на свои, но
// и накосячить с основными становится слишком просто.

// Путь до общей библиотеки функций
$core = dirname(__FILE__).DIRECTORY_SEPARATOR.'reco'.DIRECTORY_SEPARATOR;
// Путь до начальной/пустой клиентской библиотеки функций
$void = dirname(__FILE__).DIRECTORY_SEPARATOR.'client_void'.DIRECTORY_SEPARATOR;
// Путь до расширенной клиентской библиотеки
$work = dirname(__FILE__).DIRECTORY_SEPARATOR.'client'.DIRECTORY_SEPARATOR;

// Определение расположение нужного файла и его подключение
foreach(array($core, $void, $local) as $dir) {
	$arr = scandir($dir);
	foreach($arr as &$f) {
		if($f[0] == "." || $f[0] == "~") {
			continue;
		}
		include_once $dir.DIRECTORY_SEPARATOR.$f;
	}
}

// Обработка запроса
switch(@$_GET["action"]) {
	case "ping":
	case "entities":
	case "markers":    print reco_json("reco_client_".$_GET["action"]); break;
	case "entitylist": 
	case "markerlist": print reco_json("reco_client_".$_GET["action"], $_GET["target"]); break;
	case "404-like":
	default:           print reco_json("reco_err", "unknown action"); break;
}

?>