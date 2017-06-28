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

<section class="content section-company_vacancy vacancies">

    <div class="left-company_vacancy col-sm-12 col-md-6 bg-white">
        <?foreach($arResult["LEFT_ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div class="vacancy-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="vacancy-name">
                    <?=$arItem["NAME"];?>
                </div>

                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["RESPONSIBILITY"]["NAME"];?>
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["RESPONSIBILITY"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>
                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["EXPECTATION"]["NAME"];?>
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["EXPECTATION"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>
                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["CONDITION"]["NAME"];?>
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["CONDITION"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>

                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["PRICE"]["NAME"];?>: <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"];?>
                </div>

                <div class="company-button">
                    <a class="button" href="#" title=""><span class="button-green">Откликнуться на вакансию</span></a>
                </div>
            </div>
        <?endforeach;?>
    </div>
    <div class="right-company_vacancy col-sm-12 col-md-6 bg-grey">
        <?foreach($arResult["RIGHT_ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div class="vacancy-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="vacancy-name">
                    Специалист по работе с клиентами
                </div>

                <div class="vacancy-subtitle">
                    Что нужно делать
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["RESPONSIBILITY"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>
                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["EXPECTATION"]["NAME"];?>
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["EXPECTATION"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>
                <div class="vacancy-subtitle">
                    <?=$arItem["PROPERTIES"]["CONDITION"]["NAME"];?>
                </div>
                <ul class="vacancy-list">
                    <?foreach($arItem["PROPERTIES"]["CONDITION"]["VALUE"] as $sValue){?>
                        <li><span><?=$sValue?></span></li>
                    <?}?>
                </ul>

                <div class="vacancy-subtitle">
                    Зарплата: от 40 000 ₽
                </div>

                <div class="company-button">
                    <a class="button" href="#" title=""><span class="button-green">Откликнуться на вакансию</span></a>
                </div>
            </div>
        <?endforeach;?>
    </div>
    <div class="clear"></div>

</section>


