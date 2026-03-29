<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

// Пустая страница для использования в качестве основы
// или для специальных случаев (например, AJAX-ответы, iframe и т.д.)

$APPLICATION->SetPageProperty("show_breadcrumb", "N");
$APPLICATION->SetPageProperty("title_include_template", "N");
?>
