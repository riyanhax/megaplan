<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arFirstPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arFirstPost;

$arSecondPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arSecondPost;

$arThirdPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POSTS"][] = $arThirdPost;



