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


<div class="team-block">

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>230, 'height'=>230), BX_RESIZE_IMAGE_EXACT, true);
        ?>
        <div class="col-xs-12 col-md-6 col-lg-3 team-block_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="img-block">
                <img src="<?=$img['src']?>" alt="">
            </div>
            <div class="info-block bg-grey">
                <span class="name-block"><?=$arItem["NAME"]?></span><br>
                <span class="post-block"><?=$arItem["PROPERTIES"]["POST"]["VALUE"]?></span>
            </div>
            <div class="team-text_hidden">
                <div class="name-block"><?=$arItem["NAME"]?></div>
                <div class="post-block"><?=$arItem["PROPERTIES"]["POST"]["VALUE"]?></div>
                <p class="preview-text"><?=$arItem["PREVIEW_TEXT"]?></p>
            </div>
        </div>
    <?endforeach;?>
    <div class="clear"></div>
</div>


