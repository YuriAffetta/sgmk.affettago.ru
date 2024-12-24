<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!empty($arResult)):?>
	<?php $lastMenuItem = array_key_last($arResult); ?>
	
	<div class="header__menu menu">
		<nav class="menu__body">
			<ul class="menu__list">
				
				<?php
				$previousLevel = 0;
				foreach ($arResult as $key => $arItem): ?>
					
					<?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?php endif?>
					
					<?php if ($key == $lastMenuItem): ?>
						<li class="menu__mobile js-menu-position"></li>
					<?php endif; ?>
					
					<?php if ($arItem["IS_PARENT"]):?>
						
						<li class="menu__item ">
							<a href="javascript:void(0);" class="menu__link js-menu-item"><?= $arItem["TEXT"]; ?></a>
							<ul class="menu__sublist">
					
					<?php else:?>
						
						<?php if ($arItem["PERMISSION"] > "D"):?>
							
							<?php if ($arItem["DEPTH_LEVEL"] == 1):?>
								<li class="menu__item">
									<a href="<?= $arItem["LINK"]; ?>" class="menu__link"><?= $arItem["TEXT"]; ?></a>
								</li>
							<?php else:?>
								<li class="menu__subitem">
									<a href="<?= $arItem["LINK"]; ?>" class="menu__sublink"><?= $arItem["TEXT"]; ?></a>
								</li>
							<?php endif?>
						
						<?php endif?>
					
					<?php endif?>
					
					<?php $previousLevel = $arItem["DEPTH_LEVEL"];?>
				
				<?php endforeach?>
				
				<?php if ($previousLevel > 1):?>
				<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
				<?php endif?>
				
				<li class="menu__tel">
					<a href="tel:+73843749058">+ 7 (3843) 74-90-58</a>
				</li>
			</ul>
		</nav>
	</div>

<?php endif?>
