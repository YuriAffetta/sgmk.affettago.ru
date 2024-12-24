<?php
$arUrlRewrite=array (
  6 => 
  array (
    'CONDITION' => '#^/business-directions/([0-9a-zA-Z-_^?]+)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/business-directions/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/vacancies/([0-9a-zA-Z-_^?]+)/#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/vacancies/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/news/([0-9a-zA-Z-_^?]+)/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/property-sales/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/property-sales/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^\\??(.*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/404.html',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
