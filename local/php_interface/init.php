<?php

use Bitrix\Main\Loader;
use Mantix\HeadHunter\BaseApi;
use Mantix\HeadHunter\Vacancies;
use Bitrix\Iblock\Elements\ElementVacanciesTable;

require_once 'autoload.php';

AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);
function _Check404Error(){
 if (defined('ERROR_404') && ERROR_404 == 'Y') {
 global $APPLICATION;
 $APPLICATION->RestartBuffer();
 include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/header.php';
 include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
 include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/footer.php';
 }
}

function updateVacancies()
{
	Loader::includeModule('iblock');
	
	$VACANCIES_IBLOCK_ID = 9;
	
	$oldVacancies = ElementVacanciesTable::getList([
		'select' => ['ID'],
		'filter' => ['=ACTIVE' => 'Y'],
	])->fetchAll();
	foreach ($oldVacancies as $vacancy) {
		$el = new CIBlockElement;
		$el->Update($vacancy['ID'], ['ACTIVE' => 'N']);
	}
	
	foreach ((new Vacancies())->getActive() as $vacancy) {
		$vacancyInfo = (new BaseApi())->getVacancyInfo($vacancy['id']);
		
		$salary = '';
		if ($vacancy['salary']) {
			if ($vacancy['salary']['from'] && $vacancy['salary']['to']) {
				$salary = $vacancy['salary']['from'] . ' – ' . $vacancy['salary']['to'] . ' ₽';
			} elseif ($vacancy['salary']['from']) {
				$salary = 'от ' . $vacancy['salary']['from'] . ' ₽';
			} elseif ($vacancy['salary']['to']) {
				$salary = 'до ' . $vacancy['salary']['to'] . ' ₽';
			}
		}
		
		$arFields = [
			'IBLOCK_ID' => $VACANCIES_IBLOCK_ID,
			'ACTIVE' => 'Y',
			'NAME' => $vacancy['name'],
			'PREVIEW_TEXT' => $vacancyInfo ? $vacancyInfo['data']['description'] : '',
			'PROPERTY_VALUES' => [
				'HEAD_HUNTER_ID' => $vacancy['id'],
				'CITY' => $vacancy['address']['city'] ?: $vacancy['area']['name'],
				'WAGE' => $salary,
				'COMPANY' => $vacancy['employer']['name'],
				'WORK_EXPERIENCE' => mb_strtolower($vacancy['experience']['name']),
				'REQUIREMENTS' => $vacancy['snippet']['requirement'] ? explode('. ', $vacancy['snippet']['requirement']) : '',
				'RESPONSIBILITIES' => $vacancy['snippet']['responsibility'] ? explode('. ', $vacancy['snippet']['responsibility']) : '',
			]
		];
		
		$oldVacancy = ElementVacanciesTable::getList([
			'select' => ['ID'],
			'filter' => ['=HEAD_HUNTER_ID.VALUE' => $vacancy['id']],
		])->fetch();
		
		$el = new CIBlockElement;
		if ($oldVacancy) {
			unset($arFields['IBLOCK_ID']);
			$el->Update($oldVacancy['ID'], $arFields);
		} else {
			$el->Add($arFields, false, false, true);
		}
	}
	
	return 'updateVacancies();';
}

