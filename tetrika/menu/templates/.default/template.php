<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul id="vertical-multilevel-menu">
	
	<?
		$previousLevel = 0;
	foreach($arResult as $key => $arItem):?>
	
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
	<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	
	<?if ($arItem["IS_PARENT"]):?>
	
	<?if ($arItem["DEPTH_LEVEL"] == 1):?>
	<li class="vertical-multilevel-menu-level-1">
		
		<button id="btn-map_<?=$key?>" class="map-level-btn map-level-btn-1" type="button">
			<img class="plus-solid" src="<?=$this->GetFolder();?>/images/plus-solid.svg" width="15" height="15" alt="плюс">
			<img class="minus-solid visible-none-svg" src="<?=$this->GetFolder();?>/images/minus-solid.svg" width="15" height="15" alt="минус">
		</button>		
		
		<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>">
		<?=$arItem["TEXT"]?></a>
		<ul id="level-ul-2-map-<?=$key?>" class="root-item vertical-multilevel-menu-level-ul-2 visible-none-svg">
			<?else:?>
			<li class="vertical-multilevel-menu-level-li-2">
				<button id="btn-2-map_<?=$key?>"class="map-level-btn map-level-btn-2" type="button">
					<img class="plus-solid" src="<?=$this->GetFolder();?>/images/plus-solid.svg" width="15" height="15" alt="плюс">
					<img class="minus-solid visible-none-svg" src="<?=$this->GetFolder();?>/images/minus-solid.svg" width="15" height="15" alt="минус">
				</button>
				
				<a href="<?=$arItem["LINK"]?>" class="parent<?if ($arItem["SELECTED"]):?> item-selected<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul id="level-ul-3-map-<?=$key?>" class="root-item vertical-multilevel-menu-level-ul-3 visible-none-svg">
					<?endif?>
					
					<?else:?>
					
					<?if ($arItem["PERMISSION"] > "D"):?>
					
					<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
					<li class="root-item vertical-multilevel-menu-level-li-3"><a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><?=$arItem["TEXT"]?></a></li>
					<?endif?>
					
					<?else:?>
					
					<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?else:?>
					<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
					<?endif?>
					
					<?endif?>
					
					<?endif?>
					
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
					
					<?endforeach?>
					
					<?if ($previousLevel > 1)://close last item tags?>
					<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
					<?endif?>
					
				</ul>
			<?endif?>			