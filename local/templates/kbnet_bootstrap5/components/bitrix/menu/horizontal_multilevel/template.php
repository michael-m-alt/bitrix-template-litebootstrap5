<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?foreach($arResult as $arItem):?>
                    <?if($arParams["MAX_LEVEL"] == 1 && isset($arItem["PERMISSION"]) && $arItem["PERMISSION"] < "R"):?>
                        <?continue;?>
                    <?endif;?>
                    
                    <?if(isset($arItem["ITEMS"]) && count($arItem["ITEMS"]) > 0):?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?=$arItem["SELECTED"] ? "active" : ""?>" 
                               href="<?=$arItem["LINK"]?>" 
                               id="navbarDropdown_<?=$arItem["ID"]?>" 
                               role="button" 
                               data-bs-toggle="dropdown" 
                               aria-expanded="false">
                                <?=$arItem["TEXT"]?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown_<?=$arItem["ID"]?>">
                                <?foreach($arItem["ITEMS"] as $arSubItem):?>
                                    <?if($arParams["MAX_LEVEL"] >= 2 && isset($arSubItem["PERMISSION"]) && $arSubItem["PERMISSION"] < "R"):?>
                                        <?continue;?>
                                    <?endif;?>
                                    
                                    <li>
                                        <?if($arSubItem["SELECTED"]):?>
                                            <a class="dropdown-item active" href="<?=$arSubItem["LINK"]?>" aria-current="page"><?=$arSubItem["TEXT"]?></a>
                                        <?else:?>
                                            <a class="dropdown-item" href="<?=$arSubItem["LINK"]?>"><?=$arSubItem["TEXT"]?></a>
                                        <?endif;?>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        </li>
                    <?else:?>
                        <li class="nav-item">
                            <?if($arItem["SELECTED"]):?>
                                <a class="nav-link active" href="<?=$arItem["LINK"]?>" aria-current="page"><?=$arItem["TEXT"]?></a>
                            <?else:?>
                                <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                            <?endif;?>
                        </li>
                    <?endif;?>
                <?endforeach;?>
            </ul>
        </div>
    </div>
</nav>
