<?php
header("Content-type: application/json");
header("X-Robot-Tags: noindex, nofollow");

// --------------------------------------------------------------------------
// Серверная часть RECO
// --------------------------------------------------------------------------

$core   = dirname(__FILE__).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR;
$server = dirname(__FILE__).DIRECTORY_SEPARATOR."server".DIRECTORY_SEPARATOR;

$funcs = array();
foreach(array($core, $server) as $dir) {
	$arr = scandir($dir);
	foreach($arr as &$f) {
		if($f[0] == "." || $f[0] == "~") {
			continue;
		}
		$funcs[$f] = $dir.DIRECTORY_SEPARATOR.$f;
	}
}
foreach($funcs as &$path) {
	include_once $path;
}

switch(@$_GET["action"]) {
	case "awake":
			print reco_jsonize(
				"reco_server_api_awake",
				reco_post('siteurl', 'url'),
				reco_post('name', 'none'),
				reco_post('secret', 'secret'),
				reco_post('ts', 'ts')
			);
			break;
	case "fetch": print reco_todo("server", $_GET["action"], "забрать какой-то контент (список или элемент)"); break;
	case "index": print reco_todo("server", $_GET["action"], "проиндексировать контент"); break;
	case "fill":  print reco_todo("server", $_GET["action"], "закрыть дырки в данных (посчитать метрики)"); break;
	case "calc":  print reco_todo("server", $_GET["action"], "посчитать предсказания"); break;
	case "make":  print reco_todo("server", $_GET["action"], "дать рекомендации по группам размещения"); break;
	case "ws":    print reco_todo("server", $_GET["action"], "reco_stat_word(\$_GET['list'], reco_server_config_wordstat())"); break;
	case "test":  print reco_server_try(); break;
	case "":      print reco_err("empty action"); break;
	default:      print reco_err("unknown action (%s)", @$_GET["action"]); break;
}

?>