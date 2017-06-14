<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Блог");
$APPLICATION->SetTitle("Блог");?>
<div class="content">
    <div class="slogan row">
        <div class="col-xs-8 col-xs-offset-4 col-sm-5 col-sm-offset-6 col-md-4 col-md-offset-6">
            <p>Это <br> того стоит</p>
            <a href="" class="button green">Купить Мегаплан</a>
        </div>
    </div>
    <div class="buttons_prices row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <a href="" class="button sand">Цены в облаке</a>
            <a href="" class="button transparent">на вашем сервере</a>
        </div>
    </div>
    <div class="plans row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
            <script>
                $(document).ready(function () {
                    $(".plan").hover(function () {
                        $(this).toggleClass("selected_plan");
                    })
                })
            </script>
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
                    <div class="choose"><a href="#" class="button green">выбрать</a></div>
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
                    <div class="choose"><a href="#" class="button green">выбрать</a></div>
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
                    <div class="choose"><a href="#" class="button green">выбрать</a></div>
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
                    <div class="choose"><a href="#" class="button green">выбрать</a></div>
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
                    <div class="choose"><a href="#" class="button green">выбрать</a></div>
                </div>
            </div>
            <div class="money">
                <a href=""><img src="<?=SITE_TEMPLATE_PATH."/img/prices/rub.png"?>" alt="" ></a>
                <span>Рубль</span>
            </div>
        </div>
    </div>
    <div class="button_compare row">
        <div class="col-md-4 col-md-offset-4">
            <a href="#" class="button green">Сравнить все тарифы</a>
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
                <input type="submit" class="button green" value="Заказать">
            </form>
        </div>
    </div>
</div>
<div>

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
