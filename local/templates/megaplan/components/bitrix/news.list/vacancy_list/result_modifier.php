<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$count = count($arResult["ITEMS"]);
$lastOfFirstColumn = ceil($count/2);

for($i=1; $i<=$lastOfFirstColumn; $i++)
    $arResult["LEFT_ITEMS"][] = array_shift($arResult["ITEMS"]);

$arResult["RIGHT_ITEMS"] = $arResult["ITEMS"];