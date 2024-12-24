<? $arResult["MORE_PHOTOS"] = array();
if (isset($arResult["PROPERTIES"]["MORE_PHOTOS"]["VALUE"]) && is_array($arResult["PROPERTIES"]["MORE_PHOTOS"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["MORE_PHOTOS"]["VALUE"] as $FILE) {
        $FILE = CFile::GetFileArray($FILE);
        if (is_array($FILE)) $arResult["MORE_PHOTOS"][] = $FILE;
    }
}
