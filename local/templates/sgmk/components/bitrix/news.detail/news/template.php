<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$this->setFrameMode(true);
$this->addExternalCss("style.css");
$this->addExternalJS("script.js");
?>

<section class="news-detail">
    <div class='news-detail__container'>
        <h1 class="news-detail__title"><?= $arResult["NAME"] ?></h1>
        <time class="news-detail__date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></time>
        <article class="news-detail__content">

            <?php if (count($arResult["MORE_PHOTOS"]) > 0): ?>
                <div class="slider" style="display: flex; flex-direction: column;">
                    <div class="main-image" style="position: relative;">
                        <?php
                        // Получаем первую картинку для отображения с уменьшенными размерами
                        $firstPhoto = CFile::ResizeImageGet($arResult["MORE_PHOTOS"][0], array('width' => 1000, 'height' => 600), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                        <img id="current-image" src="<?= $firstPhoto["src"] ?>" alt="<?= $arResult['NAME'] ?>" />
<?php if (count($arResult["MORE_PHOTOS"]) > 1): ?>
                        <button class="arrow left-arrow" onclick="changeImage(-1)">&#10094;</button> <!-- Стрелка влево -->
                        <button class="arrow right-arrow" onclick="changeImage(1)">&#10095;</button> <!-- Стрелка вправо -->
<?php endif; ?>
                    </div>

                    <?php if (count($arResult["MORE_PHOTOS"]) > 1): ?>
                        <div class="thumbnails">
                            <?php foreach ($arResult["MORE_PHOTOS"] as $index => $PHOTO):
                                // Уменьшаем размеры миниатюр
                                $smallPict = CFile::ResizeImageGet($PHOTO, array('width' => 80, 'height' => 80), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                                <img class="thumbnail" src="<?= $smallPict["src"] ?>" data-fullsize="<?= CFile::ResizeImageGet($PHOTO, array('width' => 1000, 'height' => 600), BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"] ?>" alt="Thumbnail <?= $index + 1 ?>" data-index="<?= $index ?>" />
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($arResult["PREVIEW_TEXT"]) : ?>
                <?= $arResult["PREVIEW_TEXT"]; ?>
            <?php endif; ?>

            <?= $arResult["DETAIL_TEXT"]; ?>
        </article>
    </div>
</section>

<!-- Модальное окно для отображения изображения в полном размере -->
<div id="modal" class="modal">
    <span class="close" id="close-modal">&times;</span>
    <img class="modal-content" id="modal-image" alt="Большое изображение">
</div>