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

<section class="top-banner banner-clients"  style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);">
    <div class="container">
        <div class="col-md-12 banner-inner">
            <div class="banner-suptext"><?=$arResult["PROPERTIES"]["COMPANY_SPHERE"]["VALUE"]?></div>
            <div class="banner-text color-white"><?=$arResult["NAME"]?></div>
        </div>
    </div>
</section>

<section class="content-crop section-blog_detail bg-white">
    <div class="section-wrapper bg-white">

        <div class="post">
            <?if($arResult["PROPERTIES"]["TITLE"]["VALUE"]){?>
                <h2 class="title">
                    <?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?>
                </h2>
            <?}?>
            <p class="preview-text">
                <?=$arResult["DETAIL_TEXT"]?>
            </p>
        </div>

    </div>
</section>