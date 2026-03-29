<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?foreach($arResult as $arItem):?>
            <?if($arItem["LINK"] != "" && empty($arItem["PARAMS"]["NO_LINK"])):?>
                <li class="breadcrumb-item">
                    <a href="<?=$arItem["LINK"]?>" class="text-decoration-none"><?=$arItem["NAME"]?></a>
                </li>
            <?else:?>
                <li class="breadcrumb-item active" aria-current="page"><?=$arItem["NAME"]?></li>
            <?endif;?>
        <?endforeach;?>
    </ol>
</nav>
