<?php

use Bitrix\Main\Application;
use Bitrix\Main\EventManager;
use Bitrix\Main\IO\File;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class hh_integration extends CModule
{
	var $MODULE_ID = 'hh.integration';
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $PARTNER_NAME;
	var $PARTNER_URI;
	var $MODULE_GROUP_RIGHTS = 'Y';
	
	public function __construct()
	{
		$arModuleVersion = [];
		include __DIR__ . '/version.php';
		if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
			$this->MODULE_VERSION = $arModuleVersion['VERSION'];
			$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		}
		
		$this->MODULE_NAME = Loc::getMessage('HH_INTEGRATION_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('HH_INTEGRATION_MODULE_DESCRIPTION');
		$this->PARTNER_NAME = Loc::getMessage('HH_INTEGRATION_PARTNER_NAME');
		$this->PARTNER_URI = Loc::getMessage('HH_INTEGRATION_PARTNER_URI');
	}
	
	public function GetModuleRightList()
	{
		return [
			'reference_id' => ['D', 'R', 'W'],
			'reference' => [
				Loc::getMessage('HH_INTEGRATION_MODULE_ACCESS_DENIED'),
				Loc::getMessage('HH_INTEGRATION_MODULE_ACCESS_OPENED'),
				Loc::getMessage('HH_INTEGRATION_MODULE_ACCESS_FULL'),
			],
		];
	}
	
	public function DoInstall()
	{
		ModuleManager::registerModule($this->MODULE_ID);
		$this->InstallFiles();
		$this->InstallDB();
		$this->InstallEvents();
		$this->InstallTasks();
		
		return true;
	}
	
	public function InstallFiles()
	{
		$res = CopyDirFiles($_SERVER["DOCUMENT_ROOT"] . "/local/modules/" . $this->MODULE_ID . "/install/admin/", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin/", true, true);
		return $res;
	}
	
	public function InstallDB()
	{
		/*Loader::includeModule($this->MODULE_ID);
		$connection = Application::getInstance()->getConnection();
		if (!$connection->isTableExists(PointsTable::getTableName())) {
			PointsTable::getEntity()->createDbTable();
		}*/
	}
	
	public function InstallEvents()
	{
		$eventManager = EventManager::getInstance();
		$eventManager->registerEventHandler(
			'main',
			'OnProlog',
			$this->MODULE_ID,
			'Mantix\HeadHunter\Authorize',
			'checkAuth'
		);
	}
	
	public function InstallTasks()
	{
	}
	
	public function DoUninstall()
	{
		$this->UnInstallTasks();
		$this->UnInstallEvents();
		$this->UnInstallDB();
		$this->UnInstallFiles();
		
		ModuleManager::unRegisterModule($this->MODULE_ID);
	}
	
	public function UnInstallTasks()
	{
	}
	
	public function UnInstallEvents()
	{
	}
	
	public function UnInstallDB()
	{
		if (Loader::includeModule($this->MODULE_ID)) {
			$connection = Application::getInstance()->getConnection();
			/*if ($connection->isTableExists(PointsTable::getTableName())) {
				$connection->dropTable(PointsTable::getTableName());
			}*/
		}
	}
	
	public function UnInstallFiles()
	{
		File::deleteFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin/hh_integration_setting.php");
		return true;
	}
}
