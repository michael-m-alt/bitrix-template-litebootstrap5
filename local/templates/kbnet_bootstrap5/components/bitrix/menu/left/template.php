<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<nav class="nav flex-column">
    <?foreach($arResult as $arItem):?>
        <?if($arParams["MAX_LEVEL"] == 1 && isset($arItem["PERMISSION"]) && $arItem["PERMISSION"] < "R"):?>
            <?continue;?>
        <?endif;?>
        
        <?if($arItem["SELECTED"]):?>
            <a href="<?=$arItem["LINK"]?>" class="nav-link active" aria-current="page"><?=$arItem["TEXT"]?></a>
        <?else:?>
            <a href="<?=$arItem["LINK"]?>" class="nav-link"><?=$arItem["TEXT"]?></a>
        <?endif;?>
        
        <?if(isset($arItem["ITEMS"]) && count($arItem["ITEMS"]) > 0):?>
            <nav class="nav flex-column ms-3">
                <?foreach($arItem["ITEMS"] as $arSubItem):?>
                    <?if($arParams["MAX_LEVEL"] >= 2 && isset($arSubItem["PERMISSION"]) && $arSubItem["PERMISSION"] < "R"):?>
                        <?continue;?>
                    <?endif;?>
                    
                    <?if($arSubItem["SELECTED"]):?>
                        <a href="<?=$arSubItem["LINK"]?>" class="nav-link active" aria-current="page"><?=$arSubItem["TEXT"]?></a>
                    <?else:?>
                        <a href="<?=$arSubItem["LINK"]?>" class="nav-link"><?=$arSubItem["TEXT"]?></a>
                    <?endif;?>
                <?endforeach;?>
            </nav>
        <?endif;?>
    <?endforeach;?>
</nav>
