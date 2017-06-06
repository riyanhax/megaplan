<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetTitle("Контакты");?>

    <section class="top-banner banner-contacts">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <div class="banner-text color-white">Контакты</div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-contacts bg-white">
        <div class="section-wrapper bg-white">

            <div class="city-wide">
                <div class="city-name">Москва</div>
                <div class="col-md-12 col-lg-5">
                    <div class="info-block info-address">
                        <div class="title">ЮР. АДРЕС</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/company_address.php"));?>
                        </div>
                    </div>
                    <div class="info-block info-address">
                        <div class="title">ДЛЯ ПИСЕМ И ВСТРЕЧ</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/address_for_email.php"));?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="info-block info-phone">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/phone.php"));?>
                        </div>
                    </div>
                    <div class="info-block info-time">
                        <div class="title">Время работы</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/time.php"));?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="info-block info-mail">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/email.php"));?>
                        </div>
                    </div>
                    <div>
                        <ul class="social-list">
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/fb.php"));?>
                            </li>
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/vk.php"));?>
                            </li>
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/tw.php"));?>
                            </li>
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/tg.php"));?>
                            </li>
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/moscow/tel.php"));?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="city-small">
                    <div class="city-name">Украина</div>
                    <div class="info-block info-phone">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/ua/phone.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-time">
                        <div class="title">Время работы</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/ua/time.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-mail">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/ua/email.php"));?>
                        </div>
                    </div>

                    <div class="info-block">
                        <ul class="social-list">
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/ua/fb.php"));?>
                            </li>
                            <li class="social-item">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/ua/tw.php"));?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="city-small">
                    <div class="city-name">Казахстан</div>
                    <div class="info-block info-phone">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/kz/phone.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-time">
                        <div class="title">Время работы</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/kz/time.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-mail">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/kz/email.php"));?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="city-small">
                    <div class="city-name">Минск</div>
                    <div class="info-block info-desc">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/by/desc.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-address">
                        <div class="title">ЮР. АДРЕС, Для писем и встреч</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/by/company_address.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-phone">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/by/phone.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-time">
                        <div class="title">Время работы</div>
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/by/time.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-mail">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/by/email.php"));?>
                        </div>
                    </div>
                </div>
                <div class="city-small">
                    <div class="city-name">Чехия</div>
                    <div class="info-block info-phone">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/cz/phone.php"));?>
                        </div>
                    </div>

                    <div class="info-block info-mail">
                        <div class="text">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts/cz/email.php"));?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>