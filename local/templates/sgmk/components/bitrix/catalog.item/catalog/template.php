<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogProductsViewedComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (isset($arResult['ITEM'])) {
    $item = $arResult['ITEM'];
    $prop = $item['DISPLAY_PROPERTIES'];


    $mainPic = $item['PREVIEW_PICTURE']['ID'] ? $item['PREVIEW_PICTURE']['SRC'] : '';

    $hasSert = $prop['HAS_SERT']['DISPLAY_VALUE'];
    $org = $prop['ORG']['DISPLAY_VALUE'];
    $width = $prop['WIDTH']['DISPLAY_VALUE'];
    $length = $prop['LENGTH']['DISPLAY_VALUE'];
    $weight = $prop['WEIGHT']['DISPLAY_VALUE'];
    $sort = $prop['SORT']['DISPLAY_VALUE'];
    $subtitle = $prop['SUBTITLE']['DISPLAY_VALUE'];
    $product_type = $prop['PRODUCT_TYPE']['DISPLAY_VALUE'];


    ?>
    <div class="catalog__column">
        <a href="javascript:void(0);" class="catalog__column-img">
            <picture>
                <img loading="lazy" src="<?= $mainPic ?>" alt="">
            </picture>
        </a>
        <div class="catalog__column-content content-catalog">
            <div class="content-catalog__top">
                <a href="javascript:void(0);" class="content-catalog__category">
                    <?= $product_type ?>
                </a>
                <a href="javascript:void(0);" class="content-catalog__manufacturer"><?= $org ?></a>
            </div>
            <div class="content-catalog__inner">
                <a href="javascript:void(0);" class="content-catalog__title">
                    <?= $item['NAME'] ?>
                </a>
                <div class="content-catalog__text"><?= $subtitle ?></div>
            </div>
            <div class="content-catalog__bottom bottom-catalog">
                <div class="bottom-catalog__items">
	                <?php if ($width): ?>
	                    <dl class="bottom-catalog__item">
	                        <dt>Ширина:</dt>
	                        <dd><?= $width ?></dd>
	                    </dl>
					<?php endif; ?>
					<?php if ($weight): ?>
	                    <dl class="bottom-catalog__item">
	                        <dt>Вес:</dt>
	                        <dd><?= $weight ?></dd>
	                    </dl>
					<?php endif; ?>
					<?php if ($length): ?>
	                    <dl class="bottom-catalog__item">
	                        <dt>Длина:</dt>
	                        <dd><?= $length ?></dd>
	                    </dl>
					<?php endif; ?>
					<?php if ($sort): ?>
	                    <dl class="bottom-catalog__item">
	                        <dt>ГОСТ:</dt>
	                        <dd><?= $sort ?></dd>
	                    </dl>
					<?php endif; ?>
                </div>
                <a href="<?= SITE_TEMPLATE_PATH; ?>/blocks/popups/popup-callback.html" class="bottom-catalog__link" data-popup="#callback-modal">Заказать у производителя</a>
            </div>
        </div>
        <div class="catalog__column-certificate certificate-catalog">
            <?php if ($hasSert) { ?>
                <div class="certificate-catalog__icon js-certificate-icon"
                     style="--icon:url(/local/templates/sgmk/assets/static/img/icons/04.svg)">
                </div>
                <div class="certificate-catalog__text">
                    Есть сертификат от производителя. <br>
                    Предоставляется по запросу
                </div>

            <?php } ?>
        </div>
    </div>


    <?php
}
