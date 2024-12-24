<?php

namespace Sgmk\Api;

use Bitrix\Iblock\Elements\ElementEstateTable;
use Bitrix\Main\Entity\Query\Join;
use Bitrix\Main\Entity\ReferenceField;

class Estate extends Base
{
	protected $entity = ElementEstateTable::class;
	
}
