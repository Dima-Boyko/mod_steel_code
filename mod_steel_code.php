<?php
/*
*Имя приложения: Steel Code
*Версия:1
*Автор:Boyko Dmitry
*Дата:04.06.2018
*Описание:выводит любой код JS PHP iframe.
*/
defined('_JEXEC') or die('Restricted access');
$code=$params['SCODE'];
$php=$params['PHP_CODE'];

// подключаем шаблон
require(JModuleHelper::getLayoutPath('mod_steel_code'));




