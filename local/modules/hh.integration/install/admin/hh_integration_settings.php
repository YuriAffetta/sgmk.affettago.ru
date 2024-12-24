<?php

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/modules/hh.integration/admin/hh_integration_setting.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/local/modules/hh.integration/admin/hh_integration_setting.php';
}

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/hh.integration/admin/hh_integration_setting.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/hh.integration/admin/hh_integration_setting.php';
}

?>