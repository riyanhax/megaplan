<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH."/js/owl/owl.carousel.min.css");
$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH."/js/owl/owl.theme.default.min.css");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl/owl.carousel.min.js");