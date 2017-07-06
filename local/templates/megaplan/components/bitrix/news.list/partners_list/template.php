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


<div class="partners-list">

    <?foreach($arResult["FIRST_POSTS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="partners-list_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
        </div>
    <?endforeach;?>
    <div class="clear"></div>
</div>

<div class="partners-button" data-view-partners="1">
    <a class="button" href="javascript:void(0);" title="">
        <span class="button-yellow" onclick="obPartnersList.viewMore(this); return false;">Каталог партнёров</span>
    </a>
</div>

<div class="partners-list partners-list-hidden" data-partners-list="1">

    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <div class="partners-list_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
        </div>
    <?endforeach;?>
    <div class="clear"></div>
</div>

<div class="partners-button partners-button-hidden" data-hide-partners="1">
    <a class="button" href="javascript:void(0);" title="">
        <span class="button-yellow" onclick="obPartnersList.hideMore(this); return false;">Скрыть</span>
    </a>
</div>

