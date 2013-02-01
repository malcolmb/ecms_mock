<?php /* Smarty version Smarty-3.1.12, created on 2012-12-19 10:07:16
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:458571550d0f7468cf184-66132163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1355933235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '458571550d0f7468cf184-66132163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d0f7468fa657_55182501',
  'variables' => 
  array (
    'js' => 0,
    'name' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d0f7468fa657_55182501')) {function content_50d0f7468fa657_55182501($_smarty_tpl) {?><html>
  <head>
    <title>Smarty</title>
    <script type="text/javascript">
    	js = <?php echo $_smarty_tpl->tpl_vars['js']->value;?>
;
    </script>
  </head>
  <body>
    Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!<br>
billing: <?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_address1'];?>

  </body>
</html<?php }} ?>