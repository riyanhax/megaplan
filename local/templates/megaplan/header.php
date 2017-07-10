<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
CJSCore::Init(array("jquery"));
CJSCore::Init(array("fx"));
$page = $APPLICATION->GetCurPage();
if($page=="/contacts/"||$page=="/company/"||$page=="/prices/"||$page=="/prices/")
    $theme = "dark";
else
    $theme = "";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100,300,400&amp;subset=cyrillic" rel="stylesheet">

    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mousewheel.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.2.1.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/prices.js")?>
	    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.custom-scroll.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js")?>

    <?$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css");?>
<!--    --><?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/menu_style.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/menu_style_new.css");?>
<!--    --><?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media_menu.css");?>
<!--    --><?//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prices.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prices_style.css");?>


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


                                     function setMenuHeight() {
                                         console.log('$(window).height() = ' + window.innerHeight);
                                         $('#menu').css({
                                             height: window.innerHeight + 'px'
                                         });
                                     }

                                     //console.log('screen.width = ' + screen.width);
                                     //console.log('screen.height = ' + screen.height);

                                     if (window.innerWidth >= 768) {
                                         setMenuHeight();
                                         $(window).resize(setMenuHeight);
                                         $('html').css('overflow-y','hidden');
                                     }
                                     else {
                                         $('#menu').css("height", "auto");
                                         $('.menu-container').css('height', '100%');
                                     }
                                     menuIsOpen = 1;
                                 }
                                 else {
                                     $("#menu").animate({
                                         top: 0,
                                         left: "-100%"
                                     }, {
                                         duration: 650
                                     });
                                     $('html').css('overflow-y','auto');
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
                 <div class="top-menu hidden-md">
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
        <div class="menu-container">
            <div class="menu-main">
                <div class="menu-column menu-col-1">
                    <div class="menu-block capabilities"><a href="#">Возможности</a>
                        <ul>
                            <li><a href="http://bvd.megaplan.szdl.ru/more/">Воронка продаж</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/local-internet/">Коробка/облако</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/security/">Безопасность данных</a></li>
                            <li><a href="#">CRM</a></li>
                            <li><a href="#">Управление проектами</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/integration/">Интеграции с почтой</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/integration/">Интеграции с телефонией</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/more/">Мобильное приложение</a></li>
                        </ul>
                    </div>
                    <div class="menu-block menu-prices"><a href="http://bvd.megaplan.szdl.ru/prices/">Цены</a>
                        <ul>
                            <li><a href="#">Выбрать тариф</a></li>
                            <li><a href="#">Бесплатный тариф</a></li>
                            <li><a href="#">Политика конфиденциальности</a></li>
                            <li><a href="#">Лицензионный договор</a></li>
                            <li><a href="#">Договор на доп услуги</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-column menu-col-2">
                    <div class="menu-block help"><a href="#">Помощь</a>
                        <ul>
                            <li><a href="#">Инструкции</a></li>
                            <li><a href="#">Комплексное внедрение</a></li>
                            <li><a href="http://out.megaplan.szdl.ru/partners/">Консультанты (партнеры)</a></li>
                            <li><a href="#">Частые вопросы</a></li>
                            <li><a href="#">Онлайн уроки</a></li>
                        </ul>
                    </div>
                    <div class="menu-block partners"><a href="http://bvd.megaplan.szdl.ru/partners/">Партнерам</a>
                        <ul>
                            <li><a href="http://bvd.megaplan.szdl.ru/integration/">API и виджеты</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/partners/">Партнерская программа</a></li>
                            <li><a href="https://megaplan.ru/stanpartnerom/index.html">Реферальная программа</a></li>
                        </ul>
                    </div>
                    <div class="menu-block company"><a href="http://bvd.megaplan.szdl.ru/company/">О компании</a>
                        <ul>
                            <li><a href="http://bvd.megaplan.szdl.ru/contacts/">Контакты</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/company/">Команда</a></li>
                            <li><a href="https://megaplan.ru/megakvartirnik/">Квартирники</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/company/">Вакансии</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-column menu-col-3">
                    <div class="menu-block blog"><a href="http://bvd.megaplan.szdl.ru/blog/%20">Блог</a>
                        <ul>
                            <li><a href="https://megaplan.ru/letters/category/sales">Блог о продажах</a></li>
                            <li><a href="https://megaplan.ru/letters/category/management">Блог о бизнесе</a></li>
                            <li><a href="https://megaplan.ru/letters/">Полезное чтение</a></li>
                            <li><a href="https://www.youtube.com/c/TheMegaplan">Видео блог</a></li>
                        </ul>
                    </div>
                    <div class="menu-block clients"><a href="#">Клиентам</a>
                        <ul>
                            <li><a href="#">Личный кабинет</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/clients/">Клиенты</a></li>
                            <li><a href="http://bvd.megaplan.szdl.ru/clients/">Кейсы</a></li>
                            <li><a href="#">Решения для бизнеса</a></li>
                            <li><a href="www.megaplan.megaplan.ru">Войти в мой Мегаплан</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-footer">
                <div class="menu-info">
                    <p>8 800 555-56-37</p>
                    <p><a href="#">info@megaplan.ru</a></p>
                </div>
                <div class="menu-social">
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-fb-w.png" alt=""></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-vk-w.png" alt=""></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-tw-w.png" alt=""></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-tg-w.png" alt=""></a>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social-phone-w.png" alt=""></a>
                </div>
                <div class="menu-payment-sys">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/mastercard.png" alt="">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/visa.png" alt="">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/maestro.png" alt="">
                </div>
            </div>
        </div>
    </div>