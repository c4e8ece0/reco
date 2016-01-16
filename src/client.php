<?php 
header('Content-type: application/json');
header('X-Robot-Tags: noindex, nofollow');

// --------------------------------------------------------------------------
// Клиентская часть RECO
// --------------------------------------------------------------------------


#############################################################################
# Подключение функций происходит в порядке: корневые, начальные, рабочие    #
# ОСОБОЕ ВНИМАНИЕ: МАСКИРОВАНИЕ ПРОИСХОДИТ ЗА СЧЁТ ИМЕНИ ФАЙЛА              #
# Таким образом можно легко подменять базовые функции на свои, но           #
# и накосячить с основными становится слишком просто.                       #
#############################################################################


// Путь до общей библиотеки функций
$core = dirname(__FILE__).DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR;
// Путь до начальной клиентской библиотеки функций
$client = dirname(__FILE__).DIRECTORY_SEPARATOR.'client'.DIRECTORY_SEPARATOR;
// Путь до проектной реализации функций для обмена данными 
$project = dirname(__FILE__).DIRECTORY_SEPARATOR.'project'.DIRECTORY_SEPARATOR;

// Определение расположение нужного файла
$funcs = array();
foreach(array($core, $client, $project) as $dir) {
	$arr = scandir($dir);
	foreach($arr as &$f) {
		if($f[0] == "." || $f[0] == "~") {
			continue;
		}
		$funcs[$f] = $dir.DIRECTORY_SEPARATOR.$f;
	}
}
// Подключение всех нужных функций
foreach($funcs as &$path) {
	include_once $path;
}

// Обработка запроса
switch(@$_GET["action"]) {
	case "ping":
	case "entities":   print reco_jsonize("reco_client_".$_GET["action"]); break;
	case "entitylist": print reco_jsonize("reco_client_".$_GET["action"]); break;
	case "detail":     print reco_jsonize("reco_client_".$_GET["action"]); break;
	case "404-like":
	default:           print reco_err("unknown action (".htmlspecialchars($_GET["action"]).")"); break;
}

?>