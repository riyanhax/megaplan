<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Компания");
$APPLICATION->SetTitle("История Мегаплана в датах, цифрах и лицах");?>

    <section class="top-banner banner-company">
        <div>
            <div class="banner-inner">
                <div class="banner-text color-white">История Мегаплана <br>в датах, цифрах<br> и лицах</div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green show-regform-main">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-company bg-white">
        <div class="section-wrapper bg-white">
            <div class="history-block col-xs-12 col-sm-6 col-md-3">
                <div class="company-title">
                    2006
                </div>
                <p class="company-description">
                    Идея создания Мегаплана появилась в 2006 году, когда директор интернет-магазина Ютинет.Ру Михаил Уколов пытался найти на российском рынке подходящее программное обеспечение для управления бизнесом. Поиски оказались безуспешными. Тогда Михаил решил сделать свой собственный программный продукт, взяв за основу модель SaaS (Software as a Service).
                </p>
            </div>
            <div class="history-block col-xs-12 col-sm-6 col-md-3">
                <div class="company-title">
                    2007
                </div>
                <p class="company-description">
                    Практически весь 2007 год команда работала над созданием первой версии Мегаплана.
                </p>
            </div>
            <div class="history-block col-xs-12 col-sm-6 col-md-3">
                <div class="company-title">
                    2008
                </div>
                <p class="company-description">
                    К 2008 году продукт начал использоваться в компании Ютинет и поступил в открытую продажу. С тех пор работа над Мегапланом не прекращалась. За несколько лет возможности системы значительно расширились. К управлению проектами добавились инструменты автоматизации продаж, взаимодействия с клиентами, финансового планирования.
                </p>
            </div>
            <div class="history-block col-xs-12 col-sm-6 col-md-3">
                <div class="company-title">
                    Сегодня
                </div>
                <p class="company-description">
                    Почти каждый месяц команда Мегаплана готовит обновление, в котором учитываются пожелания клиентов, улучшаются уже существующие возможности и добавляются новые. Интенсивная работа нашей команды позволила Мегаплану завоевать прочные позиции на рынке. Сегодня каждая четвертая компания из сектора среднего и малого бизнеса, автоматизировавшая бизнес-процессы при помощи облачных технологий, использует Мегаплан.
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="content bg-white section-company_team">

        <h2 class="block-title">
            Команда Мегаплана
        </h2>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "company_team",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("PREVIEW_PICTURE",""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "8",
                "IBLOCK_TYPE" => "company",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "6",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("POST",""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC"
            )
        );?>

    </section>

    <section class="content bg-grey section-company_video">

        <h2 class="block-title">
            Жизнь Мегаплана
        </h2>

        <div class="video_border">
            <div class="video_play"></div>
            <div class="video_block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/company/border_video.png">
                <video width="100%" height="auto" loop="loop" preload="auto" poster="<?=SITE_TEMPLATE_PATH?>/img/company/poster.jpg">
                    <source src="<?=SITE_TEMPLATE_PATH?>/video/megaplan_live.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="video_border">
            <div class="video_play"></div>
            <div class="video_block">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/company/border_video.png">
                <video width="100%" height="auto" loop="loop" preload="auto" poster="<?=SITE_TEMPLATE_PATH?>/img/company/poster.jpg">
                    <source src="<?=SITE_TEMPLATE_PATH?>/video/megaplan_challenge.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </section>

    <section class="content bg-white section-company_vacancy">

        <h2 class="block-title">
            Вакансии в Мегаплане
        </h2>
        <p class="vacancy-text">
            Что мы можем вам предложить
        </p>

        <div class="vacancy-block">
            <div class="vacancy-item_block col-xs-12 col-sm-6 col-md-3">
                <div class="vacancy-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/company/time.png">
                </div>
                <div class="vacancy-title">
                    Удобный график
                </div>
                <p class="vacancy-description">
                    Работа в удобном промежутке с 8:00 до 22:00 при 8-часовом минимуме.
                </p>
            </div>
            <div class="vacancy-item_block col-xs-12 col-sm-6 col-md-3">
                <div class="vacancy-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/company/people.png">
                </div>
                <div class="vacancy-title">
                    Дружный коллектив
                </div>
                <p class="vacancy-description">
                    Молодая команда интересных людей и отличных специалистов, готовых делиться опытом и помогать.
                </p>
            </div>
            <div class="vacancy-item_block col-xs-12 col-sm-6 col-md-3">
                <div class="vacancy-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/company/office.png">
                </div>
                <div class="vacancy-title">
                    Офис в центре Москвы
                </div>
                <p class="vacancy-description">
                    Рабочие места в офисе в пяти минутах от метро Академическая на ул. Гримау, д. 10АС1.
                </p>
            </div>
            <div class="vacancy-item_block col-xs-12 col-sm-6 col-md-3">
                <div class="vacancy-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/company/money.png">
                </div>
                <div class="vacancy-title">
                    «Белая» зарплата
                </div>
                <p class="vacancy-description">
                    С каждым сотрудником заключается трудовой договор. Заработная плата перечисляется на банковскую карту.
                </p>
            </div>
            <div class="clear"></div>
        </div>

    </section>

    <section class="content section-company_vacancy vacancies">

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "vacancy_list",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("NAME",""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "company",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "100",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("EXPECTATION","RESPONSIBILITY","CONDITION","PRICE"),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC"
            )
        );?>

    </section>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>