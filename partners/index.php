<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Партнерам");
$APPLICATION->SetTitle("Присоединяйтесь к успеху Мегаплана");?>

    <section class="top-banner banner-partners">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <div class="banner-text color-white">Присоединяйтесь <br> к успеху Мегаплана!</div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green show-regform-main">Начать свою историю</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-partners bg-white">
        <div class="section-wrapper bg-white">
            <div class="col-sm-12 col-md-4">
                <div class="partners-title">
                    9 лет
                </div>
                <p class="partners-description">
                    Работаем с 2008 года. С тех пор мы реализовали множество проектов и теперь развиваем партнерскую сеть.
                </p>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="partners-title">
                    15 тысяч
                </div>
                <p class="partners-description">
                    Мегапланом пользуются более 15 000 компаний различного масштаба из разных сфер бизнеса.
                </p>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="partners-title">
                    9 стран
                </div>
                <p class="partners-description no-margin">
                    Представительства работают в России, Белоруссии, Украине, Казахстане, Молдове, Чехии, Азербайджане и Кыргызстане.
                </p>
            </div>
            <div class="clear"></div>
        </div>
    </section>


    <section class="content bg-white section-partners-list partners-margin">

        <h2 class="block-title">
            Уже работают с нами
        </h2>
        <p class="partners-text">
            Сейчас у нас 97 партнёров в 31 городе в России и странах ближнего зарубежья. Мегаплан доступен клиентам на русском, английском, украинском, немецком, чешском, азербайджанском и казахском языках.
        </p>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "partners_list",
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
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "partners",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "100",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("COMPANY",""),
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

    <section class="content bg-white section-partners-list">

        <h2 class="block-title">
            Виды парнёрства
        </h2>
        <p class="partners-text">
            Партнёрская программа — схема взаимовыгодного сотрудничества, при которой партнёры зарабатывают, рекомендуя Мегаплан клиентам или продавая его самостоятельно. В нашей компании предусмотрены две схемы работы партнёров: посоветуйте Мегаплан вашему клиенту и получите процент с каждого его платежа. Или же ведите клиентов сами и зарабатывайте половину с каждой сделки Мегаплана.
        </p>

        <div class="dealers">
            <div class="col-sm-12 col-md-6">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/dealers.png">
            </div>
            <div class="col-sm-12 col-md-6 right">
                <h2 class="block-title">
                    Дилеры
                </h2>
                <p class="dealers-text">Дилеры консультируют и продают Мегаплан, помогают с внедрением и настройкой. Партнёр берёт ответственность за клиента на себя. Мегаплан, в свою очередь, обучает и сертифицирует партнёра, обеспечивает всеми необходимыми материалами для продаж и отвечает за техническую поддержку ваших клиентов.</p>
                <div class="partners-button">
                    <a class="button" href="https://megaplan.ru/stanpartnerom/index.html" title=""><span class="button-green">Узнать больше</span></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <p class="partners-text">
            Рефереры продают Мегаплан при помощи рекомендации, не обременяя себя лишними обязательствами. Вы размещаете рекламу, привлекаете клиентов, а мы платим процент с каждой реферальной покупки.
        </p>
        <div class="partners-button" data-view-ref="1">
            <a class="button" href="javascript:void(0);" title="">
                <span class="button-yellow" onclick="obPartnersList.viewRef(this); return false;">Узнать больше</span>
            </a>
        </div>

        <div class="partners-list partners-list-hidden" data-ref-block="1">

            <div class="ref-block">
                <div class="ref-item_block col-sm-12 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_rec.png">
                    </div>
                    <div class="ref-title">
                        Рекомендуйте
                    </div>
                    <p class="ref-description">
                        Вы рекомендуете Мегаплан и даёте ссылку для регистрации потенциальному клиенту.
                    </p>
                </div>
                <div class="ref-item_block col-sm-12 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_attr.png">
                    </div>
                    <div class="ref-title">
                        Привлекайте
                    </div>
                    <p class="ref-description">
                        Клиент переходит по вашей ссылке и регистрируется в Мегаплане.
                    </p>
                </div>
                <div class="ref-item_block col-sm-12 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_earn.png">
                    </div>
                    <div class="ref-title">
                        Зарабатывайте
                    </div>
                    <p class="ref-description">
                        Клиент оплачивает Мегаплан, а вы получаете доход.
                    </p>
                </div>
                <div class="clear"></div>
            </div>

            <h2 class="block-title">
                Дополнительные возможности
            </h2>

            <div class="ref-block">
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_support.png">
                    </div>
                    <div class="ref-title">
                        Оперативная поддержка персонального менеджера
                    </div>
                </div>
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_money.png">
                    </div>
                    <div class="ref-title">
                        Регулярный доход от привлечённых клиентов
                    </div>
                </div>
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_clients.png">
                    </div>
                    <div class="ref-title">
                        Поддержка ваших клиентов от Мегаплана
                    </div>
                </div>
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_lk.png">
                    </div>
                    <div class="ref-title">
                        Личный кабинет партнёра с понятной статистикой
                    </div>
                </div>
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_bank.png">
                    </div>
                    <div class="ref-title">
                        Быстрый перевод средств на банковский счёт
                    </div>
                </div>
                <div class="ref-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="ref-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ref_month.png">
                    </div>
                    <div class="ref-title">
                        Через месяц клиент считается вашим
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <h2 class="block-title">
                Что нужно сделать?
            </h2>

            <div class="dealers-participation">
                <div class="dealers-participation_block col-sm-12 col-md-4">
                    <div class="dealers-participation_step">
                        <span class="dealers-participation_number">1</span>
                        <span class="dealers-participation_title">Пройдите регистрацию</span>
                    </div>
                    <p>Для этого используйте специальную форму.</p>
                </div>
                <div class="dealers-participation_block col-sm-12 col-md-4">
                    <div class="dealers-participation_step">
                        <span class="dealers-participation_number">2</span>
                        <span class="dealers-participation_title">Получите партнёрскую ссылку</span>
                    </div>
                    <p>В личном кабинете. Пароль от кабинета придёт на почту.</p>
                </div>
                <div class="dealers-participation_block col-sm-12 col-md-4">
                    <div class="dealers-participation_step">
                        <span class="dealers-participation_number">3</span>
                        <span class="dealers-participation_title">Привлекайте клиентов</span>
                    </div>
                    <p>Используйте наши кнопки, ссылки или баннеры на вашем сайте.</p>
                </div>
                <div class="clear"></div>
            </div>

            <h2 class="block-title">
                Стать реферером
            </h2>

            <div class="more-form">
                <form>
                    <input type="text" placeholder="Название вашей компании.megaplan.ru" class="more-input">
                    <input type="text" placeholder="Почта" class="more-input">
                    <input type="text" placeholder="Имя и телефон" class="more-input">
                    <input type="text" placeholder="Телефон" class="more-input">
                    <span class="more-small-text">Никакого спама, только уведомления по делу</span>
                    <div class="more-div-text-button-footer partners-button"><a class="button" href="#" title=""><span class="button-green">Отправить заявку</span></a></div>
                </form>
            </div>

        </div>
        <div class="partners-button partners-button-hidden" data-hide-ref="1">
            <a class="button" href="javascript:void(0);" title="">
                <span class="button-yellow hide-button" onclick="obPartnersList.hideRef(this); return false;">Скрыть</span>
            </a>
        </div>

        <h2 class="block-title decision-title">
            Решения от партнёров
        </h2>
        <p class="partners-text">
            Наши партнёры разрабатывают решения и интеграции, значительно расширяющие и гармонично дополняющие возможности Мегаплана. В данном каталоге вы можете выбрать решение конкретно под свою задачу.
        </p>
        <div class="partners-button">
            <a class="button" href="#" title=""><span class="button-green show-partners-solutions">Узнать больше</span></a>
        </div>

    </section>

    <section class="content bg-grey section-partners-dealers">

        <h2 class="block-title">
            Дилерская программа
        </h2>
        <p class="partners-text">
            Рынок внедрения CRM растет на десятки процентов каждый год и возможности для заработка не ограничены продажей лицензий Мегаплана, а зависят от твоего желания и сильных сторон.
        </p>
        <div class="dealers-programm">
            <div class="col-sm-12 col-md-4">
                <div class="dealers-programm_title">Внедрение</div>
                <p>Мегаплан — больше, чем просто CRM. Внедряй мощный инструмент для управления бизнес-процессами. Обучай эффективной работе.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="dealers-programm_title">Консалтинг</div>
                <p>Стань незаменимым для своих клиентов. Организуй работу всей компании на базе Мегаплана. Проводи тренинги для продавцов и управленцев.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="dealers-programm_title">Разработка</div>
                <p>Дорабатывай Мегаплан на заказ: широкие возможности API для интеграций и кастомизации интерфейса. Даже в облачной версии. </p>
            </div>
            <div class="clear"></div>
        </div>

    </section>

    <section class="content bg-white section-partners-list padding-top">

        <h2 class="block-title">
            Мегаплан — самая мощная<br> из простых российских CRM-систем
        </h2>
        <p class="partners-text">
            Мегаплан — самая мощная из простых российских CRM-систем. Уже 10 лет повышаем эффективность бизнеса и увеличиваем доходы наших клиентов. Наши партнеры знают, как работает бизнес, и внедряют Мегаплан так, чтобы он приносил максимальный результат.
        </p>
        <h2 class="block-title block-title_strait">
            Мы знаем,<br> что нужно партнёру
        </h2>

        <div class="partners-block">
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/help.png">
                </div>
                <div class="partners-title">
                    Помощь на старте
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/help.php"));?>
                </p>
            </div>
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/learn.png">
                </div>
                <div class="partners-title">
                    Обучение и сертификация
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/learn.php"));?>
                </p>
            </div>
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/support.png">
                </div>
                <div class="partners-title">
                    Оперативная поддержка
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/support.php"));?>
                </p>
            </div>
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/lk.png">
                </div>
                <div class="partners-title">
                    Личный кабинет
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/lk.php"));?>
                </p>
            </div>
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/ide.png">
                </div>
                <div class="partners-title">
                    Инструменты разработки
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/ide.php"));?>
                </p>
            </div>
            <div class="partners-item_block col-xs-12 col-sm-6 col-md-4">
                <div class="partners-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/partners/award.png">
                </div>
                <div class="partners-title">
                    Вознаграждение
                </div>
                <p class="partners-description">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/partners/award.php"));?>
                </p>
            </div>
            <div class="clear"></div>
        </div>

        <h2 class="block-title">
            Стать партнёром просто
        </h2>

        <div class="dealers-participation">
            <div class="dealers-participation_block col-sm-12 col-md-3">
                <div class="dealers-participation_step">
                    <span class="dealers-participation_number">1</span>
                    <span class="dealers-participation_title">Отправь заявку</span>
                </div>
                <p>Заполни форму регистрации, мы пришлем полезные материалы и подробно расскажем о нашей программе.</p>
            </div>
            <div class="dealers-participation_block col-sm-12 col-md-3">
                <div class="dealers-participation_step">
                    <span class="dealers-participation_number">2</span>
                    <span class="dealers-participation_title">Пройди обучение</span>
                </div>
                <p>Смотри обучающие материалы в Личном кабинете партнера, задавай вопросы на партнерских вебинарах, покажи свои знания и получи сертификат партнера.</p>
            </div>
            <div class="dealers-participation_block col-sm-12 col-md-3">
                <div class="dealers-participation_step">
                    <span class="dealers-participation_number">3</span>
                    <span class="dealers-participation_title">Продавай Мегаплан</span>
                </div>
                <p>Расскажи своим клиентам о Мегаплане, помоги стартовать и переходи к следующему пункту.</p>
            </div>
            <div class="dealers-participation_block col-sm-12 col-md-3">
                <div class="dealers-participation_step">
                    <span class="dealers-participation_number">4</span>
                    <span class="dealers-participation_title">Получай вознаграждение</span>
                </div>
                <p>До 100% с первой покупки клиента и 50% со всех последующих.</p>
            </div>
            <div class="clear"></div>
        </div>

        <h2 class="block-title">
            Стань партнёром<br> и зарабатывай вместе с нами
        </h2>

        <div class="more-form">
            <form>
                <input type="text" placeholder="Название вашей компании.megaplan.ru" class="more-input">
                <input type="text" placeholder="Почта" class="more-input">
                <input type="text" placeholder="Имя и телефон" class="more-input">
                <input type="text" placeholder="Телефон" class="more-input">
                <span class="more-small-text">Никакого спама, только уведомления по делу</span>
                <div class="more-div-text-button-footer partners-button"><a class="button" href="#" title=""><span class="button-green">Стать партнёром</span></a></div>
            </form>
        </div>

    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>