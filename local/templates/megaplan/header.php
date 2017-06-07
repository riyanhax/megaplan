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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400&amp;subset=cyrillic" rel="stylesheet">


    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mousewheel.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.2.1.min.js")?>

    <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
    <?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/menu_style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media_menu.css");?>


    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="container-fluid wrapper">
    <header class="header">
         <div class="header-wrapper">
             <div class="left-block col-xs-2 col-md-5">
                 <div class="burger">
                     <script>
                         $(document).ready(function () {
                             $("#menu_open").click(function () {
                                 $("#menu").css("display","block").css("visibility","visible")
                             })
                         });
                     </script>
                     <a href="#" title="<?=GetMessage('MENU')?>" id="menu_open">
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
    <div id="menu">
        <div class="menu_wrap">
            <header class="header">
                <div class="header-wrapper">
                    <div class="left-block col-xs-2 col-md-5">
                        <div class="burger">
                            <script>
                                $(document).ready(function () {
                                    $("#menu_close").click(function () {
                                        $("#menu").css("display","none").css("visibility","hidden")
                                    })
                                });
                            </script>
                            <a href="#" title="" id="menu_close">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/close_menu.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!--                <div class="logo col-xs-4 col-md-2">-->
                    <!--                    <a href="#" title="/">-->
                    <!--                        <img src="--><?//=SITE_TEMPLATE_PATH?><!--/img/logo.png">-->
                    <!--                    </a>-->
                    <!--                </div>-->
                </div>
            </header>
            <div class="row">
                <div class="main_menu col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                    <div class="row">
                        <ul>
                            <li class="col-xs-5 col-sm-4 col-md-3"><a href="#">Возможности</a>
                                <ul>
                                    <li><a href="#">Цены</a></li>
                                    <li><a href="#">Тарифы</a></li>
                                    <li><a href="#">Отраслевые решения</a></li>
                                    <li><a href="#">Отзывы</a></li>
                                    <li><a href="#">Клиенты</a></li>
                                    <li><a href="#">Коробка</a></li>
                                    <li><a href="#">Облако</a></li>
                                </ul>
                            </li>
                            <li class="col-xs-5 col-sm-4 col-md-3"><a href="#">Партнерам</a>
                                <ul>
                                    <li><a href="#">API</a></li>
                                    <li><a href="#">Безопастность</a></li>
                                    <li><a href="#">Конфиденциальность</a></li>
                                    <li><a href="#">Решения для госорганов</a></li>
                                    <li><a href="#">Интеграции</a></li>
                                    <li><a href="#">1С в облаке</a></li>
                                    <li><a href="#">Мобильное приложение</a></li>
                                </ul>
                            </li>
                            <li class="col-xs-5 col-sm-4 col-md-3"><a href="#">Помошь</a>
                                <ul>
                                    <li><a href="#">Блог</a></li>
                                    <li><a href="#">Видео</a></li>
                                    <li><a href="#">Обучение</a></li>
                                    <li><a href="#">Большие планы</a></li>
                                    <li><a href="#">Управление продажами</a></li>
                                    <li><a href="#">Управление проектами</a></li>
                                    <li><a href="#">Юридические документы</a></li>
                                </ul>
                            </li>
                            <li class="col-xs-5 col-sm-4 col-md-3"><a href="#">О компании</a>
                                <ul>
                                    <li><a href="#">Команда</a></li>
                                    <li><a href="#">Пресса</a></li>
                                    <li><a href="#">Квартирники</a></li>
                                    <li><a href="#">Контакты</a></li>
                                    <li><a href="#" class="circle_a">Презентация</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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