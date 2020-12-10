<?php
//definimos el directorio raiz del proyecto
define('DIREC',__DIR__ . DIRECTORY_SEPARATOR);
$ver = '7.2';
if(phpversion() < $ver)
{
	echo "necesitas una versión mayor a 7.2";
	die();
}
//eliminamos la variable $ver
unset($ver);
include(__DIR__.DIRECTORY_SEPARATOR.'system/config/Comandos.php');
?>