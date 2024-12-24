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


    $productGroup = $prop['PRODUCT_GROUP']['DISPLAY_VALUE'];
    $org = $item['PROPERTIES']['ORG']['VALUE'];
    $link = $item['PROPERTIES']['LINK']['VALUE'];
    $mainPic = $item['PREVIEW_PICTURE']['ID'] ? $item['PREVIEW_PICTURE']['SRC'] : '';

    $hasMorePhoto = !empty($item['PROPERTIES']['MORE_PHOTO']['VALUE']);

    $morePhoto = [];

    if ($hasMorePhoto) {
        foreach ($item['PROPERTIES']['MORE_PHOTO']['VALUE'] as $fileId) {
            $morePhoto[] = [
                'small' => CFile::ResizeImageGet($fileId, ['width' => 150, 'height' => 150], BX_RESIZE_IMAGE_EXACT)['src'],
                'big' => CFile::GetFileArray($fileId)['SRC'],
            ];
        }
    }

    // $price = $item['ITEM_PRICES'][0]['BASE_PRICE'] ? $item['ITEM_PRICES'][0]['PRINT_BASE_PRICE'] : 'цена договорная';
    $price = $item['PROPERTIES']['PRICE_COUNT']['VALUE'];
    //$quantity = $item['PRODUCT']['QUANTITY'];
    //$measure = $item['ITEM_MEASURE']['TITLE'];

    $quantity = $item['PROPERTIES']['QUANTITY']['VALUE'];
    $measure = $item['PROPERTIES']['MEASURE']['VALUE'];

    /*
    echo '<pre>';
    print_r($org);
    echo '</pre>';*/
?>

    <div class="catalog__column">
        <div class="catalog__column-content content-catalog">
            <div class="content-catalog__top">
                <a href="javascript:void(0);" class="content-catalog__category">
                    <?= $productGroup ?>
                </a>
                <div class="content-catalog__manufacturer">
                    <?= $org ?>
                </div>
            </div>
            <div class="content-catalog__inner">
                <a href="javascript:void(0);" class="content-catalog__title">
                    <?= $item['NAME'] ?>
                </a>
                <div class="content-catalog__text"></div>
            </div>
            <div class="content-catalog__bottom bottom-catalog">
                <div class="bottom-catalog__items">
                    <dl class="bottom-catalog__item">
                        <dt><?= $quantity ?> <?= $measure ?></dt>
                        <dd></dd>
                    </dl>
                    <dl class="bottom-catalog__item">
                        <dt><?php
                            if ($price === "цена договорная") {
                                echo $price;
                            } else {
                                $priceText = intval($price) . " ₽";
                                if (strpos($measure, 'шт') !== false) {
                                    $priceText .= " / шт";
                                } elseif (
                                    strpos($measure, 'кг') !== false
                                    || strpos($measure, 'компл.') !== false
                                    || strpos($measure, 'м') !== false
                                    || strpos($measure, 'км') !== false
                                    || strpos($measure, 'м.п.') !== false
                                    || strpos($measure, 'м2') !== false
                                    || strpos($measure, 'м3') !== false
                                    || strpos($measure, 'тн') !== false
                                    || strpos($measure, 'уп.') !== false
                                ) {
                                    $priceText .= " / " . $measure;
                                }
                                echo $priceText;
                            }
                            ?> </dt>
                        <dd></dd>
                    </dl>
                </div>
                <div class="bottom-catalog__links">
                    <?php if ($mainPic) { ?>
                        <a href="<?= $mainPic ?>" data-fslightbox="gallery__<?= $item['ID'] ?>" class="bottom-catalog__img">
                            <picture>
                                <img src="<?= $mainPic ?>" alt="">
                            </picture>
                        </a>
                    <?php } ?>
                    <?php foreach ($morePhoto as $photo) { ?>
                        <a href="<?= $photo['big'] ?>" data-fslightbox="gallery__<?= $item['ID'] ?>" class="bottom-catalog__img">
                            <picture>
                                <img loading="lazy" src="<?= $photo['small'] ?>" alt="">
                            </picture>
                        </a>
                    <?php } ?>
                    <?php if (!empty($link)) { ?>
                        <div class="bottom-catalog__linked">

                            <p><a href="<?= $link ?>" target="_blank"><img src="/upload/main/icons/avito.png" width="55" height="15"></a></p>
                        </div>
                    <?php } ?>
                </div>


            </div>
        </div>
    </div>

<?php
}
