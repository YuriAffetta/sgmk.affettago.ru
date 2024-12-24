<?php

namespace Sgmk\Api;

use Bitrix\Main\Loader;

abstract class Base
{
	protected $entity;
	protected $iblockId;
	
	public function __construct()
	{
		Loader::includeModule('iblock');
		$this->iblockId = $this->getEntity()->createObject()->getIblockId();
	}
	
	/**
	 * @return string
	 */
	public function getEntity()
	{
		return new $this->entity();
	}
	
	public function getList($params)
	{
		return $this->entity::getList($params);
	}
	
	public function addElement($params): array
	{
		$ob = new \CIBlockElement();
		
		$result = $ob->Add(array_merge($params, ['IBLOCK_ID' => $this->iblockId]));
		
		if ($result) {
			return [
				'status' => true,
				'id' => $result
			];
		}
		
		return [
			'status' => false,
			'error' => $ob->LAST_ERROR
		];
	}
	
	public function add($params): int
	{
		$result = (new $this->entity)->createObject($params)->save();
		return $result->isSuccess() ? $result->getId() : 0;
	}
	
	public function updateElement(int $id, array $params): array
	{
		$ob = new \CIBlockElement();
		
		$result = $ob->Update($id, $params);
		
		if ($result) {
			return [
				'status' => true,
				'id' => $result
			];
		}
		
		return [
			'status' => false,
			'error' => $ob->LAST_ERROR
		];
	}
	
	public function update(int $id, array $params): bool
	{
	}
}
