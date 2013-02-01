<?php /* Smarty version Smarty-3.1.12, created on 2013-01-31 16:12:23
         compiled from "/Users/malcolm/Sites/Playground/cv3/smarty/templates/checkout_confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1502350139510adde9042d90-81238470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa883ca857f9854ff86d2c225a33b9631a29b4a0' => 
    array (
      0 => '/Users/malcolm/Sites/Playground/cv3/smarty/templates/checkout_confirmation.tpl',
      1 => 1359670342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1502350139510adde9042d90-81238470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510adde9615758_00877696',
  'variables' => 
  array (
    'file' => 0,
    'l' => 0,
    'i' => 0,
    'prod' => 0,
    'problemSkus' => 0,
    'has_account' => 0,
    'is_member' => 0,
    'change_shipper' => 0,
    'shipservicemsg' => 0,
    'messages' => 0,
    'change_tax' => 0,
    'msg' => 0,
    'settings' => 0,
    'info' => 0,
    'gift_certificates' => 0,
    'code' => 0,
    'currency_type' => 0,
    'meth' => 0,
    'payment_methods' => 0,
    'difference' => 0,
    'someHaveIssues' => 0,
    'order' => 0,
    'promo' => 0,
    'ship_num' => 0,
    'num' => 0,
    'transit_time' => 0,
    't' => 0,
    's' => 0,
    't_states' => 0,
    't_sku' => 0,
    'hasIssue' => 0,
    'gift' => 0,
    'glist' => 0,
    'pr' => 0,
    'bgcol' => 0,
    'curreny_type' => 0,
    'mypayment_method' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510adde9615758_00877696')) {function content_510adde9615758_00877696($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_commify')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.commify.php';
if (!is_callable('smarty_function_math')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/function.math.php';
if (!is_callable('smarty_function_counter')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/function.counter.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/function.cycle.php';
?>
<?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION['cart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value){
$_smarty_tpl->tpl_vars['prod']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['prod']->key;
?>
  <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['l']->key;
?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(smarty_modifier_regex_replace(trim(explode("\t",$_smarty_tpl->tpl_vars['l']->value)),"/(\'|\"| )/",''), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['test'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value[0], null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['prod']->value['sku']==$_smarty_tpl->tpl_vars['i']->value[0]){?>
      <?php if ($_smarty_tpl->tpl_vars['problemSkus']->value==''){?>
        <?php $_smarty_tpl->tpl_vars["problemSkus"] = new Smarty_variable((($_smarty_tpl->tpl_vars['prod']->value['sku']).("|")).($_smarty_tpl->tpl_vars['i']->value[1]), null, 0);?>
      <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars["problemSkus"] = new Smarty_variable(((($_smarty_tpl->tpl_vars['problemSkus']->value).($_smarty_tpl->tpl_vars['prod']->value['sku'])).("|")).($_smarty_tpl->tpl_vars['i']->value[1]), null, 0);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['i']->value[2]=='x'){?>
        <?php $_smarty_tpl->tpl_vars["problemSkus"] = new Smarty_variable(($_smarty_tpl->tpl_vars['problemSkus']->value).(",X"), null, 0);?>
      <?php }?>
      <?php $_smarty_tpl->tpl_vars["problemSkus"] = new Smarty_variable(($_smarty_tpl->tpl_vars['problemSkus']->value).("::"), null, 0);?>
    <?php }?>
  <?php } ?>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="checkout-inner-page">

<div class="checkout-table-wrapper">
<div <?php if ($_SESSION['mobile']!='true'){?>style="padding:8px 0 8px 8px;"<?php }?>>

<div data-role="fieldcontain">
  <fieldset class="ui-grid-a top-buttons">
   <div class="ui-block-a"><h1 style="white-space:nowrap;">Review & Place Order</h1></div>
   <div class="ui-block-b">
    <input type="image" id="checkout_confirmation_btn" name="submit_continue" value="Submit Order" tabindex="1" class="submit btn-checkout" src="http://www.vosgeschocolate.com/images/submit_Order.gif" data-mini="true"/>
   </div>
  </fieldset>
</div>

<br class="clear">

<?php if ($_smarty_tpl->tpl_vars['has_account']->value=='y'&&$_smarty_tpl->tpl_vars['is_member']->value=='n'){?>
 <div>We noticed that you have not logged in yet. Please <a href="/member_login">login</a>.</div><br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['change_shipper']->value!=''||$_smarty_tpl->tpl_vars['shipservicemsg']->value!=''||$_smarty_tpl->tpl_vars['messages']->value!=''){?>
<div style="border:1px solid red; margin:5px auto 0 auto; padding:4px; text-align:center; width:auto;">

<?php if ($_smarty_tpl->tpl_vars['change_shipper']->value!=''){?>  <p><b><?php if (strpos($_smarty_tpl->tpl_vars['change_shipper']->value,"Standard")!==false){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['change_shipper']->value,"<br />"," ");?>
 for no additional cost to you.<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['change_shipper']->value;?>
<?php }?></b></p> <?php }?>

<?php if ($_smarty_tpl->tpl_vars['change_tax']->value=='y'){?>  <p><b>Note: Your tax total has changed.</b></p> <?php }?>

<?php if ($_smarty_tpl->tpl_vars['shipservicemsg']->value!=''){?> <p><?php echo $_smarty_tpl->tpl_vars['shipservicemsg']->value;?>
</b></p><?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value!=''){?> 
<p><b>Note:</b><br />
  <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
    <b>&#149;&nbsp;<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</b><br />
  <?php } ?>
 </p>
<?php }?>

</div>
<?php }?>

</div>


<form method="post" action="index.php" id="confirmation_form"> 
<input type="hidden" name="action" value="CheckoutConfirmation" />
<input type="hidden" name="confirmation_text" value="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('confirmation_email_text'),'"','&quot;');?>
" />
<input type="hidden" name="confirmation_special" value="<?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('confirmation_email_special'),'"','&quot;');?>
" />

<table width="100%" border="0" cellspacing="0" cellpadding="3" align="center">
<tr style="vertical-align:top;">
<td style="border-bottom:0px solid #ddd;padding-bottom:5px;">
<table width="100%">
<tr style="vertical-align:top;">
 <td width="100%">
<div class="info-box first">
<table width="100%">

 <?php if ($_smarty_tpl->tpl_vars['settings']->value['amazon_checkout']!='y'||$_SESSION['amazon_id']==''){?>
  <tr>
    <th> 
      <div class="cart-section-header"><h4>Billing Information</h4></div>
    </th>
  </tr>
  <tr>
    <td class="normaltext">
      <?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='paypal'&&($_smarty_tpl->tpl_vars['settings']->value['paypal_skip']=='y'||$_smarty_tpl->tpl_vars['settings']->value['paypal_express_checkout']=='y')){?>
         <p>PayPal Order</p>
         <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['email'];?>
</p>
      <?php }else{ ?>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['last_name'];?>
</p>
<?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['company']!=''){?>

      <?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['company'];?>
<br />

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['title']!=''){?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['title'];?>
</p>

<?php }?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_address1'];?>
</p>

<?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['billing_address2']!=''){?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_address2'];?>
</p>

<?php }?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_city'];?>
, <?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_state'];?>
  <?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_zip'];?>
</p>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['billing_country'];?>
</p>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['email'];?>
</p>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['phone'];?>
</p>
      <?php }?>
     
       <?php if ($_smarty_tpl->tpl_vars['settings']->value['paypal_express_checkout']!='y'){?><input type="image" name="submit_billing" value="Edit" class="submit btn-checkout" src="http://www.vosgeschocolate.com/images/edit.gif" /><?php }?>
    </td>
  </tr>

</table>
</div>

<div class="info-box">
<table width="100%">
  <tr>
    <th>
      <div class="cart-section-header"><h4>Payment Information</h4></div>
    </th>
  </tr>
  <tr>
    <td class="normaltext">
      <?php $_smarty_tpl->tpl_vars["meth"] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method'], null, 0);?>
      <?php if (count($_smarty_tpl->tpl_vars['gift_certificates']->value['codes'])>0){?>
        <?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value){
$_smarty_tpl->tpl_vars['code']->_loop = true;
?>
          <p>Payment Method:&nbsp;Gift Card</p>
          <p>Code:&nbsp;<?php echo $_smarty_tpl->tpl_vars['code']->value['code'];?>
</p>
          <p>Amount Used:&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['code']->value['amount']);?>
</p>
          <p>Remaining Balance:&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['code']->value['remaining']);?>
</p>
        <?php } ?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['meth']->value!='giftcertificate'){?> 
        <p>Payment Method:&nbsp;<?php echo $_smarty_tpl->tpl_vars['payment_methods']->value[$_smarty_tpl->tpl_vars['meth']->value];?>
</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['meth']->value=='creditcard'){?>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['ccname'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['cctype'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['last_four'];?>
 (Last 4 digits)</p>
      <?php }elseif($_smarty_tpl->tpl_vars['meth']->value=='purchaseorder'){?>
        <p>Gift Card:&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['purchase_order'];?>
</p>
      <?php }elseif($_smarty_tpl->tpl_vars['meth']->value=='echeck'){?>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing']['last_four'];?>
 (Last 4 digits)</p>
      <?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['gift_certificates']->value['codes'])>0&&$_smarty_tpl->tpl_vars['meth']->value!='giftcertificate'){?>
        <?php echo smarty_function_math(array('equation'=>"(x-y)+z",'x'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['total'],'y'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['gctotal'],'z'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['remaining'],'assign'=>'difference'),$_smarty_tpl);?>

        <p>Amount:&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['difference']->value);?>
</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['settings']->value['paypal_express_checkout']!='y'){?><input type="image" name="submit_payment" value="Edit" class="submit" src="http://www.vosgeschocolate.com/images/edit.gif" /><?php }?>
    </td>
  </tr>
 <?php }?>
</table>
</div>
<div class="info-box last">
<table width="100%">
  <tr>
    <th align="right">
      <div class="cart-section-header"><h4 style="text-align:right;">Complete Order Total</h4></div>
    </th>
  </tr>
  <tr>
    <td align="right" class="normaltext">
           <?php if ($_smarty_tpl->tpl_vars['someHaveIssues']->value==''){?>
      <p><b>Subtotal:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['subtotal']);?>
</p>
   <?php if ($_smarty_tpl->tpl_vars['order']->value['gifttotal']!=0){?>
      <p><b>Giftwrap Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['gifttotal']);?>
</p>
   <?php }?>
      <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['totalordpromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['promo']->value['type']=='%'){?>
            <p><b>Promo Discount: </b> -<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
          <?php }elseif($_smarty_tpl->tpl_vars['promo']->value['type']=='$'){?>
            <p><b>Promo Discount: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
          <?php }elseif($_smarty_tpl->tpl_vars['promo']->value['type']=='freeprod'){?>
            <p><b>Free Product Discount (<?php echo $_smarty_tpl->tpl_vars['promo']->value['prod_name'];?>
): </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
          <?php }?>
       <?php } ?>
      <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['totalordshippromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['promo']->value['type']=='%'){?>
            <p><b>Shipping Discount: </b> -<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
          <?php }elseif($_smarty_tpl->tpl_vars['promo']->value['type']=='$'){?>
            <p><b>Shipping Discount: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
          <?php }?>
       <?php } ?>
      <p><b>Shipping Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['shiptotal']);?>
</p>

<?php if ($_smarty_tpl->tpl_vars['order']->value['sgroupadd']!=0){?>
      <p><b>Cooling Materials:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['order']->value['sgroupadd'];?>
</p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order']->value['shipserviceadd']!=0){?>
      <p><b>Shipping Adjustment:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['order']->value['shipserviceadd'];?>
</p>
<?php }?>

      <p><b>Tax Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['taxtotal']);?>
</p>
      <p class="larger black"><b>Grand Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['grandtotal']);?>
</p>
           <?php }else{ ?>
            <p><b>Please correct the above issue(s) before continuing.</b></p>
           <?php }?>
    </td>
  </tr>

</table>
</td>
</tr>
</table>

</td>
</tr>

<tr style="vertical-align:top;">
<td>
<table style="width:100%;" class="lower">

 <?php echo smarty_function_counter(array('start'=>0,'assign'=>'num'),$_smarty_tpl);?>

  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ship'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['name'] = 'ship';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ship_num']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ship']['total']);
?>
  <tr style="vertical-align:top;">
    <th colspan="2">
      <div class="cart-section-header"><h4>Shipping Information for <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_firstname'];?>
</h4></div>
    </th>
  </tr>

<tr style="vertical-align:top;">
<td width="100%">

<div class="info-box first">
<table style="width:100%;">

  <tr style="vertical-align:top;">
    <td>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_lastname'];?>
</p>
      <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_title']!=''){?><p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_title'];?>
</p><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_company']!=''){?><p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_company'];?>
</p><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['settings']->value['amazon_checkout']!='y'||$_SESSION['amazon_id']==''){?>
      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_address1'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_address2']!=''){?>
          <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_address2'];?>
</p>
        <?php }?>
      <?php }?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_city'];?>
, <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_state'];?>
 
      <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_zip'];?>

      <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_country'];?>
</p>
      <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_phone']!=''){?>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_phone'];?>
</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_email']!=''){?>
        <p><?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_email'];?>
</p>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['settings']->value['amazon_checkout']=='y'&&isset($_SESSION['amazon_id'])&&$_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='amazon'){?>
        <p>Payment Method: Amazon Payments</p>
      <?php }?>

      <p>Requested Ship Date: <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_shipon'];?>
</p>
      <?php if ($_smarty_tpl->tpl_vars['settings']->value['ups_time_in_transit']=='y'&&isset($_smarty_tpl->tpl_vars['transit_time']->value[$_smarty_tpl->tpl_vars['num']->value]['arrival_date'])){?>
        <p>Transit Time: <?php echo $_smarty_tpl->tpl_vars['transit_time']->value[$_smarty_tpl->tpl_vars['num']->value]['transit_days'];?>
 Business Day<?php if ($_smarty_tpl->tpl_vars['transit_time']->value[$_smarty_tpl->tpl_vars['num']->value]['transit_days']>1){?>s<?php }?><br />
               Estimated Arrival: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['transit_time']->value[$_smarty_tpl->tpl_vars['num']->value]['arrival_date'],"%B %e");?>

       </p>
      <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['gift_message']!=''){?>

      <p>Gift Message: <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['gift_message'];?>
</p>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_comments']!=''){?>

      <p>Comments: <?php echo $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_comments'];?>
</p>
  
    <?php }?>
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['paypal_express_checkout']!='y'){?><input type="image" name="submit_shipping" value="Edit" class="submit" src="http://www.vosgeschocolate.com/images/edit.gif" /><?php }?>

</td>
</tr>
</table>
</div>
<div class="info-box last">
      <table width="100%" class="viewcart" style="border:1px solid #ddd;">
        <tr>
          <th width="10%">
            Qty
          </th>
          <th width="15%">
            Item #
          </th>
          <th width="55%">
            <div align="left">Description</div>
          </th>
          <th width="20%">
            <div align="right">Price</div>
          </th>
        </tr>

      <?php $_smarty_tpl->tpl_vars["someHaveIssues"] = new Smarty_variable('', null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['prods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value){
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars["hasIssue"] = new Smarty_variable('', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['problemSkus']->value!=''){?>
          <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(explode("::",$_smarty_tpl->tpl_vars['problemSkus']->value), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
            <?php $_smarty_tpl->tpl_vars["s"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['t']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["t_sku"] = new Smarty_variable($_smarty_tpl->tpl_vars['s']->value[0], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["t_states"] = new Smarty_variable($_smarty_tpl->tpl_vars['s']->value[1], null, 0);?>
            <?php $_smarty_tpl->tpl_vars["t_states"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['t_states']->value), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['t_sku']->value==$_smarty_tpl->tpl_vars['prod']->value['sku']){?>
              <?php if (in_array($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_state'],$_smarty_tpl->tpl_vars['t_states']->value)){?>
                <?php $_smarty_tpl->tpl_vars["someHaveIssues"] = new Smarty_variable("y", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["hasIssue"] = new Smarty_variable(("<b>The item above cannot ship to ").($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_state']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["hasIssue"] = new Smarty_variable(($_smarty_tpl->tpl_vars['hasIssue']->value).(". Please <a href=\"/viewcart\">remove this item</a> before continuing.</b>"), null, 0);?>
              <?php }elseif($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_country']!="United States"){?>
                <?php $_smarty_tpl->tpl_vars["hasIssue"] = new Smarty_variable(("<b>The item above cannot ship to ").($_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['s_country']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["hasIssue"] = new Smarty_variable(($_smarty_tpl->tpl_vars['hasIssue']->value).(". Please <a href=\"/viewcart\">remove this item</a> before continuing.</b>"), null, 0);?>
              <?php }?>
            <?php }?>
          <?php } ?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['prod']->value['build_prod_id']==''){?>
        <tr>
          <td align="center" class="normaltext">
            <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?><?php echo $_smarty_tpl->tpl_vars['prod']->value['qty'];?>
<?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
          </td>
          <td align="center" class="normaltext">
            <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?><?php echo $_smarty_tpl->tpl_vars['prod']->value['sku'];?>
<?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
          </td>
          <td class="normaltext">
          <table width="100%" cellspacing="0" cellpadding="0">
           <tr>
           
            <td align="left" class="normaltext">
            <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
<br />
        <?php  $_smarty_tpl->tpl_vars['gift'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gift']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value['gifts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gift']->key => $_smarty_tpl->tpl_vars['gift']->value){
$_smarty_tpl->tpl_vars['gift']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['gift']->value!=''){?>
           * <?php echo $_smarty_tpl->tpl_vars['gift']->value;?>
<br />
          <?php }?>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['prod']->value['note']!=''){?>
         Note: <?php echo $_smarty_tpl->tpl_vars['prod']->value['note'];?>
<br />
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prod']->value['att_list']!=''){?>
         <?php echo $_smarty_tpl->tpl_vars['prod']->value['att_list'];?>
<br />
        <?php }?><?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prod']->value['custom_form']!=''){?>
          <?php if (count($_smarty_tpl->tpl_vars['prod']->value['custom_form'])>0&&$_smarty_tpl->tpl_vars['prod']->value['name']=='e-Gift Card'){?>
             <?php  $_smarty_tpl->tpl_vars['glist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['glist']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prod']->value['custom_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['glist']->key => $_smarty_tpl->tpl_vars['glist']->value){
$_smarty_tpl->tpl_vars['glist']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['glist']->key;
?>
                <br /><strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['glist']->value;?>

             <?php } ?>
          <?php }?>

          <br />
        <?php }?>
           </td></tr>
          </table>
          </td>
          <td align="right" class="normaltext">
            <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?><?php if ($_smarty_tpl->tpl_vars['prod']->value['build_parent']!='y'){?>
              <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['prod']->value['price']);?>

            <?php }else{ ?>
              &nbsp;
            <?php }?><?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
          </td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['prod']->value['build_parent']=='y'){?>
          <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['shipping'][$_smarty_tpl->tpl_vars['num']->value]['prods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['pr']->value['build_prod_id']!=''&&$_smarty_tpl->tpl_vars['pr']->value['build_link']==$_smarty_tpl->tpl_vars['prod']->value['build_link']){?>
              <tr valign="top">
                <td align="center" class="normaltext">
                 <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?> <?php echo $_smarty_tpl->tpl_vars['pr']->value['qty'];?>
<?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
                </td>
                <td align="center" class="normaltext">
                  &nbsp;
                </td>
                <td class="normaltext">
                  <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['pr']->value['name'];?>
<br />
                  <?php  $_smarty_tpl->tpl_vars['gift'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gift']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value['gifts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gift']->key => $_smarty_tpl->tpl_vars['gift']->value){
$_smarty_tpl->tpl_vars['gift']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['gift']->value!=''){?>
                     &nbsp;&nbsp;&nbsp;* <?php echo $_smarty_tpl->tpl_vars['gift']->value;?>
<br />
                    <?php }?>
                  <?php } ?>
                  <?php if ($_smarty_tpl->tpl_vars['pr']->value['note']!=''){?>
                    &nbsp;&nbsp;&nbsp;Note: <?php echo $_smarty_tpl->tpl_vars['pr']->value['note'];?>
<br />
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['pr']->value['att_list']!=''){?>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['pr']->value['att_list'],"<br />","<br />&nbsp;&nbsp;&nbsp;&nbsp;");?>

                  <?php }?><?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['pr']->value['custom_form']!=''){?>
                    <?php if (count($_smarty_tpl->tpl_vars['pr']->value['custom_form'])>0&&$_smarty_tpl->tpl_vars['pr']->value['name']=='e-Gift Card'){?>
                       <?php  $_smarty_tpl->tpl_vars['glist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['glist']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pr']->value['custom_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['glist']->key => $_smarty_tpl->tpl_vars['glist']->value){
$_smarty_tpl->tpl_vars['glist']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['glist']->key;
?>
                          <br /><strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['glist']->value;?>

                       <?php } ?>
                    <?php }?>
                    
                  <?php }?>
                </td>
                <td align="right" class="normaltext">
                  <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?><s><?php }?><?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['pr']->value['price']);?>
<?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?></s><?php }?>
                </td>
              </tr>
            <?php }?>
          <?php } ?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['prod']->value['gift_wrap']=='y'&&$_smarty_tpl->tpl_vars['prod']->value['gift_wrap_info']!=''){?>
           <tr valign="top">
              <td align="center" class="normaltext">
                 <?php echo $_smarty_tpl->tpl_vars['prod']->value['qty'];?>

              </td>
              <td align="center" class="normaltext">
                <?php echo $_smarty_tpl->tpl_vars['prod']->value['gift_wrap_info']['gift_wrap_sku'];?>

              </td>
              <td class="normaltext">
                <?php echo $_smarty_tpl->tpl_vars['prod']->value['gift_wrap_info']['gift_wrap_name'];?>

              </td>
              <td align="right" class="normaltext">
                <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['prod']->value['gift_wrap_info']['total']);?>

              </td>
            </tr>
          <?php }?>
        <?php }?>
       <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value!=''){?>
         <?php echo smarty_function_cycle(array('values'=>"#f2ecdb,#ebe1a5",'assign'=>'bgcol'),$_smarty_tpl);?>

         <tr bgcolor="<?php echo $_smarty_tpl->tpl_vars['bgcol']->value;?>
" class="small_darkred">
           <td colspan="2">&nbsp;</td>
           <td align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['hasIssue']->value;?>
</td>
         </tr>
       <?php }?>
<tr><td colspan="4" style="border-bottom:1px solid #CCC; padding:0;"></td></tr>
      <?php } ?>

        <tr>
          <td align="right" colspan="4" class="normaltext order-totals-bottom">
    <?php if ($_smarty_tpl->tpl_vars['someHaveIssues']->value==''){?>
            <p><b>Subtotal:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['subtotal']);?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['giftwrap']!=0){?>
            <p>Giftwrap:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['giftwrap']);?>
</p>
        <?php }?>
            <p><b>Shipping Rate:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['shipping']);?>
</p>

        <?php if ($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['sgroupadd']!=0){?>
            <p><b> Cooling Materials: </b> <?php echo $_smarty_tpl->tpl_vars['curreny_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['sgroupadd']);?>
</p>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['totalpromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
           <?php if ($_smarty_tpl->tpl_vars['promo']->value['type']=='%'){?>
               <p><b>Promo Discount: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
           <?php }elseif($_smarty_tpl->tpl_vars['promo']->value['type']=='$'){?>
               <p><b>Promo Discount: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
           <?php }?>
        <?php } ?>
        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['shippromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
           <?php if ($_smarty_tpl->tpl_vars['promo']->value['type']=='%'){?>
               <p><b>Shipping Promo: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
           <?php }elseif($_smarty_tpl->tpl_vars['promo']->value['type']=='$'){?>
               <p><b>Shipping Promo: </b>-<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['promo']->value['deduction'];?>
</p>
           <?php }?>
        <?php } ?>
            <p><b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['total']);?>
</p>
           <?php }else{ ?>
            <p><b>Please correct the above issue(s) before continuing.</b></p>
           <?php }?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <?php echo smarty_function_counter(array('assign'=>'num'),$_smarty_tpl);?>

<?php endfor; endif; ?>

</table>
</div>

</td>
</tr>



  <tr>
    <td align="right" >
     <p class="largest black" ><b>Grand Total:</b> <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['order']->value['grandtotal']);?>
</p>

<?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='onfile'||$_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='creditcard'||$_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='giftcertificate'){?>
 <?php if ($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='onfile'){?>
   <?php $_smarty_tpl->tpl_vars['mypayment_method'] = new Smarty_variable("Credit Card On File", null, 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='creditcard'){?>
   <?php $_smarty_tpl->tpl_vars['mypayment_method'] = new Smarty_variable("Credit Card", null, 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['info']->value['billing']['payment_method']=='giftcertificate'){?>
   <?php $_smarty_tpl->tpl_vars['mypayment_method'] = new Smarty_variable("Gift Certificat", null, 0);?>
 <?php }?>

  <p style="color:#777;font-size:12px;"><em>Your form of payment <strong><?php echo $_smarty_tpl->tpl_vars['mypayment_method']->value;?>
</strong>, will be charged at the time of order.</em></p>
<?php }?>
<br>
      
      <input type="hidden" name="to_email" value="<?php echo $_smarty_tpl->getConfigVariable('form_orders_to');?>
" />
      <input type="hidden" name="from_email" value="<?php echo $_smarty_tpl->getConfigVariable('form_orders_from');?>
" />
      <input type="hidden" name="paypal_express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['paypal_express_checkout'];?>
" />
<fieldset class="ui-grid-a">
	<div class="ui-block-a"></div>
	<div class="ui-block-b">
      <?php if ($_smarty_tpl->tpl_vars['hasIssue']->value==''){?><input type="image" name="submit_continue" value="Submit Order" tabindex="1" class="submit" src="http://www.vosgeschocolate.com/images/submit_Order.gif" data-mini="true"/><?php }?>
	</div>
</fieldset>
    </td>
  </tr>
</table>
</form>

<!--checkout-table-wrapper--></div>
<!--checkout-inner-page--></div>
<?php echo $_smarty_tpl->getSubTemplate ("_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>