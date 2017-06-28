<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Коробка и облако");
$APPLICATION->SetTitle("Интернет или локальная сеть");?>

    <section class="top-banner banner-cloud">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <div class="banner-text color-white"><?$APPLICATION->ShowTitle(false)?></div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green show-regform-main">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-cloud bg-white cloud-bg-line">
        <div class="section-wrapper">
            <div class="col-xs-6 cloud-block bg-white-1">
                <div class="cloud-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cloud/cloud.png">
                </div>
                <div class="cloud-title">
                    Облачная версия
                </div>
            </div>
            <div class="col-xs-6 cloud-block bg-grey-1">
                <div class="cloud-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cloud/box.png">
                </div>
                <div class="cloud-title">
                    Коробочная версия
                </div>
            </div>
            <div class="clear"></div>

        </div>
    </section>

    <section class="content section-cloud-desc">

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Где размещается</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/location.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/location.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Защита данных</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/defense.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/defense.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Доступ</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/access.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/access.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Настройка и обновления</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/update.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/update.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Затраты</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/costs.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/costs.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row cloud-buttons">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-button">
                        <a class="button" href="#" title=""><span class="button-green">Посмотреть цены</span></a>
                    </div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div class="cloud-button">
                        <a class="button" href="#" title=""><span class="button-yellow">Посмотреть цены</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Пробные и бесплатные версии</div>
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/version.php"));?></span></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block cloud-padding-left">
                    <div><span class="cloud-text-thin"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/version.php"));?></span></div>
                </div>
            </div>
        </div>

        <div class="cloud-row cloud-one_button">
            <div class="cloud-button">
                <a class="button" href="#" title=""><span class="button-green">Посмотреть цены</span></a>
            </div>
        </div>
		<div class="cloud-bg-line cloud-bg-line-height">
			<div class="secr-div-text-button">
				<a class="button" href="#" title=""><span class="more-button-green show-regform-main">Попробовать бесплатно</span></a>
			</div>
		</div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>