<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

$APPLICATION->SetPageProperty("show_breadcrumb", "N");
?>

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
