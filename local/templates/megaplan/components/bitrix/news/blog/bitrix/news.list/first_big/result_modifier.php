<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $num => $arItem) {
    $arResult["ITEMS"][$num]["PROPERTIES"]["DATE"]["VALUE"] = CIBlockFormatProperties::DateFormat('j F Y', MakeTimeStamp($arItem["PROPERTIES"]["DATE"]["VALUE"], CSite::GetDateFormat()));
}

$arFirstPost = array_shift($arResult["ITEMS"]);
$arResult["FIRST_POST"] = $arFirstPost;

$property_enums = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>1, "CODE"=>"RUBRIC"));
while ($enum_fields = $property_enums->GetNext()) {
    $arRubrics[$enum_fields["ID"]] = $enum_fields["VALUE"];
}
$arResult["RUBRICS"] = $arRubrics;