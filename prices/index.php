<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Блог");
$APPLICATION->SetTitle("Блог");?>
<div class="content content-prices">
    <div class="slogan row">
        <div class="col-xs-8 col-xs-offset-4 col-sm-5 col-sm-offset-6 col-md-4 col-md-offset-6">
            <p>Это <br> того стоит</p>
            <a href="" class="button-common button-green">Купить Мегаплан</a>
        </div>
    </div>
    <div class="buttons_prices row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <a href="" class="button-common button-yellow">Цены в облаке</a>
            <a href="" class="button-common button-tr">на вашем сервере</a>
        </div>
    </div>
    <div class="plans row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
<!--            <script>-->
<!--                $(document).ready(function () {-->
<!--                    $(".plan").hover(function () {-->
<!--                        $(this).toggleClass("selected_plan");-->
<!--                    })-->
<!--                })-->
<!--            </script>-->
            <div class="col-sm-12 col-md-five">
                <div class="plan">
                    <div class="plan_name"><span>Старт</span></div>
                    <div class="plan_price"><span>0р</span><span>навсегда</span></div>
                    <div class="plan_description">
                        <span>Все только начинается</span>
                        <span>Одновременно</span>
                        <ul>
                            <li>10 сотрудников</li>
                            <li>50 задач</li>
                            <li>100 событий</li>
                            <li>1000 клиентов</li>
                            <li>сделок</li>
                        </ul>
                    </div>
                    <div class="choose"><a href="#" class="button-common button-green">выбрать</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-five">
                <div class="plan">
                    <div class="plan_name"><span>Совместная работа</span></div>
                    <div class="plan_price"><span>330р</span><span>за пользователя в месяц</span></div>
                    <div class="plan_description"><span>Порядок в делах</span>
                        <ul>
                            <li>Неограниченные возможности в работе с задачами и поручениями</li>
                            <li>Работа с проектами</li>
                            <li>контроль сотрудников</li>
                            <li>формирование отчетов</li>
                        </ul>
                    </div>
                    <div class="choose"><a href="#" class="button-common button-green">выбрать</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-five">
                <div class="plan">
                    <div class="plan_name"><span>Совместная работа+</span></div>
                    <div class="plan_price"><span>430р</span><span>за пользователя в месяц</span></div>
                    <div class="plan_description"><span>Идеальный порядок в делах</span>
                        <ul>
                            <li>Неограниченные возможности в работе с задачами и поручениями</li>
                            <li>Работа с проектами</li>
                            <li>контроль сотрудников</li>
                            <li>формирование отчетов</li>
                            <li>Согласование документов</li>
                            <li>Департаменты</li>
                            <li>Больше возможностей в работе сотрудников</li>
                        </ul>
                    </div>
                    <div class="choose"><a href="#" class="button-common button-green">выбрать</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-five">
                <div class="plan">
                    <div class="plan_name"><span>Клиенты и продажи</span></div>
                    <div class="plan_price"><span>550р</span><span>за пользователя в месяц</span></div>
                    <div class="plan_description"><span>Большие продажи</span>
                        <ul>
                            <li>Неограниченные возможности в работе с задачами и поручениями</li>
                            <li>Работа с проектами</li>
                            <li>контроль сотрудников</li>
                            <li>формирование отчетов</li>
                            <li>Согласование документов</li>
                            <li>Департаменты</li>
                            <li>Больше возможностей в работе сотрудников</li>
                            <li>клиентов</li>
                        </ul>
                    </div>
                    <div class="choose"><a href="#" class="button-common button-green">выбрать</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-five">
                <div class="plan">
                    <div class="plan_name"><span>Клиенты и продажи+</span></div>
                    <div class="plan_price"><span>750р</span><span>за пользователя в месяц</span></div>
                    <div class="plan_description"><span>Большие продажи и контроль денег</span>
                        <ul>
                            <li>Неограниченные возможности в работе с задачами и поручениями</li>
                            <li>Работа с проектами</li>
                            <li>контроль сотрудников</li>
                            <li>формирование отчетов</li>
                            <li>Согласование документов</li>
                            <li>Департаменты</li>
                            <li>Больше возможностей в работе сотрудников</li>
                            <li>клиентов</li>
                            <li>Учет денег по проектам</li>
                            <li>Учет денег по клиентам</li>
                            <li>Интеграция с 1С</li>
                        </ul>
                    </div>
                    <div class="choose"><a href="#" class="button-common button-green">выбрать</a></div>
                </div>
            </div>
            <div class="money">
                <a href=""><img src="<?=SITE_TEMPLATE_PATH."/img/prices/rub.png"?>" alt="" ></a>
                <span>Рубль</span>
            </div>
        </div>
    </div>
    <div class="button_compare row">
