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

<section class="content bg-white section-clients-about">

    <h2 class="block-title">
        Клиенты о мегаплане
    </h2>

    <div class="owl-carousel owl-theme">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item">
            <div class="client-item_block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="img-block">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                </div>
                <p class="preview-text"><?=$arItem["PREVIEW_TEXT"]?></p>
                <div class="name-block"><?=$arItem["NAME"]?></div>
                <div class="company-block"><?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></div>
            </div>
        </div>
    <?endforeach;?>
    </div>

    <div class="view-more">
        <a class="button" href="#" title=""><span class="button-green">Начать свою историю с Мегапланом</span></a>
    </div>

</section>

