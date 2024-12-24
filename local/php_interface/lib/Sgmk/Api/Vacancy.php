<?php

namespace Sgmk\Api;

use Bitrix\Iblock\Elements\ElementVacancyTable;
use Bitrix\Main\Entity\Query\Join;
use Bitrix\Main\Entity\ReferenceField;

class Vacancy extends Base
{
	protected $entity = ElementVacancyTable::class;
	
}
