<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$this->createFrame()->begin("Загрузка навигации"); ?>

<?php if ($arResult["NavPageCount"] > 1): ?>
	<?php if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]): ?>
		<?php
		$plus = $arResult["NavPageNomer"] + 1;
		$url = $arResult["sUrlPathParams"] . "PAGEN_".$arResult["NavNum"]."=".$plus;
		?>
		
		<a href="javascript:void(0);" class="today__link btn load_more" data-url="<?= $url; ?>">Показать еще</a>
	<?php endif?>
<?php endif?>
