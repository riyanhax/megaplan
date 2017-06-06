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

<section class="top-banner banner-blog">
    <div class="container">
        <div class="col-md-12 banner-inner">
            <div class="banner-text color-white">
                <?=$arResult["NAME"]?>
            </div>
            <div class="banner-subtext">
                <a class="button" href="#posts" title="">Все рубрики</a>
            </div>
        </div>
    </div>
</section>

<section class="content-crop section-blog bg-white">
    <div class="section-wrapper bg-white">
        <?
        $this->AddEditAction($arResult["FIRST_POST"]['ID'], $arResult["FIRST_POST"]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["FIRST_POST"]["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arResult["FIRST_POST"]['ID'], $arResult["FIRST_POST"]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["FIRST_POST"]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="one-post" id="<?=$this->GetEditAreaId($arResult["FIRST_POST"]['ID']);?>">
            <div class="blog-item_block col-sm-12 col-md-6">
                <div class="img-block">
                    <img src="/local/templates/megaplan/img/blog/1.png" alt=""><?//=$arItem["DETAIL_PICTURE"]?>
                </div>
            </div>
            <div class="blog-item_block col-sm-12 col-md-6">
                <div class="post-meta">
                    <span class="blog-rubric"><?=$arResult["FIRST_POST"]["PROPERTIES"]["RUBRIC"]["VALUE"]?></span>
                    <span class="date"><?=$arResult["FIRST_POST"]["PROPERTIES"]["DATE"]["VALUE"]?></span>
                    <div class="clear">
                    </div>
                </div>
                <div class="title">
                    <?=$arResult["FIRST_POST"]["NAME"]?>
                </div>
                <p class="preview-text">
                    <?=$arResult["FIRST_POST"]["PREVIEW_TEXT"]?>
                </p>
                <a href="<?=$arResult["FIRST_POST"]["DETAIL_PAGE_URL"]?>" class="more-link">Читать далее...</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="other-posts" id="posts">

            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="blog-item_block col-sm-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="post-meta bg-grey">
                        <span class="blog-rubric"><?=$arItem["PROPERTIES"]["RUBRIC"]["VALUE"]?></span>
                        <span class="date"><?=$arItem["PROPERTIES"]["DATE"]["VALUE"]?></span>
                        <div class="clear"></div>
                    </div>
                    <div class="img-block">
                        <img src="/local/templates/megaplan/img/blog/2.png" alt=""><?//=$arItem["PREVIEW_PICTURE"]?>
                    </div>
                    <div class="title bg-grey">
                        <?=$arItem["NAME"]?>
                    </div>
                    <p class="preview-text bg-grey">
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </p>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more-link bg-grey">Читать далее...</a>
                </div>
            <?endforeach;?>

            <div class="clear"></div>
        </div>
        <div class="view-more">
            <a class="button" href="#" title=""><span class="button-yellow">Показать еще</span></a>
        </div>
    </div>
</section>
