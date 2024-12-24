<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true); ?>

<div class="bx-filter">
    <form name="<?= $arResult["FILTER_NAME"] . "_form" ?>" action="<?= $arResult["FORM_ACTION"]; ?>"
          method="get" class="aside__form form">
        <div class="form__inner">
            <?php foreach ($arResult["HIDDEN"] as $arItem): ?>
                <input type="hidden" name="<?= $arItem["CONTROL_NAME"]; ?>"
                       id="<?= $arItem["CONTROL_ID"]; ?>" value="<?= $arItem["HTML_VALUE"]; ?>"/>
            <?php endforeach; ?>

            <div class="form__group">
                <?php //not prices
                foreach ($arResult["ITEMS"] as $key => $arItem) {
                    if (empty($arItem["VALUES"]) || isset($arItem["PRICE"])) continue;

                    if (
                        $arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER
                        && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                    )
                        continue;
                    ?>
                    <fieldset
                            class="form__fieldset<?php if ($arItem["DISPLAY_EXPANDED"] == "Y"): ?> _active<?php endif ?>">
                        <span class="bx-filter-container-modef"></span>
                        <div class="form__fieldset-title"><?= $arItem["NAME"] ?></div>

                        <div class="form__fieldset-checkboxes" data-role="bx_filter_block">
                            <?php
                            $arCur = current($arItem["VALUES"]);
                            switch ($arItem["DISPLAY_TYPE"]) {
                                case SectionPropertyTable::NUMBERS://NUMBERS
                                    ?>
                                    <div class="col-xs-6 bx-filter-parameters-box-container-block bx-left">
                                        <i class="bx-ft-sub"><?= GetMessage("CT_BCSF_FILTER_FROM") ?></i>
                                        <div class="bx-filter-input-container">
                                            <input
                                                    class="min-price"
                                                    type="text"
                                                    name="<?php echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                                    id="<?php echo $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                                    value="<?php echo $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?>"
                                                    size="5"
                                                    onkeyup="smartFilter.keyup(this)"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-xs-6 bx-filter-parameters-box-container-block bx-right">
                                        <i class="bx-ft-sub"><?= GetMessage("CT_BCSF_FILTER_TO") ?></i>
                                        <div class="bx-filter-input-container">
                                            <input
                                                    class="max-price"
                                                    type="text"
                                                    name="<?php echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                    id="<?php echo $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                    value="<?php echo $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                                    size="5"
                                                    onkeyup="smartFilter.keyup(this)"
                                            />
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                default://CHECKBOXES
                                    ?>
                                    <?php foreach ($arItem["VALUES"] as $val => $ar): ?>


                                    <div class="form__fieldset-checkbox checkbox">
                                        <input type="checkbox"
                                               value="<?php echo $ar["HTML_VALUE"] ?>"
                                               name="<?php echo $ar["CONTROL_NAME"] ?>"
                                               id="<?php echo $ar["CONTROL_ID"] ?>"
                                               class="checkbox__input"
                                               <?php echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                               onclick="smartFilter.click(this)">
                                        <label for="<?php echo $ar["CONTROL_ID"] ?>"
                                               class="checkbox__label<?php echo $ar["DISABLED"] ? ' disabled' : '' ?>"
                                               data-role="label_<?= $ar["CONTROL_ID"] ?>">
                                            <span class=" checkbox__text"><?= $ar["VALUE"]; ?></span>
                                        </label>
                                    </div>
                                <?php endforeach; ?>

                                <?php
                            }
                            ?>
                        </div>
	                    <?php if (count($arItem["VALUES"]) > 13): ?>
		                    <a href="javascript:void(0);" class="form__fieldset-more"><span>Посмотреть все</span><span>Свернуть</span></a>
	                    <?php endif; ?>
                    </fieldset>
                    <?php
                }
                ?>
            </div><!--//row-->
            <div class="row">
                <div class="col-xs-12 bx-filter-button-box">
                    <div class="bx-filter-block">
                        <div class="bx-filter-parameters-box-container">
                            <input
                                    class="btn btn-themes"
                                    type="submit"
                                    id="set_filter"
                                    name="set_filter"
                                    value="<?= GetMessage("CT_BCSF_SET_FILTER") ?>"
                                    style="display: none"
                            />
                            <input
                                    class="btn btn-link"
                                    type="submit"
                                    id="del_filter"
                                    name="del_filter"
                                    value="<?= GetMessage("CT_BCSF_DEL_FILTER") ?>"
                                    style="width: 100%"
                            />
                            <div class="bx-filter-popup-result <?php if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"] ?>"
                                 id="modef"
                                 <?php if (!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"'; ?>style="display: inline-block;">
                                <?php echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">' . (int)($arResult["ELEMENT_COUNT"] ?? 0) . '</span>')); ?>
                                <span class="arrow"></span>
                                <br/>
                                <a href="<?php echo $arResult["FILTER_URL"] ?>"
                                   target=""><?php echo GetMessage("CT_BCSF_FILTER_SHOW") ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?php echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
    
    document.querySelectorAll(".form__fieldset-more").forEach((element) => {
	    element.addEventListener("click", () => {
		    console.log(element);
		    console.log(element.previousElementSibling);
		    element.classList.toggle("_active");
		    let previousElement = element.previousElementSibling;
		    if (previousElement) {
			    previousElement.classList.toggle("_active");
		    }
	    });
    });
	
    if (window.matchMedia("(max-width: 992px)").matches) {
	    const filter = document.querySelector(".aside__filter");
	    const form = document.querySelector(".aside__form");
	    
	    if (filter && form) {
		    form.style.height = "0";
		    form.style.overflow = "hidden";
		    form.style.transition = "height 0.3s ease";
		    
		    filter.addEventListener("click", () => {
			    filter.classList.toggle("_active");
			    form.classList.toggle("_active");
			    if (filter.classList.contains("_active")) {
				    form.style.height = form.scrollHeight + "px";
				    setTimeout(() => {
					    form.style.height = "auto";
				    }, 350);
			    } else {
				    form.style.height = form.scrollHeight + "px";
				    form.style.height = "0";
			    }
		    });
	    }
    }
</script>
