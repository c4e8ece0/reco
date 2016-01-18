<?php

// --------------------------------------------------------------------------
// Список сущностей клиента возврата в API
// --------------------------------------------------------------------------

function reco_client_api_entities() {
	return array(
		"list" => array(
			array(
				"id" => "section",
				"title" => "Разделы",
				"num" => 144,
				"last" => 123123124,
				"detail" => 0,
			),
			array(
				"id" => "article",
				"title" => "Статьи",
				"num" => 1244,
				"last" => 123123123,
				"detail" => 1,
			),
			array(
				"id" => "item",
				"title" => "Товары",
				"num" => 1044,
				"last" => 123123125,
				"detail" => 1,
			),
			array(
				"id" => "forum",
				"title" => "Форум",
				"num" => 13125,
				"last" => 123123127,
				"detail" => 1,
			),
			array(
				"id" => "sale",
				"title" => "Акции",
				"num" => 15,
				"last" => 123123126,
				"detail" => 1,
			),
		),
		"errstr" => "",
	);
}

?>