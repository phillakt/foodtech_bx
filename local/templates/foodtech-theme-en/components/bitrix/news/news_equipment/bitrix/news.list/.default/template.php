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

<?php if(1): ?>

    <? if($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"]?>
    <? endif; ?>

    <div class="col-lg-3 order-2 order-lg-1">
        <aside class="sidebar">
            <h5 class="pt-3">Оборудование</h5>

            <?$APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "catalog_equipment_list",
                Array(
                    "ADD_SECTIONS_CHAIN" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "0",
                    "CACHE_TYPE" => "N",
                    "COUNT_ELEMENTS" => "N",
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "equipment",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array("", ""),
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
                    "SECTION_URL" => "#SECTION_CODE#/",
                    "SECTION_USER_FIELDS" => array("", ""),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "3",
                    "VIEW_MODE" => "TEXT"
                )
            );?>

            <?php if(0): ?>
            <ul class="nav nav-list flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="#!">Arts & Crafts</a>
                </li>

            </ul>
            <? endif; ?>

            <?php if(0): ?>
            <h5 class="font-weight-semi-bold pt-5">Теги</h5>

            <div class="mb-3 pb-1">
                <a href="#!">
                    <span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">Nike</span>
                </a>
            </div>
            <? endif; ?>

            <?php if(0): ?>
                <div class="row mb-5">
                <div class="col">
                    <h5 class="font-weight-semi-bold pt-5">Топ продаваемых</h5>
                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="#!">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-6.jpg">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#!" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="#!" class="text-color-dark text-color-hover-primary text-decoration-none">Blue Hat</a>
                            </h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                                <span class="amount">$289,00</span>
                            </p>
                        </div>
                    </div>
                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="#!">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-8.jpg">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="#!" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="#!"
                                   class="text-color-dark text-color-hover-primary text-decoration-none">
                                    Adventurer Bag
                                </a>
                            </h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                <span class="amount">$79,00</span>
                            </p>
                        </div>
                    </div>
                    <div class="product row row-gutter-sm align-items-center mb-4">
                        <div class="col-5 col-lg-5">
                            <div class="product-thumb-info border-0">
                                <a href="shop-product-sidebar-left.html">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/products/product-grey-9.jpg">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1">
                            <a href="shop-3-columns-sidebar-left.html#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="shop-product-sidebar-right.html"
                                   class="text-color-dark text-color-hover-primary text-decoration-none">
                                    Baseball Ball
                                </a>
                            </h3>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
                            </div>
                            <p class="price text-4 mb-0">
                                <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                                <span class="amount">$299,00</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <? endif; ?>

        </aside>
    </div>

    <div class="col-lg-8 offset-md-1 order-1 order-lg-2">

        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">

                <?foreach($arResult["ITEMS"] as $arItem):?>

                <div class="col-sm-6 col-lg-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="product mb-0">

                        <div class="product-thumb-info border-0 mb-3">

                            <div class="product-thumb-info-badges-wrapper">
                                <span class="badge badge-ecommerce badge-success">Новинка</span>
                                <span class="badge badge-ecommerce badge-danger">Скидка 4%</span>
                            </div>

                            <?php if(0): ?>

                                <a href="/ajax/elements-lightboxes-ajax/?id=<?= $arItem['ID'] ?>" class="quick-view simple-ajax-popup text-uppercase font-weight-semibold text-2">
                                    Быстрый просмотр
                                </a>

                            <?php endif; ?>

                            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>

                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <div class="product-thumb-info-image">
                                            <img class="img-fluid"
                                                 src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                                 alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                                 title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                            >
                                        </div>
                                    </a>

                                <?else:?>

                                    <div class="product-thumb-info-image">
                                        <img class="img-fluid"
                                             src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                             title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                        >
                                    </div>

                                <?endif;?>

                            <?endif?>

                        </div>

                        <div class="d-flex justify-content-between">
                            <div>

                                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="text-color-dark text-color-hover-primary"><?echo $arItem["NAME"]?></a>
                                    </h3>
                                <?else:?>

                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <?echo $arItem["NAME"]?>
                                    </h3>
                                <?endif;?>

                            </div>
                        </div>

                    </div>
                </div>

                <? endforeach; ?>

            </div>

        </div>
    </div>

    <? if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>

        <?= $arResult["NAV_STRING"] ?>

    <? endif; ?>

<?php endif; ?>




<div style="display: none" class="news-list">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>

			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

</div>
