<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Безопасность");
$APPLICATION->SetTitle("Мы бережем Ваши данные, как свои");?>

    <section class="top-banner banner-security">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <!--<div class="banner-text color-white"><?//$APPLICATION->ShowTitle(false)?></div>-->
				<div class="banner-text color-white">Мы бережем<p></p> Ваши данные, как свои</div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green show-regform-main">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-security bg-white">
        <div class="section-wrapper bg-white section-wrapper-sec">
            <div class="first-block">
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/pass.png">
                    </div>
                    <div class="security-title">
                        Доступ по паролю
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/pass.php"));?>
                    </p>
                </div>
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/https.png">
                    </div>
                    <div class="security-title">
                        HTTPS шифрование
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/https.php"));?>
                    </p>
                </div>
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/db.png">
                    </div>
                    <div class="security-title">
                        Отдельная база данных
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/db.php"));?>
                    </p>
                </div>
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/rcp.png">
                    </div>
                    <div class="security-title">
                        Резервное копировние
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/rcp.php"));?>
                    </p>
                </div>
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/cp.png">
                    </div>
                    <div class="security-title">
                        Копия каждую ночь
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/cp.php"));?>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="second-block">

                <h2 class="block-title">
                    Мы относимся к безопасности<p></p>
                    с нездоровой щепетильностью
                </h2>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Двойное автоматическое резервное копирование
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/double_cp.php"));?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Географическое распределение серверов
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/location.php"));?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Автоматическая система слежения за серверами
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/server.php"));?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 sec-block-padding">
                    <div class="security-title">
                        Раздельное копирование баз данных и файлов
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/sep_cp.php"));?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 sec-block-padding">
                    <div class="security-title">
                        Отдельные базы данных для каждого клиента
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/sep_db.php"));?>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 sec-block-padding">
                    <div class="security-title">
                        Шифрование пароля и соединения
                    </div>
                    <p class="security-description">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/crypt.php"));?>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>


    <section class="content bg-grey section-security-question">

        <h2 class="block-title secr-title-padd">
            Вопросы о безопасности Мегаплана
        </h2>

        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/security/questions.php"));?>
		
		<div class="secr-div-text-button">
			<a class="button" href="#" title=""><span class="more-button-green show-regform-main">Попробовать бесплатно</span></a>
		</div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>