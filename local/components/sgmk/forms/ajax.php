<?php

use Bitrix\Main\Engine\Action;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Error;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\Mail\Event;
use Sgmk\Api\Buy;
use Sgmk\Api\Estate;
use Sgmk\Api\Vacancy;
use Sgmk\Api\Cooperation;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class FormsController extends Controller
{
	/**
	 * @return array
	 */
	public function configureActions(): array
	{
		$defaultParams = [
			'prefilters' => [
				new ActionFilter\HttpMethod(
					[ActionFilter\HttpMethod::METHOD_GET, ActionFilter\HttpMethod::METHOD_POST]
				),
				new ActionFilter\Csrf(false),
				// new Exmetal\Utils\ReCaptchaFilter()
			],
			// 'postfilters' => []
		];
		
		return [
			'buy' => $defaultParams,
			'estate' => $defaultParams,
			'vacancy' => $defaultParams,
			'cooperation' => $defaultParams,
		];
	}
	
	public function buyAction(
		string $name,
		string $email,
		string $phone,
		string $company,
		string $comment,
		string $productId,
		string $productName
	)
	{
		$res = (new Buy())->addElement([
			'ACTIVE' => 'Y',
			'NAME' => $name,
			'PREVIEW_TEXT' => strip_tags($comment),
			'PROPERTY_VALUES' => [
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company,
				'PRODUCT' => $productId
			]
		]);
		
		if (!$res['status']) {
			$this->errorCollection->add([new Error($res['error'])]);
			return false;
		}
		
		Event::send(array(
			'EVENT_NAME' => 'NEW_BUY',
			'LID' => 's1',
			'C_FIELDS' => array(
				'ELEMENT_ID' => $res['id'],
				'NAME' => $name,
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company,
				'COMMENT' => $comment,
				'PRODUCT_ID' => $productId,
				'PRODUCT_NAME' => $productName
			),
		));
		
		return [
			'status' => 'success',
			'messageTitle' => Loc::getMessage('CALLBACK_TITLE'),
			'messageText' => Loc::getMessage('CALLBACK_TEXT')
		];
	}
	
	public function estateAction(
		string $name,
		string $email,
		string $phone,
		string $company,
		string $comment
	)
	{
		$res = (new Estate())->addElement([
			'ACTIVE' => 'Y',
			'NAME' => $name,
			'PREVIEW_TEXT' => strip_tags($comment),
			'PROPERTY_VALUES' => [
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company
			]
		]);
		
		if (!$res['status']) {
			$this->errorCollection->add([new Error($res['error'])]);
			return false;
		}
		
		Event::send(array(
			'EVENT_NAME' => 'NEW_ESTATE',
			'LID' => 's1',
			'C_FIELDS' => array(
				'ELEMENT_ID' => $res['id'],
				'NAME' => $name,
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company,
				'COMMENT' => $comment
			),
		));
		
		return [
			'status' => 'success',
			'messageTitle' => Loc::getMessage('CALLBACK_TITLE'),
			'messageText' => Loc::getMessage('CALLBACK_TEXT')
		];
	}
	
	public function vacancyAction(
		string $vacancy,
		string $name,
		string $email,
		string $phone,
		string $referral,
		string $comment
	)
	{
		$resume = $this->getRequest()->getFile('resume');
		
		$res = (new Vacancy())->addElement([
			'ACTIVE' => 'Y',
			'NAME' => $name,
			'PREVIEW_TEXT' => strip_tags($comment),
			'PROPERTY_VALUES' => [
				'EMAIL' => $email,
				'PHONE' => $phone,
				'REFERRAL' => $referral,
				'LINK' => $vacancy,
				'RESUME' => $resume
			]
		]);
		
		if (!$res['status']) {
			$this->errorCollection->add([new Error($res['error'])]);
			return false;
		}
		
		Event::send(array(
			'EVENT_NAME' => 'NEW_RESUME',
			'LID' => 's1',
			'C_FIELDS' => array(
				'ELEMENT_ID' => $res['id'],
				'NAME' => $name,
				'EMAIL' => $email,
				'PHONE' => $phone,
				'REFERRAL' => $referral,
				'COMMENT' => $comment,
				'LINK' => $vacancy
			),
		));
		
		return [
			'status' => 'success',
			'messageTitle' => Loc::getMessage('RESUME_TITLE'),
			'messageText' => Loc::getMessage('RESUME_TEXT'),
			'file' => $_FILES
		];
	}
	
	public function cooperationAction(
		string $name,
		string $email,
		string $phone,
		string $company,
		string $comment,
	)
	{
		$file = $this->getRequest()->getFile('file');
		
		$res = (new Cooperation())->addElement([
			'ACTIVE' => 'Y',
			'NAME' => $name,
			'PREVIEW_TEXT' => strip_tags($comment),
			'PROPERTY_VALUES' => [
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company,
				'FILE' => $file
			]
		]);
		
		if (!$res['status']) {
			$this->errorCollection->add([new Error($res['error'])]);
			return false;
		}
		
		Event::send(array(
			'EVENT_NAME' => 'NEW_COOPERATION',
			'LID' => 's1',
			'C_FIELDS' => array(
				'ELEMENT_ID' => $res['id'],
				'NAME' => $name,
				'EMAIL' => $email,
				'PHONE' => $phone,
				'COMPANY' => $company,
				'COMMENT' => $comment
			),
		));
		
		return [
			'status' => 'success',
			'messageTitle' => Loc::getMessage('CALLBACK_TITLE'),
			'messageText' => Loc::getMessage('CALLBACK_TEXT')
		];
	}
}
