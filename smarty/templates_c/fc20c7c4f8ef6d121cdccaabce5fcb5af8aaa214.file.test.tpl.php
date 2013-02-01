<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 17:00:36
         compiled from "./smarty/templates/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252186366510af794536d99-07891871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc20c7c4f8ef6d121cdccaabce5fcb5af8aaa214' => 
    array (
      0 => './smarty/templates/test.tpl',
      1 => 1355936335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252186366510af794536d99-07891871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510af794568124_87078787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510af794568124_87078787')) {function content_510af794568124_87078787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Yo! Stupid dummy good!
<?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_address1'];?>


<?php echo $_smarty_tpl->getSubTemplate ("_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>