<!--        <script>-->
<!--            $(document).ready(function () {-->
<!--                var isPopupOpen = 0;-->
<!--                var contentHeight = $(".content").height();-->
<!--                var popupHeight = $("#compare_plans").height();-->
<!--                console.log(isPopupOpen);-->
<!--                $("#compare_plans .close_popup a").click(function () {-->
<!--                    $("#compare_plans").animate({-->
<!--                        top: "-2290px",-->
<!--                    }, {-->
<!--                        duration: 600-->
<!--                    });-->
<!--//                    background: url(../img/prices/lady.png) no-repeat;-->
<!--//                    background-size: contain;-->
<!--                    isPopupOpen = 0;-->
<!--                    console.log(isPopupOpen);-->
<!--                    $(".content>div").css("display","block").css("visibility","visible");-->
<!--                    $(".content").height("initial").css("background-image","url(/local/templates/megaplan/img/prices/lady.png)").css("background-size","contain").css("background-repeat","no-repeat");-->
<!--                });-->
<!--                $(".button_compare a").click(function () {-->
<!--                    $("#compare_plans").animate({-->
<!--                        top: "90px",-->
<!--                    }, {-->
<!--                        duration: 520-->
<!--                    });-->
<!--                    isPopupOpen = 1;-->
<!--                    console.log(isPopupOpen);-->
<!--                    console.log(contentHeight);-->
<!--                    console.log(popupHeight);-->
<!--                    $(".content>div").css("display","none").css("visibility","hidden");-->
<!--                    $(".content").height(popupHeight).css("background","none");-->
<!--                });-->
<!--            });-->
<!--        </script>-->
        <div class="col-md-4 col-md-offset-4">
            <a href="#" class="button-common button-green">Сравнить все тарифы</a>
        </div>
    </div>
    <div class="row text">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
            <div>
                <span>-10% от 6 месяцев</span>
                <span>-15% от 12 месяцев</span>
                <span>-15% от 24 месяцев</span>
            </div>
            <div>
                <p>У нас пять тарифов, у которых различаются цена и функциональные возможности. </p>
                <p>Узнать какие опции доступны по каждому из них вы можете у наших специалистов.</p>
                <p>Платите только за те возможности, которые вам полезны.</p>
            </div>
        </div>
    </div>
    <div class="row form">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <span>Быстрое внедрение Мегаплана</span>
            <form>
                <p>Настроим систему под вашу специфику работы.</p>
                <p>Расскажем фишки и нестандартные возможности работы.</p>
                <p>Укажите эл. почту для уточнения деталей:</p>
                <input type="email" name="user_email" id="user_email" placeholder="Почта" class="input_transparent placeholder-w">
                <input type="submit" class="button-common button-green" value="Заказать">
            </form>
        </div>
    </div>
</div>
<div class="col-md-12 col-xl-10 col-xl-offset-1 big_popup" id="compare_plans">
    <div class="col-md-12">
        <div class="close_popup">
            <a href="#">
                <div></div>
                <div></div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="row header_popup">
                    <div class="col-xs-10 col-xs-offset-1">
                        <p>сравнение тарифов</p>
                    </div>
                </div>
                <div class="row text_popup">
                    <div>
                        <a href="" class="button-common button-yellow">цены в облаке</a>
                        <a href="" class="button-common button-tr">на вашем сервере</a>
                    </div>
                    <div>
                        <p>Мегаплан в облаке работает везде, где есть интернет. Ничего не нужно устанавливать.
                        Сотрудники входят по логинам и паролям, как в почте.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-block t_wrapper">
            <table class="table table-condensed compare_plans_table">
                <thead>
                    <tr>
                    <th></th>
                    <th>
                        <div class="plan_name">
                            <span>Старт</span>
                        </div>
                        <div class="plan_price">
                            <span>0</span>
                            <span>навсегда</span>
                        </div>
                    </th>
                    <th>
                        <div class="plan_name">
                            <span>Совместная работа</span>
                        </div>
                        <div class="plan_price">
                            <span>330</span>
                            <span>за пользователя в месяц</span>
                        </div>
                    </th>
                    <th>
                        <div class="plan_name">
                            <span>Совместная работа+</span>
                        </div>
                        <div class="plan_price">
                            <span>430</span>
                            <span>за пользователя в месяц</span>
                        </div>
                    </th>
                    <th>
                        <div class="plan_name">
                            <span>Клиенты и продажи</span>
                        </div>
                        <div class="plan_price">
                            <span>550</span>
                            <span>за пользователя в месяц</span>
                        </div>
                    </th>
                    <th>
                        <div class="plan_name">
                            <span>Клиенты и продажи+</span>
                        </div>
                        <div class="plan_price">
                            <span>750</span>
                            <span>за пользователя в месяц</span>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Контроль задачи и сроков исполнения</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Рабочий стол</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Отчеты</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Гибкая настройка прав сотрудников</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Обмен документами</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Бизнес-чат</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Дисковое пространство</td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Количество сотрудников</td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Количество клиентов</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                        <td>
                            <span>неограниченно</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Воронка продаж</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Управление финансами</td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt="">
                        </td>
                        <td>
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt="">
                        </td>
                    </tr>
                    <tr class="sub_header">
                        <td colspan="6" class="not_active">
                            <span>Дополнительные возможности</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Мобильное приложение</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Расширенные поля в клиентах</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Поля в задачах и проектах</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Департаменты</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Согласование документов</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Опросы в модуле</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Общение</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Оценка задач и проектов</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr class="sub_header">
                        <td colspan="6" class="not_active">
                            <span>Интеграция</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>API</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>ActiveDirectory</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Интеграция с почтой</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Встроенная телефония</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Интеграция с 1С</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="not_active"><span>Интеграция с Октелл</span></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/not-check.png" alt=""></td>
                        <td><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/check.png" alt=""></td>
                    </tr>
                </tbody>
            </table>
            <a href="#" class="button-common button-green">две недели бесплатно</a>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
