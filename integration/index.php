<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "API и Интеграция");
$APPLICATION->SetTitle("Дополнить возможности мегаплана - просто");?>

<script src="/local/templates/megaplan/js/script.js"></script>
 
<section class="top-banner banner-integ">
	<div class="container">
		<div class="col-md-12 banner-inner">
			<div class="banner-text color-white"><?$APPLICATION->ShowTitle(false)?></div>
			<div class="banner-button integ">
				<a class="button" href="#" title=""><span class="button-green">2 недели бесплатно</span></a>
			</div>
		</div>
	</div>
</section>

<section class="content-crop section-contacts bg-white">
	<div class="section-wrapper-integ bg-white">
			<div class="integ-head">
				<p class="integ-title integ-title-bott">API Мегаплана</p>
				API помогает настроить обмен данными между Мегапланом и вашим приложением, интернет-магазином или сервисом. Это простой способ создавать, редактировать и получать любую информацию в Мегаплане.
			</div>
			<div class="integ-for-dev">
				<p class="integ-title integ-title-bott">Для разработчиков</p>
				<div class="integ-small-block">
					<p class="integ-title-small">API</p>
					<span class="integ-geen-text">
						<p>Общие правила</p>
						<p>Аутентификация и авторизация</p>
						<p>Библиотека для PHP</p>
					</span>
				</div>
				<div class="integ-small-block">
					<p class="integ-title-small">Приложения</p>
					<span class="integ-geen-text">
						<p>Виджеты</p>
						<p>Потоки событий</p>
					</span>
				</div>
				<div class="integ-small-block">
					<p class="integ-title-small">Сделки</p>
					<span class="integ-geen-text">
						<p>Общие правила</p>
						<p>Аутентификация и авторизация</p>
						<p>Библиотека для PHP</p>
					</span>
				</div>
			</div>
			
			<div class="integ-main">
				<p class="integ-title integ-title-bott">Заказы из интернет-магазинов</p>
				<div class="integ-elem integ-elem-icon-1">
					<p class="integ-title-very-small">Через почту</p>
					Автоматическое создание сделок из писем, которые приходят на специальный адрес. Быстрое оформление заказа.
				</div>
				<div class="integ-elem integ-elem-icon-2">
					<p class="integ-title-very-small">CommerceML v2</p>
					<span class="integ-geen-text">Формат запросов, с помощью которого интернет-магазины обмениваются данными о заказах и товарах.</span>
				</div>
				<div class="integ-elem integ-elem-icon-3">
					<p class="integ-title-very-small">Roistat</p>
					Сквозная аналитика вашего бизнеса на основе прибыли, а не конверсий. Статистика по любым видам рекламы, автоматическая загрузка расходов, мультиканальная аналитика и колл-трекинг.
				</div>
				<div class="integ-title-for-elem">
					<div class="integ-title-for-elem-1"><p class="integ-title integ-title-bott">Ip-Телефония</p></div>
					<div class="integ-title-for-elem-2"><p class="integ-title integ-title-bott">Дела и встречи</p></div>
				</div>
				<div class="integ-ip-tell">
					<div class="integ-elem-2 integ-elem-icon-4">
						<p class="integ-title-very-small">Oktell</p>
						Интеграция с телефонией, звонки клиентам и сотрудникам в браузере, история звонков и записи разговоров.
					</div>
					<div class="integ-elem-2 integ-elem-icon-5">
						<p class="integ-title-very-small">Telefum</p>
						Звонки клиентам, быстрый переход к карточке клиента, история звонков и СМС.
					</div>
				</div>			
				<div class="integ-deal">			
					<div class="integ-elem-2 integ-elem-icon-6">
						<p class="integ-title-very-small">Google-календарь</p>
						Обмен делами и событиями между календарем Google и Мегапланом.
					</div>
				</div>
				<div class="integ-title-for-elem">
					<div class="integ-title-for-elem-1"><p class="integ-title integ-title-bott">Бухгалтерия предприятия</p></div>
					<div class="integ-title-for-elem-2"><p class="integ-title integ-title-bott">Тендеры</p></div>
				</div>
				<div class="integ-ip-tell">
					<div class="integ-elem-2 integ-elem-icon-7">
						<p class="integ-title-very-small">1С: Бухгалтерия</p>
						Обмен счетами, контрагентами товарами и услугами. Для синхронизации используется внешний модуль.
					</div>
					<div class="integ-elem-2 integ-elem-icon-8">
						<p class="integ-title-very-small">1С: Бухгалтерия через интернет</p>
						Обмен счетами, контрагентами товарами и услугами с бухгалтерией в облаке. Для синхронизации используется внеший модуль.
					</div>
				</div>
				<div class="integ-deal">			
					<div class="integ-elem-2 integ-elem-icon-9">
						<p class="integ-title-very-small">РТС-тендер</p>
						Уведомления о новых аукционах и тендерах интересующей вас отрасли в информере Мегаплана.
					</div>
				</div>		
				<div class="integ-title-block"><p class="integ-title integ-title-bott-2 integ-title-top">Финансовые операции</p></div>
				<div class="integ-ip-tell">
					<div class="integ-elem integ-elem-icon-10">
						<p class="integ-title-very-small">экспорт/Импорт</p>
						Экспорт операций из модуля «Финансы» и импорт банковских выписок в формате Excel и 1С.
					</div>
				</div>
			</div>
			
			<div class="integ-add-func">
				<p class="integ-title integ-title-center">Дополнительные функции</p>
				<div class="integ-title-for-elem">
				<div class="integ-elem-2 integ-elem-icon-11 integ-elem-footer">
					<p class="integ-title-very-small">Стикер-Клик</p>
					<p>Модуль умных уведомлений из сделки Мегаплана в Telegram сотрудников</p>
					<span class="integ-price">2500 р</span>
				</div>
				<div class="integ-elem-2 integ-elem-icon-12 integ-elem-footer">
					<p class="integ-title-very-small">Универсальная карточка клиента</p>
					<p>Универсальная карточка клиента. Позволяет отображать только те поля клиента, которые необходимо. Настраивается отдельно, для каждого типа клиента</p>
					<span class="integ-price">БЕСПЛАТНО</span>
				</div>				
				<div class="integ-elem-2 integ-elem-icon-13 integ-elem-footer">
					<p class="integ-title-very-small">Бонус</p>
					<p>Начисление бонусов и штрафов сотрудникам сценарием из сделки, с уведомлением в Telegram</p>
					<span class="integ-price">2500 р</span>
				</div>
				</div>
				<div class="integ-title-for-elem">
					<div class="integ-elem-2 integ-elem-icon-14 integ-elem-footer">
						<p class="integ-title-very-small">Google Drive</p>
						<p>Позволяет создавать папки в Google Drive из задач Мегаплана.</p>
						<span class="integ-price">200 р</span>
					</div>
					<div class="integ-elem-2 integ-elem-icon-15 integ-elem-footer">
						<p class="integ-title-very-small">FeedBack</p>
						<p>Синхронизация значений полей в связанных сделках - из одной в другую</p>
						<span class="integ-price">2500 р</span>
					</div>
					<div class="integ-elem-2 integ-elem-icon-16 integ-elem-footer">
						<p class="integ-title-very-small">Коробочная версия</p>
						<p>Устанавливается на ваш сервер, по вашим стандартам безопасности.</p>
						<span class="integ-price">ПО ЗАПРОСУ</span>
					</div>	
				</div>
			</div>
			<div class="integ-button">
				<a class="button" href="#" title=""><span class="more-button-yellow">Показать ещё</span></a>
			</div>	
	</div>
</section>

<div class="sfp-main">
	<div class="sfp-close"></div>
	<div class="sfp-title">Решения от партнёров</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-div-line">
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-1"></div>
			<div class="sft-descrip">Набор дополнительных функций</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">1500 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-2"></div>
			<div class="sft-descrip">Интеграция источников лидогенерации CRM</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">146 р</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
		<div class="sfp-cell">
			<div class="sft-circle sft-circle-3"></div>
			<div class="sft-descrip">Интеграция с ATC Binotel</div>
			<div class="sft-cell-bott">
				<p class="sft-p-bott"><span class="sft-price">Бесплатно</span></p>
				<div class="sft-button"><a class="button" href="#" title=""><span class="button-green-withoutb">Узнать больше</span></a></div>
			</div>
		</div>
	</div>
	<div class="sfp-button">
		<a class="button" href="#" title=""><span class="more-button-green">Попробовать бесплатно</span></a>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>