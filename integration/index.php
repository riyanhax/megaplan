<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "API и Интеграция");
$APPLICATION->SetTitle("Дополнить возможности мегаплана - просто");?>

<script src="/local/templates/megaplan/js/script.js"></script>
 
<section class="top-banner banner-integ">
	<div class="container">
		<div class="col-md-12 banner-inner">
			<!--<div class="banner-text color-white"><?//$APPLICATION->ShowTitle(false)?></div>-->
			<div class="banner-text color-white">Дополнить<p></p> возможности мегаплана - просто</div>
			<div class="banner-button integ">
				<a class="button" href="#" title=""><span class="button-green">2 недели бесплатно</span></a>
			</div>
		</div>
	</div>
</section>

<section class="content-crop section-contacts bg-white">
	<div class="section-wrapper bg-white">

				<div class="integ-head">
				<p class="integ-title integ-title-bott-2">API Мегаплана</p>
				API помогает настроить обмен данными между Мегапланом и вашим приложением, интернет-магазином или сервисом. Это простой способ создавать, редактировать и получать любую информацию в Мегаплане.
			</div>
            <div class="clear"></div>

        </div>
    </section>

<section class="content-crop section-contacts bg-white">
	<div class="section-wrapper-integ">
			<div class="integ-for-dev">
				<p class="integ-title integ-title-bott">Для разработчиков</p>
				<div class="integ-small-block">
					<p class="integ-title-small">API</p>
						<a href="#"><p class="integ-geen-text">Общие правила</p></a>
						<a href="#"><p class="integ-geen-text">Аутентификация и авторизация</p></a>
						<a href="#"><p class="integ-geen-text">Библиотека для PHP</p></a>
				</div>
				<div class="integ-small-block">
					<p class="integ-title-small">Приложения</p>
						<a href="#"><p class="integ-geen-text">Виджеты</p></a>
						<a href="#"><p class="integ-geen-text">Потоки событий</p></a>
				</div>
				<div class="integ-small-block integ-small-block-2">
					<p class="integ-title-small">Сделки</p>
						<a href="#"><p class="integ-geen-text">Общие правила</p></a>
						<a href="#"><p class="integ-geen-text">Аутентификация и авторизация</p></a>
						<a href="#"><p class="integ-geen-text">Библиотека для PHP</p></a>
				</div>
			</div>
			
			<div class="integ-main">
				<p class="integ-title integ-title-bott">Заказы из интернет-магазинов</p>
				<div class="integ-elem integ-elem-icon-1">
				<a href="../sales260" class="integ-href">
					<p class="integ-title-very-small">Через почту</p>
					<span class="integ-href">Автоматическое создание сделок из писем, которые приходят на специальный адрес. Быстрое оформление заказа.</span>
				</a></div>
				
				<div class="integ-elem integ-elem-icon-2"><a href="../API_online_store" class="integ-href">
					<p class="integ-title-very-small">CommerceML v2</p>
					<span class="integ-geen-text-2">Формат запросов, с помощью которого интернет-магазины обмениваются данными о заказах и товарах.</span>
				</a></div>
				
				
				<div class="integ-elem integ-elem-icon-3"><a href="../integration_roistat" class="integ-href">
					<p class="integ-title-very-small">Roistat</p>
					<span class="integ-href">Сквозная аналитика вашего бизнеса на основе прибыли, а не конверсий. Статистика по любым видам рекламы, автоматическая загрузка расходов, мультиканальная аналитика и колл-трекинг.</span>
				</a></div>
				
				<div class="integ-title-for-elem">
					<div class="integ-title-for-elem-1"><p class="integ-title integ-title-bott">Ip-Телефония</p></div>
					<div class="integ-title-for-elem-2"><p class="integ-title integ-title-bott integ-title-bott-absl">Дела и встречи</p></div>
				</div>
				<div class="integ-ip-tell">
					
					<div class="integ-elem-2 integ-elem-icon-4"><a href="http://oktell.ru/" class="integ-href">
						<p class="integ-title-very-small">Oktell</p>
						<span class="integ-href">Интеграция с телефонией, звонки клиентам и сотрудникам в браузере, история звонков и записи разговоров.</span>
					</a></div>
					
					
					<div class="integ-elem-2 integ-elem-icon-5"><a href="https://telefum.com/decisions/oblcrm/megaplan/" class="integ-href">
						<p class="integ-title-very-small">Telefum</p>
						<span class="integ-href">Звонки клиентам, быстрый переход к карточке клиента, история звонков и СМС.</span>
					</a></div>
					
				</div>			
				<div class="integ-deal">
					
					<div class="integ-elem-2 integ-elem-icon-6"><a href="../up201105_11" class="integ-href">
						<p class="integ-title-very-small">Google-календарь</p>
						<span class="integ-href">Обмен делами и событиями между календарем Google и Мегапланом.</span>
					</a></div>
					
				</div>
				<div class="integ-title-for-elem">
					<div class="integ-title-for-elem-1"><p class="integ-title integ-title-bott">Бухгалтерия предприятия</p></div>
					<div class="integ-title-for-elem-2"><p class="integ-title integ-title-bott integ-title-bott-absl-2">Тендеры</p></div>
				</div>
				<div class="integ-ip-tell">
					<div class="integ-elem-2 integ-elem-icon-7">
					<a href="../1c-synchronization" class="integ-href">
						<p class="integ-title-very-small">1С: Бухгалтерия</p>
						<span class="integ-href">Обмен счетами, контрагентами товарами и услугами. Для синхронизации используется внешний модуль.</span>
					</a>
					</div>
					<div class="integ-elem-2 integ-elem-icon-8">
						<a href="../solutions/1c/" class="integ-href">
						<p class="integ-title-very-small">1С: Бухгалтерия через интернет</p>
						<span class="integ-href">Обмен счетами, контрагентами товарами и услугами с бухгалтерией в облаке. Для синхронизации используется внешний модуль.</span>
						</a>
					</div>
				</div>
				<div class="integ-deal">
									
					<div class="integ-elem-2 integ-elem-icon-9"><a href="../tenders/" class="integ-href">
						<p class="integ-title-very-small">РТС-тендер</p>
						<span class="integ-href">Уведомления о новых аукционах и тендерах интересующей вас отрасли в информере Мегаплана.</span>
					</a></div>
					
				</div>		
				<div class="integ-title-block"><p class="integ-title integ-title-bott-2 integ-title-top">Финансовые операции</p></div>
				<div class="integ-ip-tell">
					
					<div class="integ-elem-3 integ-elem-icon-10"><a href="..//FinExp_1" class="integ-href">
						<p class="integ-title-very-small">экспорт/Импорт</p>
						<span class="integ-href">Экспорт операций из модуля «Финансы» и импорт банковских выписок в формате Excel и 1С.</span>
					</a></div>
					
				</div>
			</div>
			
			<div class="integ-add-func">
				<p class="integ-title integ-title-center">Дополнительные функции</p>
				<div class="integ-title-for-elem">
				<div class="integ-elem-2 integ-elem-icon-11 integ-elem-footer integ-elem-4">
					<p class="integ-title-very-small">Стикер-Клик</p>
					<p class="integ-elem-footer-thin">Модуль умных уведомлений из сделки Мегаплана в Telegram сотрудников</p>
					<span class="integ-price">2500 р</span>
				</div>
				<div class="integ-elem-2 integ-elem-icon-12 integ-elem-footer integ-elem-4">
					<p class="integ-title-very-small">Универсальная карточка клиента</p>
					<p class="integ-elem-footer-thin">Универсальная карточка клиента. Позволяет отображать только те поля клиента, которые необходимо. Настраивается отдельно, для каждого типа клиента</p>
					<span class="integ-price">БЕСПЛАТНО</span>
				</div>				
				<div class="integ-elem-2 integ-elem-icon-13 integ-elem-footer integ-elem-4">
					<p class="integ-title-very-small">Бонус</p>
					<p class="integ-elem-footer-thin">Начисление бонусов и штрафов сотрудникам сценарием из сделки, с уведомлением в Telegram</p>
					<span class="integ-price">2500 р</span>
				</div>
				</div>
				<div class="integ-title-for-elem">
					<div class="integ-elem-2 integ-elem-icon-14 integ-elem-footer integ-elem-4">
						<p class="integ-title-very-small">Google Drive</p>
						<p class="integ-elem-footer-thin">Позволяет создавать папки в Google Drive из задач Мегаплана.</p>
						<span class="integ-price">200 р</span>
					</div>
					<div class="integ-elem-2 integ-elem-icon-15 integ-elem-footer integ-elem-4">
						<p class="integ-title-very-small">FeedBack</p>
						<p class="integ-elem-footer-thin">Синхронизация значений полей в связанных сделках - из одной в другую</p>
						<span class="integ-price">2500 р</span>
					</div>
					<div class="integ-elem-2 integ-elem-icon-16 integ-elem-footer integ-elem-4">
						<p class="integ-title-very-small">Коробочная версия</p>
						<p class="integ-elem-footer-thin">Устанавливается на ваш сервер, по вашим стандартам безопасности.</p>
						<span class="integ-price">ПО ЗАПРОСУ</span>
					</div>	
				</div>
			</div>
			<div class="integ-button">
				<a class="button" href="#" title=""><span class="more-button-yellow">Показать ещё</span></a>
			</div>	
	</div>
</section>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>