<?php

date_default_timezone_set( 'America/Chicago' );

require('./setup.php');

$smarty = new Smarty();

$smarty = new Smarty_CV3Setup();

include('./cust_libs/vosges_categories.php');

/*$js = json_encode( $placed );
$smarty->assign('js', $js);
*/
$smarty->assign('cid',0);
$smarty->assign('categories', $categories);

$smarty->display('category_menu.tpl');


?>
