<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Коробка и облако");
$APPLICATION->SetTitle("Интернет или локальная сеть");?>

    <section class="top-banner banner-cloud">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <div class="banner-text color-white"><?$APPLICATION->ShowTitle(false)?></div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-cloud bg-white">
        <div class="section-wrapper bg-white">

            <div class="col-xs-6 cloud-block bg-white">
                <div class="cloud-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/cloud/cloud.png">
                </div>
                <div class="cloud-title">
                    Облачная версия
                </div>
            </div>
            <div class="col-xs-6 cloud-block bg-grey">
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
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/location.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/location.php"));?></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Защита данных</div>
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/defense.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/defense.php"));?></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Доступ</div>
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/access.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/access.php"));?></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Настройка и обновления</div>
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/update.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/update.php"));?></div>
                </div>
            </div>
        </div>

        <div class="cloud-row">
            <div class="cloud-desc bg-white">
                <div class="cloud-desc_block">
                    <div class="cloud-desc_title hidden-md">Затраты</div>
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/costs.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/costs.php"));?></div>
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
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/internet/version.php"));?></div>
                </div>
            </div>
            <div class="cloud-desc bg-grey">
                <div class="cloud-desc_block">
                    <div><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cloud/local/version.php"));?></div>
                </div>
            </div>
        </div>

        <div class="cloud-row cloud-one_button">
            <div class="cloud-button">
                <a class="button" href="#" title=""><span class="button-green">Посмотреть цены</span></a>
            </div>
        </div>


    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>