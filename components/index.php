<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Bitrix\Main\Diag\Debug;

$APPLICATION->SetTitle("Комплектующие");

?>
    <div role="main" class="main shop pt-4">

        <div id="particles-bg"></div>

        <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}"
                 data-image-src="<?= DEFAULT_TEMPLATE_PATH ?>/images/bg/bg-components.webp">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Комплектующие компании <strong>Foodtech</strong></h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Комплектующие</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="container">
            <div class="row">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news",
                    "news_components",
                    Array(
                        "ADD_ELEMENT_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_NOTES" => "",
                        "CACHE_TIME" => "0",
                        "CACHE_TYPE" => "N",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => "news_components",
                        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",
                        "DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
                        "DETAIL_PAGER_SHOW_ALL" => "Y",
                        "DETAIL_PAGER_TEMPLATE" => "",
                        "DETAIL_PAGER_TITLE" => "Страница",
                        "DETAIL_PROPERTY_CODE" => array(0=>"SPECIFICATIONS",1=>"CAPABILITIES",2=>"MODEL",3=>"ACCESSORIES",4=>"",),
                        "DETAIL_SET_CANONICAL_URL" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FILTER_FIELD_CODE" => array(0=>"",1=>"",),
                        "FILTER_NAME" => "",
                        "FILTER_PROPERTY_CODE" => array(0=>"",1=>"",),
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "components",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "LIST_FIELD_CODE" => array(0=>"",1=>"",),
                        "LIST_PROPERTY_CODE" => array(0=>"SPECIFICATIONS",1=>"CAPABILITIES",2=>"MODEL",3=>"ACCESSORIES",4=>"",),
                        "MESSAGE_404" => "",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "NEWS_COUNT" => "9",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "SEF_FOLDER" => "/components/",
                        "SEF_MODE" => "Y",
                        "SEF_URL_TEMPLATES" => array("news"=>"","section"=>"#SECTION_CODE#/","detail"=>"#SECTION_CODE#/#ELEMENT_CODE#/",),
                        "SET_LAST_MODIFIED" => "N",
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "USE_CATEGORIES" => "N",
                        "USE_FILTER" => "N",
                        "USE_PERMISSIONS" => "N",
                        "USE_RATING" => "N",
                        "USE_RSS" => "N",
                        "USE_SEARCH" => "N",
                        "USE_SHARE" => "N"
                    )
                );?>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>