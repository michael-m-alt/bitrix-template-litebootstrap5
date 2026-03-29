<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<ul class="nav justify-content-center">
    <?foreach($arResult as $arItem):?>
        <?if($arParams["MAX_LEVEL"] == 1 && isset($arItem["PERMISSION"]) && $arItem["PERMISSION"] < "R"):?>
            <?continue;?>
        <?endif;?>
        
        <li class="nav-item">
            <?if($arItem["SELECTED"]):?>
                <a href="<?=$arItem["LINK"]?>" class="nav-link active" aria-current="page"><?=$arItem["TEXT"]?></a>
            <?else:?>
                <a href="<?=$arItem["LINK"]?>" class="nav-link"><?=$arItem["TEXT"]?></a>
            <?endif;?>
        </li>
    <?endforeach;?>
</ul>
