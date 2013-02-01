<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 16:04:06
         compiled from "/Users/malcolm/Sites/Playground/cv3/smarty/templates/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164378367950d1f09f6c0a75-73779519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd14e45e80a115f87398f8c532d6aa97c72e958' => 
    array (
      0 => '/Users/malcolm/Sites/Playground/cv3/smarty/templates/test.tpl',
      1 => 1355936335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164378367950d1f09f6c0a75-73779519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d1f09f6eee73_69752550',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d1f09f6eee73_69752550')) {function content_50d1f09f6eee73_69752550($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Yo! Stupid dummy good!
<?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_address1'];?>


<?php echo $_smarty_tpl->getSubTemplate ("_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>