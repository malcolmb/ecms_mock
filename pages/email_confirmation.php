<?php
date_default_timezone_set( 'America/Chicago' );

require('./setup.php');

$smarty = new Smarty_CV3Setup();

//You can include a serialized 
include('./cust_libs/vosges_large_order_serialized.php');
$js = json_encode( $placed );
$smarty->assign('js', $js);
$smarty->assign('placed', $placed);
$smarty->assign('info', $placed['info']);
$smarty->assign('gift_certificates', $placed['gift_certificates']);
$smarty->assign('order', $placed['order']);
$smarty->assign('totals', $placed['totals']);
$smarty->assign('recip', $placed['recip']);
$smarty->assign('mappings', $placed['mappings']);
$smarty->assign('cart', $placed['cart']);
$smarty->assign('billing', $placed['info']['billing']);
$smarty->assign('shipping', $placed['info']['shipping']);
$smarty->assign('currency_type', '$');

$smarty->display('email_confirmation.tpl');


?>
