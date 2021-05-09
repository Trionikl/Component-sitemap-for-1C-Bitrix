<?
	//багаж - замена
	foreach ($arResult as $key => $value) {	
		$pos      = strripos($arResult[$key][LINK], "bagaj");
		if ($pos === false) {
		}
		else {
			$arResult[$key][LINK] = str_replace("bagaj", "bagazh", $arResult[$key][LINK]);
		}
	}
	//echo "<pre>Template arResult: "; print_r($arResult); echo "</pre>";
?>