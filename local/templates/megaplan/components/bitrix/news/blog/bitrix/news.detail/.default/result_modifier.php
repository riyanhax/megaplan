<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult["PROPERTIES"]["DATE"]["VALUE"] = CIBlockFormatProperties::DateFormat('j F Y', MakeTimeStamp($arResult["PROPERTIES"]["DATE"]["VALUE"], CSite::GetDateFormat()));