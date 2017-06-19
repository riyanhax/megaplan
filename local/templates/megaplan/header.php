<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
CJSCore::Init(array("jquery"));
CJSCore::Init(array("fx"));
$page = $APPLICATION->GetCurPage();
if($page=="/contacts/"||$page=="/company/"||$page=="/prices/")
    $theme = "dark";
else
    $theme = "";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400&amp;subset=cyrillic" rel="stylesheet">

    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mousewheel.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.min.js")?>

    <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
    <?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/menu_style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media_menu.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prices.css");?>


    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="<?=$theme?>">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrapper">
    <header class="header">
         <div class="header-wrapper">
             <div class="left-block col-xs-2 col-md-5">
                 <div class="burger">
                     <script>
                         $(document).ready(function () {

                             <?if($theme=="dark"):?>
                             $(".burger div").css("background-color","#414b4d");
                             $(".burger span").css("color","#414b4d");
                             <?else:?>
                             $(".burger div").css("background-color","#fff");
                             $(".burger span").css("color","#fff");
                             <?endif;?>

                             var menuIsOpen = 0;
                             $(".burger").click(function () {
                                 $(this).toggleClass("open");

                                 if(menuIsOpen == 0){
                                     $("#menu").animate({
                                         top: 0,
                                         left: 0
                                     },{
                                         duration:520
                                     });
                                     <?if($theme=="dark"):?>
                                     $(".burger div").css("background-color","#fff");
                                     $("#logo a").html('<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"))?>');
                                     <?endif;?>
                                     menuIsOpen = 1;
                                 }
                                 else {
                                     $("#menu").animate({
                                         top: 0,
                                         left: "-100%"
                                     }, {
                                         duration: 650
                                     });
                                     <?if($theme=="dark"):?>
                                     $(".burger div").delay(300).css("background-color","#414b4d");
                                     $("#logo a").delay(300).html('<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo_b.php"))?>');
                                     <?endif;?>
                                     menuIsOpen = 0;
                                 }
                             });
                         });
                     </script>
                     <div></div>
                     <div></div>
                     <span><?=GetMessage('MENU')?></span>
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
             <div class="logo col-xs-4 col-md-2" id="logo">
                 <a id="logo_a" href="<?=SITE_DIR?>" title="<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_name.php"), false, array("HIDE_ICONS"=>"Y"));?>">
                     <?if($theme=="dark"):?>
                         <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo_b.php"));?>
                     <?else:?>
                         <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/logo.php"));?>
                     <?endif;?>
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
    <div id="menu">
        <div class="menu_wrap">
            <div class="row">
                <div class="main_menu col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
<!--                    <div class="row">-->
                        <div> <!--class="col-xs-5 col-sm-4 col-md-4"-->
                            <div><a href="#">Возможности</a>
                                <ul>
                                    <li><a href="#">Воронка продаж</a></li>
                                    <li><a href="#">Коробка/облако</a></li>
                                    <li><a href="#">Безопастность данных</a></li>
                                    <li><a href="#">CRM</a></li>
                                    <li><a href="#">Управление проэктами</a></li>
                                    <li><a href="#">Интеграции с почтой</a></li>
                                    <li><a href="#">Интеграции с телефонией</a></li>
                                    <li><a href="#">Мобильное приложение</a></li>
                                </ul>
                            </div>
                            <div><a href="#">Цены</a>
                                <ul>
                                    <li><a href="#">Выбрать тариф</a></li>
                                    <li><a href="#">Бесплатный тариф</a></li>
                                    <li><a href="#">Политика конфиденциальности</a></li>
                                    <li><a href="#">Лицензированный договор</a></li>
                                    <li><a href="#">Договор на доступ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div> <!--class="col-xs-5 col-sm-4 col-md-4"-->
                            <div><a href="#">Помошь</a>
                                <ul>
                                    <li><a href="#">Инструкции</a></li>
                                    <li><a href="#">Комплексное внедрение</a></li>
                                    <li><a href="#">Консультанты (партнеры)</a></li>
                                    <li><a href="#">Частые вопросы</a></li>
                                    <li><a href="#">Онлайн уроки</a></li>
                                </ul>
                            </div>
                            <div><a href="#">Партнерам</a>
                                <ul>
                                    <li><a href="#">API и виджеты</a></li>
                                    <li><a href="#">Партнерская программа</a></li>
                                    <li><a href="#">Реферальная программа</a></li>
                                </ul>
                            </div>
                            <div><a href="#">О компании</a>
                                <ul>
                                    <li><a href="#">Контакты</a></li>
                                    <li><a href="#">Команда</a></li>
                                    <li><a href="#">Квартирники</a></li>
                                    <li><a href="#">Вакансии</a></li>
                                </ul>
                            </div>
                        </div>
                        <div> <!--class="col-xs-5 col-sm-4 col-md-4"-->
                            <div><a href="#">Блог</a>
                                <ul>
                                    <li><a href="#">Блог о продажах</a></li>
                                    <li><a href="#">Блог о бизнесе</a></li>
                                    <li><a href="#">Полезное чтение</a></li>
                                    <li><a href="#">Видео блог</a></li>
                                </ul>
                            </div>
                            <div><a href="#">Клиентам</a>
                                <ul>
                                    <li><a href="#">Личный кабинет</a></li>
                                    <li><a href="#">Клиенты</a></li>
                                    <li><a href="#">Кейсы</a></li>
                                    <li><a href="#">Решения для бизнеса</a></li>
                                </ul>
                            </div>
                        </div>
<!--                    </div>-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 info_menu">
                    <a href="#" title="/">8 800 555-56-37</a>
                    <a href="#" title="/">info@megaplan.ru</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 social">
                    <div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-fb-w.png" alt=""></a></div>
                    <div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-vk-w.png" alt=""></a></div>
                    <div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-tw-w.png" alt=""></a></div>
                    <div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-tg-w.png" alt=""></a></div>
                    <div><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-phone-w.png" alt=""></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-5 payment_systems">
                    <div><img src="<?=SITE_TEMPLATE_PATH?>/img/mastercard.png" alt=""></div>
                    <div><img src="<?=SITE_TEMPLATE_PATH?>/img/visa.png" alt=""></div>
                    <div><img src="<?=SITE_TEMPLATE_PATH?>/img/maestro.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>