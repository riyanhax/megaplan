<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Безопасность");
$APPLICATION->SetTitle("Безопасность");?>

    <section class="top-banner banner-security">
        <div class="container">
            <div class="col-md-12 banner-inner">
                <div class="banner-text color-white">ДАННЫЕ ПОД ЗАЩИТОЙ</div>
                <div class="banner-button">
                    <a class="button" href="#" title=""><span class="button-green">2 недели бесплатно</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-crop section-security bg-white">
        <div class="section-wrapper bg-white">
            <div class="first-block">
                <div class="security-item_block col-xs-12 col-sm-6 col-md-4">
                    <div class="security-img">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/security/pass.png">
                    </div>
                    <div class="security-title">
                        Доступ по паролю
                    </div>
                    <p class="security-description">
                        Защищает доступ к Мегаплану клиента, но не дает доступ к базе. У каждого сотрудника свои права доступа.
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
                        256-разрядное шифрование защищает данные от перехвата злоумышленниками.
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
                        Хранит данные так, чтобы к ним невозможно было получить доступ из соседних аккаунтов.
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
                        Система распределяет данные на несколько жестких дисков. При отказе одного данные не теряются.
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
                        Резервные серверы в России, Германии, США и Ирландии делают копию каждую ночь.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="second-block">

                <h2 class="block-title">
                    Мы относимся к безопасности
                    с нездоровой щепетильностью
                </h2>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Двойное автоматическое резервное копирование
                    </div>
                    <p class="security-description">
                        Гарантирует восстановление данных даже при полном физическом разрушении сервера в одном из датацентров.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Географическое распределение серверов
                    </div>
                    <p class="security-description">
                        Позволяет балансировать нагрузку, улучшать скорость соединения клиентов, быстро перебрасывать аккаунты с поврежденных серверов на здоровые.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Автоматическая система слежения за серверами
                    </div>
                    <p class="security-description">
                        Помогает предупредить проблему, перераспределить нагрузку и выявить в реальном времени нестандартное поведение аккаунтов. Если аккаунт показывает нестандартное поведение (чаще всего связанное с работой хакера), аккаунт автоматически блокируется до выяснения обстоятельств.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Раздельное копирование баз данных и файлов
                    </div>
                    <p class="security-description">
                        Повышает общую надежность системы и позволяет применять лучшие схемы резервирования для каждого типа информации.
                        Базы данных мы храним на двух группах серверов с RAID 1, файлы —
                        на третьей независимой группе серверов с RAID 10.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Отдельные базы данных для каждого клиента
                    </div>
                    <p class="security-description">
                        Делают невозможным доступ к данным соседних аккаунтов.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="security-title">
                        Шифрование пароля и соединения
                    </div>
                    <p class="security-description">
                        Помогает защитить передачу данных между клиентом и Мегапланом в публичных местах.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>


    <section class="content bg-grey section-security-question">

        <h2 class="block-title">
            Мы относимся к безопасности
            с нездоровой щепетильностью
        </h2>

        <div class="question-block">
            <h4 class="question-text">Можно ли взломать Мегаплан?</h4>
            <p class="question-answer">Теоретически взломать можно любую электронную систему, поэтому мы постоянно работаем над увеличением безопасности данных в Мегаплане. Каждое обновление Мегаплана ускоряет его работу и закрывает потенциально уязвимые места.</p>
        </div>

        <div class="question-block">
            <h4 class="question-text">Можно ли получить доступ к клиентским данным с серверов разработки?</h4>
            <p class="question-answer">Нет. Серверы разработки и тестирования стоят в нашем московском офисе и не связаны с датацентрами Мегаплана. Любые операции с данными клиентов Мегаплана возможны только под руководством технического директора. При тестировании используются деперсонализированные данные.</p>
        </div>

        <div class="question-block">
            <h4 class="question-text">Можно ли стереть все в своем аккаунте?</h4>
            <p class="question-answer">В Мегаплане нельзя одной кнопкой стереть все данные. Владельцы аккаунтов с правами директора или администратора могут вручную перебрать и удалить данные Мегаплана, объект за объектом. Например, обиженный уволенный администратор может потратить ночь на то, чтобы вручную вычистить ваш Мегаплан.</p>
        </div>

    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>