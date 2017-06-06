<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<footer class="footer">
    <div class="footer-wrapper">
        <div class="col-xs-12 col-sm-4 copyright">
            &copy 2009 - <?=date("Y")?>
            — «<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_name.php"));?>»
        </div>
        <div class="col-xs-12 col-sm-4 contacts">
            <a class="bottom-phone" href="tel:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false, array("HIDE_ICONS"=>"Y"));?>" title="">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"));?>
            </a>
            <a class="bottom-email" href="mailto:<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/email.php"), false, array("HIDE_ICONS"=>"Y"));?>" title="">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/email.php"));?>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4 social">
            <ul class="social-list">
                <li class="social-item">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social/fb.php"));?>
                </li>
                <li class="social-item">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social/vk.php"));?>
                </li>
                <li class="social-item">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social/tw.php"));?>
                </li>
                <li class="social-item">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social/tg.php"));?>
                </li>
                <li class="social-item">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/social/tel.php"));?>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</footer>
</div>
</body>
</html>