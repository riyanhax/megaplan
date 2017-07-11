<?php
/**
 * Created by PhpStorm.
 * User: vladb
 * Date: 08.07.2017
 * Time: 20:49
 */
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Цены");
$APPLICATION->SetTitle("Цены");?>
<div class="prices">
    <div class="prices-banner">
        <div class="prices-wrapper">
            <div class="prices-banner-header">
                <p>Это <br> того стоит</p>
            </div>
            <div class="prices-banner-button-buy">
                <a href="#" class="button-common button-green capitalize hover_w">Купить Мегаплан</a>
            </div>
        </div>
    </div>
    <div class="prices-content">
        <div class="prices-wrapper">
            <div class="prices-content-buttons-choose">
                <a href="#cloud_prices" class="button-common button-tr uppercase cloud_prices">Цены в облаке</a>
                <a href="#server_prices" class="button-common button-tr uppercase server_prices">на вашем сервере</a>
                <div>
                    <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/prices/rub.png"></a>
                    <span>рубль</span>
                </div>
            </div>
            <div class="prices-content-plans">
                <div id="plansBlock">
                    <div id="cloud_prices">
                        <div>
                            <div class="plan-col-1 plan">
                                <div class="plan_name"><span>Старт</span></div>
                                <div class="plan_price"><span>0</span><span>навсегда</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan-col-2 plan">
                                <div class="plan_name"><span>Совместная работа</span></div>
                                <div class="plan_price"><span>330</span><span>за пользователя в месяц</span></div>
                                <div class="plan_description"><span>Порядок в делах</span>
                                    <ul>
                                        <li>Неограниченные возможности в работе с задачами и поручениями</li>
                                        <li>Работа с проектами</li>
                                        <li>контроль сотрудников</li>
                                        <li>формирование отчетов</li>
                                    </ul>
                                </div>
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan-col-3 plan">
                                <div class="plan_name"><span>Совместная работа+</span></div>
                                <div class="plan_price"><span>430</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan-col-4 plan">
                                <div class="plan_name"><span>Клиенты и продажи</span></div>
                                <div class="plan_price"><span>550</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan-col-5 plan">
                                <div class="plan_name"><span>Клиенты и продажи+</span></div>
                                <div class="plan_price"><span>750</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                    </div>
                    <div id="server_prices">
                        <div>
                            <div class="plan">
                                <div class="plan_name"><span>Совместная работа</span></div>
                                <div class="plan_price"><span>5300</span><span>за пользователя в месяц</span></div>
                                <div class="plan_description"><span>Порядок в делах</span>
                                    <ul>
                                        <li>Неограниченные возможности в работе с задачами и поручениями</li>
                                        <li>Работа с проектами</li>
                                        <li>контроль сотрудников</li>
                                        <li>формирование отчетов</li>
                                    </ul>
                                </div>
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan">
                                <div class="plan_name"><span>Совместная работа+</span></div>
                                <div class="plan_price"><span>7300</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan">
                                <div class="plan_name"><span>Клиенты и продажи</span></div>
                                <div class="plan_price"><span>9500</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="plan">
                                <div class="plan_name"><span>Клиенты и продажи+</span></div>
                                <div class="plan_price"><span>12500</span><span>за пользователя в месяц</span></div>
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
                                <div class="choose"><a href="#" class="button-common button-green hover_w">выбрать</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prices-content-compare-plans">
                <a href="#" class="button-common button-green button-compare hover_w">Выбрать тариф</a>
            </div>
            <div class="prices-content-description">
                <p>У нас пять тарифов, у которых различаются цена и функциональные возможности.</p>
                <p>Узнать какие опции доступны по каждому из них вы можете у наших специалистов.</p>
                <p>Платите только за те возможности, которые вам полезны.</p>
            </div>
        </div>
    </div>
    <div class="prices-form">
        <div class="prices-form-wrapper">
            <div class="prices-wrapper">
                <div class="prices-form-header">
                    <p>Быстрое внедрение Мегаплана</p>
                </div>
                <div class="prices-form-text">
                    <p>Настроим систему под вашу специфику работы.</p>
                    <p>Расскажем фишки и нестандартные возможности работы.</p>
                    <p>Укажите эл. почту для уточнения деталей:</p>
                </div>
                <form action="">
                    <input class="input_transparent placeholder-w" type="email" name="user_email" id="user_email" placeholder="Почта" class="input_transparent placeholder-w">
                    <input type="submit" class="button-common button-green hover_w" value="Заказать">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="prices-big-popup" id="compare_plans">
    <div class="close-popup">
        <div></div>
        <div></div>
    </div>
    <div class="prices-wrapper">
        <div class="big-popup-header">
            <p>сравнение тарифов</p>
        </div>
        <div class="prices-content-buttons-choose">
            <a href="#cloud_prices" class="button-common button-tr uppercase cloud_prices">Цены в облаке</a>
            <a href="#server_prices" class="button-common button-tr uppercase server_prices">на вашем сервере</a>
        </div>
        <div class="big-popup-place-description">
            <div id="cloud_prices_des">
                <p>Мегаплан в облаке работает везде, где есть интернет. Ничего не нужно устанавливать.</p>
                <p>Сотрудники входят по логинам и паролям, как в почте.</p>
            </div>
            <div id="server_prices_des">
                <p>Самостоятельно устанавливаете Мегаплан на ваших серверах и поддерживаете работоспособность.</p>
                <p>В стоимость CRM системы включено 3 месяца бесплатной технической поддержки и обновлений.</p>
            </div>

        </div>
    </div>
    <div class="center-block t_wrapper">
        <table id="compare_plans_table">
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
                    <div class="stars">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/prices/stars.png" alt="">
                    </div>
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
                <td>Контроль задачи и сроков</td>
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
    </div>
    <a href="#" class="button-common button-green hover_w">Две недели бесплатно</a>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
