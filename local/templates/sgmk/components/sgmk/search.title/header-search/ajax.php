<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult["CATEGORIES"]) && $arResult['CATEGORIES_ITEMS_EXISTS']):?>
	
	<div class="header-search__result">
		<div class="header-search__result-row">
			<?php foreach ($arResult["CATEGORIES"] as $category_id => $arCategory): ?>
				<?php foreach ($arCategory["ITEMS"] as $i => $arItem): ?>
					<?php if ($arItem["TYPE"] == "all") continue; ?>
				
					<?php if ($category_id === "all"): ?>
						<a href="<?php echo $arItem["URL"]; ?>" class="header-search__result-all">Посмотреть все результаты</a>
					<?php elseif (isset($arResult["ELEMENTS"][$arItem["ITEM_ID"]])): ?>
						<?php $arElement = $arResult["ELEMENTS"][$arItem["ITEM_ID"]]; ?>
						<a href="<?php echo $arItem["URL"]; ?>" class="header-search__result-item">
							<?php echo $arItem["NAME"]; ?>
						</a>
					<?php else: ?>
						<a href="<?php echo $arItem["URL"]; ?>" class="header-search__result-item">
							<?php echo $arItem["NAME"]; ?>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</div>
	</div>

<?php endif; ?>
