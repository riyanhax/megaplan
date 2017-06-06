<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if (empty($arResult["ALL_ITEMS"]))
	return;

?>
<nav class="top-nav-container">
    <ul class="top-nav-list">
    <?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
        <li class="top-nav-item">
            <a class="top-nav-link" href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" title="<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>">
                <?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
            </a>
        </li>
    <?endforeach;?>
    </ul>
    <div class="clear"></div>
</nav>