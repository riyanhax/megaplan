<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="top-banner banner-blog_detail" style="background-image: url(/local/templates/megaplan/img/security/security-bg.jpg);"><?//=$arResult["DETAIL_PICTURE"]?>
    <div class="container">
        <div class="col-md-12 banner-inner">
            <div class="banner-suptext"><?=$arResult["PROPERTIES"]["RUBRIC"]["VALUE"]?></div>
            <div class="banner-text color-white">Наши новости и анонсы из первых рук</div>
            <div class="banner-date"><?=$arResult["PROPERTIES"]["DATE"]["VALUE"]?></div>
        </div>
    </div>
</section>

<section class="content-crop section-blog_detail bg-white">
    <div class="section-wrapper bg-white">

        <div class="post" id="post">
            <h2 class="block-title">
                <?=$arResult["NAME"]?>
            </h2>
            <?if($arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]){?>
                <h2 class="title">
                    <?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?>
                </h2>
            <?}?>
            <p class="preview-text">
                <?=$arResult["DETAIL_TEXT"]?>
            </p>
            <div class="webinar-link">
                <a class="button" href="#" title=""><span class="button-yellow">Запись на вебинар</span></a>
            </div>
        </div>

    </div>
</section>