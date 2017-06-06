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

<section class="top-banner banner-clients">
    <div class="container">
        <div class="col-md-12 banner-inner">
            <div class="banner-text color-white">
                Мегаплан собирает ошибки<br>
                Мы анализируем и исправляем
            </div>
            <div class="banner-subtext">История компании «Юмисофт»</div>
            <div class="banner-button">
                <a class="button" href="#" title=""><span class="button-green">Стать клиентом</span></a>
            </div>
        </div>
    </div>
</section>

<section class="content-crop section-clients_history bg-grey">
    <div class="section-wrapper bg-grey">

        <h2 class="block-title">
            Истории других клиентов
        </h2>

        <div class="other-clients">

            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="client-item_block col-sm-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="item-meta bg-white">
                        <span class="company-sphere"><?=$arItem["PROPERTIES"]["COMPANY_SPHERE"]["VALUE"]?></span>
                    </div>
                    <div class="img-block bg-grey">
                        <img src="/local/templates/megaplan/img/clients/client-3.png" alt=""><?//=$arItem["PREVIEW_PICTURE"]?>
                    </div>
                    <div class="title bg-white">
                        <?=$arItem["PROPERTIES"]["TITLE"]["VALUE"]?>
                    </div>
                    <p class="preview-text bg-white">
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </p>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more-link bg-white">Читать далее...</a>
                </div>
            <?endforeach;?>

            <div class="clear"></div>
        </div>
        <div class="view-more">
            <a class="button" href="#" title=""><span class="button-yellow">Показать еще</span></a>
        </div>
    </div>
</section>
