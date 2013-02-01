<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 22:57:30
         compiled from "./smarty/templates/cat_menu_recur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767160027510b49538ca606-88855056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15413ee77377e278b7b07d0c04b5bd33b8189bc9' => 
    array (
      0 => './smarty/templates/cat_menu_recur.tpl',
      1 => 1359694648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767160027510b49538ca606-88855056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510b495398fb19_84003162',
  'variables' => 
  array (
    'cat_id' => 0,
    'categories' => 0,
    'c' => 0,
    'cid' => 0,
    'ret' => 0,
    'scategory' => 0,
    'showSubs' => 0,
    'prefix' => 0,
    'prod_display_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510b495398fb19_84003162')) {function content_510b495398fb19_84003162($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/malcolm/Sites/Playground/cv3/smarty_libs/Smarty-3.1.12/libs/plugins/modifier.replace.php';
?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['cat_id']->value]['sub_cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
 <?php $_smarty_tpl->tpl_vars["scategory"] = new Smarty_variable($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['c']->value], null, 0);?>
 
 <?php if (in_array($_smarty_tpl->tpl_vars['cid']->value,$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['cat_id']->value]['all_subcats'])){?> 
 <?php $_smarty_tpl->tpl_vars["ret"] = new Smarty_variable("y", null, 0);?>
 <?php }?>
 <?php if (($_smarty_tpl->tpl_vars['ret']->value=='y'||$_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['c']->value||$_smarty_tpl->tpl_vars['scategory']->value['parent']==$_smarty_tpl->tpl_vars['cid']->value)&&$_smarty_tpl->tpl_vars['scategory']->value['inactive']!='y'){?>
  <?php $_smarty_tpl->tpl_vars['showSubs'] = new Smarty_variable('y', null, 0);?>
 <?php }?>
<?php } ?>

<?php $_smarty_tpl->tpl_vars['showSubs'] = new Smarty_variable('y', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['showSubs']->value=='y'){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['cat_id']->value]['sub_cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
 <?php $_smarty_tpl->tpl_vars["scategory"] = new Smarty_variable($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['c']->value], null, 0);?>
 
  <?php if (in_array($_smarty_tpl->tpl_vars['cid']->value,$_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['cat_id']->value]['all_subcats'])){?> 
 <?php $_smarty_tpl->tpl_vars["ret"] = new Smarty_variable("y", null, 0);?>
 <?php }?>
 
  <li<?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['c']->value){?> class="category_<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
_active"<?php }?>>
   <a href="/<?php echo $_smarty_tpl->tpl_vars['prod_display_type']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['scategory']->value['url_name']!=''){?><?php echo $_smarty_tpl->tpl_vars['scategory']->value['url_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
<?php }?>"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['scategory']->value['name'],"& ","&amp; ");?>
</a>
  <?php if ($_smarty_tpl->tpl_vars['scategory']->value['sub_cats'][0]!=''){?>
   <?php echo $_smarty_tpl->getSubTemplate ("cat_menu_recur.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cat_id'=>$_smarty_tpl->tpl_vars['c']->value,'prefix'=>($_smarty_tpl->tpl_vars['prefix']->value).("-sub")), 0);?>

  <?php }?>
  </li>
 
<?php } ?>
</ul>
<?php }?><?php }} ?>