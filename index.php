<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Нужен рост - нужен мегаплан");
?>
<style>html { overflow-y: hidden; }</style>


<section class="top-banner banner-main">
	<div class="container">
		<div class="col-md-12 banner-inner main-height">
			<div class="main-banner-text banner-text color-white "><?$APPLICATION->ShowTitle(false)?></div>
			<div class="banner-button main">
				<a class="button" href="#" title=""><span class="button-green">Попробовать бесплатно</span></a><p class="main_p"></p>
				<a class="button" href="more/" title=""><span class="button-white">Узнать больше</span></a>
			</div>
			<div class="info-block-div">
				<div class="info-block-main">Простой интерфейс</div>
				<div class="info-block-main">Гибкие настройки</div>
				<div class="info-block-main">Персональный менеджер</div>
				<div class="info-block-main">Минимум времени для старта</div>
			</div>
			<button onclick="Mute()" type="button" class="main-block-mute" id="mute"><!--<div class="main-block-mute" ></div>--></button>
		</div>
	</div>
</section>

<div id="trailer" class="is_overlay">
<video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
    <source src="/local/templates/megaplan/video/mgplan.mp4" type="video/mp4"></source>
</video>

</div>

<script src="/local/templates/megaplan/js/scripts_main.js"></script>