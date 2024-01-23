<?php
/*
*Имя приложения: Steel Code
*Версия:1
*Автор:Boyko Dmitry
*Дата:04.06.2018
*Описание:шаблон.
*/
defined('_JEXEC') or die; 
if($php==0){//Обычный код
	echo $code;
}else{//PHP код
	eval($code);
}


?>

