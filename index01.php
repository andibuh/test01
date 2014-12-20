<?php
define('SMARTY_DIR','/usr/local/lib/php/Smarty/');
require(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
$smarty->assign('name','Ned');
//** Die folgende Zeile "einkommentieren" um die Debug-Konsole anzuzeigen
//$smarty->debugging = true;
$smarty->display('index.tpl');
?>