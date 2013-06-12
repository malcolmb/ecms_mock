<?php
define('SMARTYPATH', '/Users/malcolm/Sites/ecms_mock');
date_default_timezone_set( 'America/Chicago' );
require(SMARTYPATH . '/setup.php');

$smarty->assign('name', 'Ned');
$smarty->assign('money', 2000);

$smarty->display(SMARTYPATH . '/templates/index.tpl');


?>
