<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
CJSCore::Init(array("jquery"));
CJSCore::Init(array("fx"));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400&amp;subset=cyrillic" rel="stylesheet">


    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mousewheel.js")?>

    <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
    <?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css");?>


    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrapper">
    <header class="header">
         <div class="header-wrapper">
             <div class="left-block col-xs-2 col-md-5">
                 <div class="burger">
                     <a href="#" title="<?=GetMessage('MENU')?>">
                         <img src="<?=SITE_TEMPLATE_PATH."/img/menu.png"?>" alt="">
                         <span><?=GetMessage('MENU')?></span>
                     </a>
                 </div>
                 <div class="top-menu hidden-sm">
                     <?
                     $APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => "",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                        "COMPONENT_TEMPLATE" => "top",
                        "DELAY" => "N",
                        ),
                        false
                     );
                     ?>
                 </div>
             </div>
             <div class="logo col-xs-4 col-md-2">
                 <a href="<?=SITE_DIR?>" title="<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_name.php"), false, array("HIDE_ICONS"=>"Y"));?>">
                     <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"));?>
                 </a>
             </div>
             <div class="right-block col-xs-6 col-md-5">
                 <a class="top-phone" href="tel:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false, array("HIDE_ICONS"=>"Y"));?>">
                     <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"));?>
                 </a>
                 <a class="top-login" href="https://megaplan.ru/cabinet/" title="Личный кабинет">Войти</a>
                 <a class="top-lang hidden-xs" href="#" title="Выбор языка">
                     <img src="<?=SITE_TEMPLATE_PATH?>/img/flag.png">
                 </a>
             </div>
             <div class="clear"></div>
         </div>
    </header>