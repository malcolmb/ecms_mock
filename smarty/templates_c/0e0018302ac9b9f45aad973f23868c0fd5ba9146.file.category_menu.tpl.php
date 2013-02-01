<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 22:17:31
         compiled from "./smarty/templates/category_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192404883510b41dbe8a4f8-10875658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0018302ac9b9f45aad973f23868c0fd5ba9146' => 
    array (
      0 => './smarty/templates/category_menu.tpl',
      1 => 1359692209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192404883510b41dbe8a4f8-10875658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'cid' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510b41dc02c023_35222880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510b41dc02c023_35222880')) {function content_510b41dc02c023_35222880($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/malcolm/Sites/Playground/cv3/smarty_libs/Smarty-3.1.12/libs/plugins/modifier.replace.php';
?><section id="category_menu">
<header><h2>Categories</h2></header>

<nav>
<ul>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
 <?php if ($_smarty_tpl->tpl_vars['category']->value['parent']==''&&$_smarty_tpl->tpl_vars['category']->value['inactive']!='y'){?>
  <li<?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['key']->value){?> class="category_top_active"<?php }?>>
   <a href="/category/<?php if ($_smarty_tpl->tpl_vars['category']->value['url_name']!=''){?><?php echo $_smarty_tpl->tpl_vars['category']->value['url_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }?>"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value['name'],"& ","&amp; ");?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['category']->value['sub_cats'][0]!=''){?>
   <?php echo $_smarty_tpl->getSubTemplate ("cat_menu_recur.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cat_id'=>$_smarty_tpl->tpl_vars['key']->value,'prefix'=>"sub"), 0);?>

  <?php }?>
  </li>
 <?php }?>
<?php } ?>
</ul>
</nav>
</section><?php }} ?>