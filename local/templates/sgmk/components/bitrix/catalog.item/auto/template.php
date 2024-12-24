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

    $carType = $prop['CAR_TYPE']['DISPLAY_VALUE'];
    $carBDay = $prop['CAR_BDAY']['DISPLAY_VALUE'] ?: ' - ';
    $carEngine = $prop['CAR_ENGINE']['DISPLAY_VALUE'] ?: ' - ';
    $carMileage = $prop['CAR_MILEAGE']['DISPLAY_VALUE'] ?: ' - ';
    $location = $prop['LOCATION']['DISPLAY_VALUE'];

    $mainPic = $item['PREVIEW_PICTURE']['ID'] ? $item['PREVIEW_PICTURE']['SRC'] : '';

    $hasMorePhoto = !empty($item['PROPERTIES']['MORE_PHOTO']['VALUE']);

    $morePhoto = [];

    $price = $item['PROPERTIES']['PRICE_COUNT']['VALUE'];
    $priceComment = $item['PROPERTIES']['PRICE_COMMENT']['VALUE'];

	  if ($hasMorePhoto) {
        foreach ($item['PROPERTIES']['MORE_PHOTO']['VALUE'] as $fileId) {
            $morePhoto[] = [
                'small' => CFile::ResizeImageGet($fileId, ['width' => 150, 'height' => 150], BX_RESIZE_IMAGE_EXACT)['src'],
                'big' => CFile::GetFileArray($fileId)['SRC'],
            ];
        }
}
?>
    <div class="catalog__column">
        <div class="catalog__slider swiper js-slider-catalog">
            <div class="catalog__swiper swiper-wrapper">
                <a href="<?= $mainPic ?>" data-fslightbox="gallery__<?= $item['ID'] ?>" class="catalog__slide swiper-slide swiper-lazy-preloader swiper-lazy-preloader-white">
                    <div class="catalog__slide-img">
                        <picture>
                            <img loading="lazy" src="<?= $mainPic ?>" alt="">
                        </picture>
                    </div>
                </a>
                <?php foreach ($morePhoto as $photo) { ?>
                    <a href="<?= $photo['big'] ?>" data-fslightbox="gallery__<?= $item['ID'] ?>" class="catalog__slide swiper-slide swiper-lazy-preloader swiper-lazy-preloader-white">
                        <div class="catalog__slide-img">
                            <picture>
                                <img loading="lazy" src="<?= $photo['small'] ?>" alt="">
                            </picture>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <?php if ($hasMorePhoto) : ?>
                <div class="catalog__pagination swiper__pagination"></div>
            <?php endif; ?>
        </div>
        <div class="catalog__column-content content-catalog">
            <div class="content-catalog__top">
                <div class="content-catalog__category"><?= $carType; ?></div>
                <div class="content-catalog__manufacturer" style="color: #535353; font-weight: 600;">
                    <?php
                    if (!empty($price)) {
                        if (is_numeric(str_replace(' ', '', $price))) {
                            if (strpos($price, ' ') !== false) {
                                echo $price . ' ₽';
                            } else {
                                echo number_format($price, 0, '', ' ') . ' ₽';
                            }
                        } else {
                            echo 'неизвестно';
                        }
                    } else {
                        echo 'цена договорная';
                    }
                    ?>
                </div>
                <div class="content-catalog__comment"><?=$priceComment;?></div>
            </div>
            <div class="content-catalog__inner">
                <div class="content-catalog__title"><?= $item['NAME'] ?></div>
                <div class="content-catalog__text"></div>
            </div>
            <div class="content-catalog__bottom bottom-catalog">
                <div class="bottom-catalog__items">
                    <dl class="bottom-catalog__item">
                        <dt>Год выпуска:</dt>
                        <dd><?= $carBDay ?></dd>
                    </dl>
                    <dl class="bottom-catalog__item">
                        <dt>Двигатель:</dt>
                        <dd><?= $carEngine ?></dd>
                    </dl>
                    <dl class="bottom-catalog__item">
                        <dt>Пробег:</dt>
                        <dd><?= $carMileage ?></dd>
                    </dl>
                    <dl class="bottom-catalog__item">
                        <dt><?= $location ?></dt>
                        <dd></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
<?php
}
