<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

// Получаем название сайта
$siteName = "";
$rsSite = CSite::GetList("", "", array("LID" => SITE_ID));
if($arSite = $rsSite->Fetch()) {
    $siteName = $arSite["NAME"];
}
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead()?>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Template CSS -->
    <link href="<?=SITE_TEMPLATE_PATH?>/css/template_styles.css" rel="stylesheet">
    
    <?$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/custom.css" rel="stylesheet">', true);?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<!-- Header -->
<header class="bg-dark text-white py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <a href="/" class="text-white text-decoration-none">
                    <h1 class="h4 mb-0"><?=$siteName?></h1>
                </a>
            </div>
            <div class="col-md-9">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "2",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left"
                ),
                false
                );?>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="py-4">
    <div class="container">
        <?if($APPLICATION->GetProperty("show_breadcrumb") !== "N"):?>
        <nav aria-label="breadcrumb" class="mb-4">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => SITE_ID
            ),
            false,
            array("HIDE_ICONS" => "N")
            );?>
        </nav>
        <?endif;?>
        
        <h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
        
        <?$APPLICATION->ShowViewContent("before_content");?>
        
        <div class="content">
            <?$APPLICATION->ShowViewContent("main_content");?>
        </div>
        
        <?$APPLICATION->ShowViewContent("after_content");?>
    </div>
</main>

<!-- Footer -->
<footer class="bg-light py-4 mt-auto border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; <?=date("Y")?> <?=$siteName?>. Все права защищены.</p>
                <p class="text-muted small">Шаблон разработан студией <a href="https://www.kbnet.ru" target="_blank" class="text-decoration-none">K.B.Net</a> (kbnet)</p>
            </div>
            <div class="col-md-6 text-md-end">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "footer", array(
                    "ROOT_MENU_TYPE" => "bottom",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
                );?>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Template JS -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/template_scripts.js"></script>
</body>
</html>
