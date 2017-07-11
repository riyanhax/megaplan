<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arFirstBigPost = array_shift($arResult["ITEMS"]);
$arFirstBigPost["LOGO"] = CFile::GetPath($arFirstBigPost["PROPERTIES"]["LOGO"]["VALUE"]);
$arResult["FIRST_BIG_POSTS"][] = $arFirstBigPost;

$arFirstPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arFirstPost;

$arSecondPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arSecondPost;

$arThirdPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arThirdPost;



