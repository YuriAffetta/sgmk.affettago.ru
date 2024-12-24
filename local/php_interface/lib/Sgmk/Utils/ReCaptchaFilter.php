<?php

namespace Sgmk\Utils;

use Bitrix\Main\Engine\ActionFilter\Base;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Error;
use Bitrix\Main\Event;
use Bitrix\Main\Context;
use Bitrix\Main\EventResult;
use ReCaptcha\ReCaptcha;
use ReCaptcha\RequestMethod\CurlPost;

final class ReCaptchaFilter extends Base
{
	const ERROR_INVALID_CSRF = 'invalid_recaptcha';
	
	/**
	 * @var bool
	 */
	private $enabled;
	/**
	 * @var string
	 */
	private $tokenName;
	/**
	 * @var bool
	 */
	private $returnNew;
	
	/**
	 * Csrf constructor.
	 *
	 * @param bool $enabled
	 * @param string $tokenName
	 * @param bool $returnNew
	 */
	public function __construct($enabled = true, $tokenName = 'token', $returnNew = true)
	{
		$this->enabled = $enabled;
		$this->tokenName = $tokenName;
		$this->returnNew = $returnNew;
		parent::__construct();
	}
	
	/**
	 * List allowed values of scopes where the filter should work.
	 * @return array
	 */
	public function listAllowedScopes()
	{
		return [
			Controller::SCOPE_AJAX,
		];
	}
	
	public function onBeforeAction(Event $event)
	{
		if (!$this->enabled) {
			return null;
		}
		
		$recaptchaResult = $this->checkRecaptcha();
		
		if (!$recaptchaResult->isSuccess()) {
			$errorCustomData = [];
			if ($this->returnNew) {
				$errorCustomData['errorCodes'] = $recaptchaResult->getErrorCodes();
			}
			
			$this->addError(new Error(
				'Invalid recaptcha token',
				self::ERROR_INVALID_CSRF, $errorCustomData
			));
			
			return new EventResult(EventResult::ERROR, null, null, $this);
		}
		
		return null;
	}
	
	public function checkRecaptcha(): \ReCaptcha\Response
	{
		$secret = "";
		$request = Context::getCurrent()->getRequest();
		$recaptcha = new ReCaptcha($secret, new CurlPost());
		return $recaptcha->setExpectedHostname($_SERVER['SERVER_NAME'])
			->setScoreThreshold(0.5)
			->verify($request[$this->tokenName], $_SERVER['REMOTE_ADDR']);
	}
}
