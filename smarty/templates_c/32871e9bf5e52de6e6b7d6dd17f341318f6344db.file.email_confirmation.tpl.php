<?php /* Smarty version Smarty-3.1.12, created on 2012-12-19 17:35:26
         compiled from "/Users/malcolm/Sites/Playground/cv3/smarty/templates/email_confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169881396150d1f3534d2fa7-54546647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32871e9bf5e52de6e6b7d6dd17f341318f6344db' => 
    array (
      0 => '/Users/malcolm/Sites/Playground/cv3/smarty/templates/email_confirmation.tpl',
      1 => 1355960102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169881396150d1f3534d2fa7-54546647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d1f3538a8dc3_01509477',
  'variables' => 
  array (
    'billing' => 0,
    'confirm' => 0,
    'has_ed' => 0,
    'order_id' => 0,
    'gift_certificates' => 0,
    'code' => 0,
    'currency_type' => 0,
    'meth' => 0,
    'payment_methods' => 0,
    'difference' => 0,
    'shipping' => 0,
    'ship' => 0,
    'num' => 0,
    'recp_num' => 0,
    'ship_on' => 0,
    'prods' => 0,
    'glist' => 0,
    'gc' => 0,
    'form_field' => 0,
    'form_value' => 0,
    'field' => 0,
    'label' => 0,
    'totals' => 0,
    'pro' => 0,
    'print_custom_detail' => 0,
    'custom_detail' => 0,
    'print_gift_certificates' => 0,
    'url' => 0,
    'custf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d1f3538a8dc3_01509477')) {function content_50d1f3538a8dc3_01509477($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_commify')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.commify.php';
if (!is_callable('smarty_function_math')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/malcolm/Sites/libs/smarty/Smarty-3.1.12/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">

<!-- start confirmation template -->
<center>
<table id="confEmail" width="550" height="100%" border="0" cellpadding="0" cellspacing="0">
	<tr id="emailHeader">
		<td valign="top">
			<a href="http://www.vosgeschocolate.com?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Header&utm_source=Logo"><img src="http://www.vosgeschocolate.com/images/vosges_logo_2011.jpg" style="border:none;"></a>
		</td>
	</tr>
	<tr id="mainNav" style="text-align:center;font-weight:bold;font-family:arial,helvetica,sans-serif;">
		<td valign="top">
			<table width="100%" height="40">
				<tr>
					<td><a href="http://www.vosgeschocolate.com/category/gift_ideas" style="text-decoration:none;color:#38095a;">gift ideas</a></td>
					<td><a href="http://www.vosgeschocolate.com/category/chocolate_truffles" style="text-decoration:none;color:#38095a;">truffles</a></td>
					<td><a href="http://www.vosgeschocolate.com/category/bacon_and_chocolate" style="text-decoration:none;color:#38095a;">bacon + chocolate</a></td>
					<td><a href="http://www.vosgeschocolate.com/category/vosges-shop-by-product-categories" style="text-decoration:none;color:#38095a;">all chocolate</a></td>
				</tr>
			</table>
			<img width="550" height="1" style="margin-bottom:8px;" src="http://vosgeschocolate.com/images/gray_line.gif">		
		</td>
	</tr>
	<tr id="emailBody">
		<td valign="top">
			<table width="550" border="0" align="center">
			  <?php if ($_smarty_tpl->getConfigVariable('confirmation_email_special')!=''){?>
			  <tr>
			    <td colspan="2">
			      <?php echo $_smarty_tpl->getConfigVariable('confirmation_email_special');?>
<br /><br />
			    </td>
			  </tr>
			  <?php }?>
			  <tr>
			    <td colspan="2">
			      <?php if ($_smarty_tpl->getConfigVariable('confirmation_email_text')!=''){?>
			        <?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->getConfigVariable('confirmation_email_text'),"[[first_name]]",$_smarty_tpl->tpl_vars['billing']->value['first_name']), null, 0);?>   
			        <?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['confirm']->value,"[[last_name]]",$_smarty_tpl->tpl_vars['billing']->value['last_name']), null, 0);?>   
			        <?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['confirm']->value,"[[co_name]]",$_smarty_tpl->getConfigVariable('store_name')), null, 0);?>
			        <?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
   
			      <?php }else{ ?>
			         Thank you, <?php echo $_smarty_tpl->tpl_vars['billing']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['billing']->value['last_name'];?>
, for ordering from Vosges Haut-Chocolat.  Your order has been received. Below you will find details about your current order.  You may wish to print and save this confirmation for possible future reference.
			      <?php }?>
			      </td>
			    </tr>
			    
			    <?php if ($_smarty_tpl->tpl_vars['has_ed']->value=='y'){?>
			    <tr>
			      <td colspan="2">
			        <b>Please see below for information regarding your electronic products.</b>
			      </td>
			    </tr>
			    <?php }?>
			    <tr>
			      <td colspan="2">
			        <br />
			        <b><font size="+1">Order ID: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</font></b>
			        <br /><br />
			      </td>
			    </tr>
			    <tr bgcolor="#e4cdf3">
			      <td colspan="2">
			        <b><font size="+1">Billing Information</font></b>
			      </td>
			    </tr
			    <tr>
			      <td width="50%" valign="top">
			        <?php echo $_smarty_tpl->tpl_vars['billing']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['billing']->value['last_name'];?>

			        <br />
			           <?php if ($_smarty_tpl->tpl_vars['billing']->value['company']!=''){?>
			             <?php echo $_smarty_tpl->tpl_vars['billing']->value['company'];?>
<br />
			           <?php }?>
			           <?php if ($_smarty_tpl->tpl_vars['billing']->value['title']!=''){?>
			             <?php echo $_smarty_tpl->tpl_vars['billing']->value['title'];?>
<br />
			           <?php }?>
			           <?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_address1'];?>
<br />
			           <?php if ($_smarty_tpl->tpl_vars['billing']->value['billing_address2']!=''){?>
			             <?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_address2'];?>
<br />
			           <?php }?>
			           <?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_city'];?>
, <?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_state'];?>
 <?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_zip'];?>

			           <br /><?php echo $_smarty_tpl->tpl_vars['billing']->value['billing_country'];?>
<br /><br />
			         </td>
			         <td valign="top">
			           Email: <?php echo $_smarty_tpl->tpl_vars['billing']->value['email'];?>
<br />
			           Phone: <?php echo $_smarty_tpl->tpl_vars['billing']->value['phone'];?>
<br /><br />
			         </td>
			       </tr>
			       <tr bgcolor="#e4cdf3">
			         <td colspan="2">
			           <b><font size="+1">Payment Information</font></b>
			         </td>
			       </tr>
			       <tr>
			         <td colspan="2">
			           <?php $_smarty_tpl->tpl_vars['meth'] = new Smarty_variable($_smarty_tpl->tpl_vars['billing']->value['payment_method'], null, 0);?>
			      <?php if (count($_smarty_tpl->tpl_vars['gift_certificates']->value['codes'])>0){?>
			        <?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value){
$_smarty_tpl->tpl_vars['code']->_loop = true;
?>
			          Payment Method: Gift Card<br />
			          Code: XXXXXXXXXXXX<?php echo substr($_smarty_tpl->tpl_vars['code']->value['code'],'-4');?>
<br />
			          Amount Used: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['code']->value['amount']);?>
<br />
			          Remaining Balance: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['code']->value['remaining']);?>
<br /><br />
			        <?php } ?>
			      <?php }?>
			      <?php if ($_smarty_tpl->tpl_vars['meth']->value!='giftcertificate'&&$_smarty_tpl->tpl_vars['meth']->value!='purchaseorder'){?>
			        Payment Method: <?php echo $_smarty_tpl->tpl_vars['payment_methods']->value[$_smarty_tpl->tpl_vars['meth']->value];?>
<br />
			      <?php }?>
			           <?php if ($_smarty_tpl->tpl_vars['billing']->value['payment_method']=='creditcard'){?>
			             Name on Card: <?php echo $_smarty_tpl->tpl_vars['billing']->value['ccname'];?>
<br />
			             Card Type: <?php echo $_smarty_tpl->tpl_vars['billing']->value['cctype'];?>
<br />
			             Last Four Digits: <?php echo $_smarty_tpl->tpl_vars['billing']->value['last_four'];?>
<br />
			           <?php }elseif($_smarty_tpl->tpl_vars['billing']->value['payment_method']=='purchaseorder'){?>
			             Gift Card: <?php echo $_smarty_tpl->tpl_vars['billing']->value['purchase_order'];?>
<br />
			           <?php }?>
			           <?php if (count($_smarty_tpl->tpl_vars['gift_certificates']->value['codes'])>0&&$_smarty_tpl->tpl_vars['meth']->value!='giftcertificate'){?>
			            <?php echo smarty_function_math(array('equation'=>"(x-y)+z",'x'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['total'],'y'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['gctotal'],'z'=>$_smarty_tpl->tpl_vars['gift_certificates']->value['totals']['remaining'],'assign'=>'difference'),$_smarty_tpl);?>

			             Amount: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['difference']->value);?>
<br />
			            <?php }?>
			         </td>
			       </tr>
			       <tr bgcolor="#e4cdf3">
			         <td colspan="2">
			           <b><font size="+1">Shipping Information</font></b>
			         </td>
			       </tr>
			       <?php $_smarty_tpl->tpl_vars["custom_detail"] = new Smarty_variable("<tr bgcolor=\"#e4cdf3\"><td colspan=\"2\"><b><font size=\"+1\">Custom Product Information</font></b></td></tr>", null, 0);?>
			       <?php $_smarty_tpl->tpl_vars["print_custom_detail"] = new Smarty_variable("n", null, 0);?>
			       <?php $_smarty_tpl->tpl_vars["gift_certificates"] = new Smarty_variable("<tr bgcolor=\"#e4cdf3\"><td colspan=\"2\"><b><font size=\"+1\" >Gift Card Information</font></b></td></tr>", null, 0);?>
			       <?php $_smarty_tpl->tpl_vars["print_gift_certificates"] = new Smarty_variable("n", null, 0);?>
			       <?php  $_smarty_tpl->tpl_vars['ship'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ship']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ship']->key => $_smarty_tpl->tpl_vars['ship']->value){
$_smarty_tpl->tpl_vars['ship']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['ship']->key;
?>
			          <?php if (count($_smarty_tpl->tpl_vars['ship']->value['prods'])>0){?>
			             <tr>
			               <td colspan="2">
			                  <?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['num']->value,'y'=>1,'assign'=>'recp_num'),$_smarty_tpl);?>

			                  <b>Recipient <?php echo $_smarty_tpl->tpl_vars['recp_num']->value;?>
</b>
			                </td>
			              </tr>
			              <tr>
			                <td valign="top">
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_lastname'];?>
<br />
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_title'];?>
<br />
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_company'];?>
<br />
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_address1'];?>
<br />
			                  <?php if ($_smarty_tpl->tpl_vars['ship']->value['s_address2']!=''){?>
			                    <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_address2'];?>
<br />
			                  <?php }?>
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_city'];?>
, <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_state'];?>
 <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_zip'];?>
<br />
			                  <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_country'];?>
<br />
			                  <?php if ($_smarty_tpl->tpl_vars['ship']->value['s_phone']!=''){?>
			                    <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_phone'];?>
<br />
			                  <?php }?>
			                </td>
			              <td valign="top">
			                Comments: <?php echo $_smarty_tpl->tpl_vars['ship']->value['s_comments'];?>
<br />
			                <?php if ($_smarty_tpl->tpl_vars['ship']->value['gift_message']!=''){?>
			                  Gift Message: <?php echo $_smarty_tpl->tpl_vars['ship']->value['gift_message'];?>
<br />
			                <?php }?> 
			                <?php if ($_smarty_tpl->tpl_vars['ship']->value['s_shipon']==smarty_modifier_date_format(time(),"%Y-%m-%d")||$_smarty_tpl->tpl_vars['ship']->value['s_shipon']=='As soon as possible'){?>
			                   <?php $_smarty_tpl->tpl_vars['ship_on'] = new Smarty_variable("As soon as possible", null, 0);?>
			                <?php }else{ ?>
			                   <?php $_smarty_tpl->tpl_vars['ship_on'] = new Smarty_variable($_smarty_tpl->tpl_vars['ship']->value['s_shipon'], null, 0);?>
			                <?php }?>
			                Requested Ship Date: <?php echo $_smarty_tpl->tpl_vars['ship_on']->value;?>
<br />
			                Shipping Method: <?php if ($_smarty_tpl->tpl_vars['ship']->value['s_method']=='Standard 3-10 days w/Cooling Materials'){?>Summer Express 2 Days<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['ship']->value['s_method'];?>
<?php }?>
			              </td>
			            </tr>
			            <tr>
			              <td colspan="2">
			                &nbsp;
			              </td>
			            </tr>
			            <tr>
			              <td colspan="2">
			                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
			                  <tr bgcolor="#e4cdf3">
			                    <td>
			                      <b>&nbsp;Qty &nbsp;</b>
			                    </td>
			                    <td>
			                      <b>&nbsp;Item #&nbsp;</b>
			                    </td>
			                    <td>
			                      <b>&nbsp;Description&nbsp;</b>
			                    </td>
			                    <td>
			                      <b>&nbsp;Price&nbsp;</b>
			                    </td>
			                  </tr>
			                  <?php  $_smarty_tpl->tpl_vars['prods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ship']->value['prods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prods']->key => $_smarty_tpl->tpl_vars['prods']->value){
$_smarty_tpl->tpl_vars['prods']->_loop = true;
?>
			                    <tr>
			                      <td valign="top">
			                        <?php echo $_smarty_tpl->tpl_vars['prods']->value['qty'];?>

			                      </td>
			                      <td valign="top">
			                       <?php if ($_smarty_tpl->tpl_vars['prods']->value['att_sku']==''){?><?php echo $_smarty_tpl->tpl_vars['prods']->value['sku'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['prods']->value['att_sku'];?>
<?php }?>
			                      </td>
			                      <td valign="top">
			                        <?php echo $_smarty_tpl->tpl_vars['prods']->value['name'];?>

			                        <?php if (count($_smarty_tpl->tpl_vars['prods']->value['gifts'])>0){?>
			                          <?php  $_smarty_tpl->tpl_vars['glist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['glist']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prods']->value['gifts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['glist']->key => $_smarty_tpl->tpl_vars['glist']->value){
$_smarty_tpl->tpl_vars['glist']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['glist']->key;
?>
			                            <?php if ($_smarty_tpl->tpl_vars['glist']->value!=''){?>
			                               <br />* <?php echo $_smarty_tpl->tpl_vars['glist']->value;?>

			                            <?php }?>
			                          <?php } ?>
			                        <?php }?>
			                          <?php if ($_smarty_tpl->tpl_vars['prods']->value['note']!=''){?>
			                          <br />Note: <?php echo $_smarty_tpl->tpl_vars['prods']->value['note'];?>

			                        <?php }?>
			                        <?php if ($_smarty_tpl->tpl_vars['prods']->value['att_list']!=''){?>
			                           <?php echo $_smarty_tpl->tpl_vars['prods']->value['att_list'];?>

			                        <?php }?>
			                        <?php if ($_smarty_tpl->tpl_vars['prods']->value['gift_certificate']!='n'&&count($_smarty_tpl->tpl_vars['prods']->value['gift_certificate'])>0){?>
			                        <?php  $_smarty_tpl->tpl_vars['gc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prods']->value['gift_certificate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gc']->key => $_smarty_tpl->tpl_vars['gc']->value){
$_smarty_tpl->tpl_vars['gc']->_loop = true;
?>
			                        <br>
			                        <strong>Code</strong>: <?php echo $_smarty_tpl->tpl_vars['gc']->value['code'];?>
<br>
			                        <strong>Expiration</strong>: <?php echo $_smarty_tpl->tpl_vars['gc']->value['expiration'];?>
<br>
			                        <strong>Value</strong>: <?php echo $_smarty_tpl->tpl_vars['gc']->value['value'];?>
<br>
			                        <?php if ($_smarty_tpl->tpl_vars['prods']->value['custom_form']!=''){?>
			                        <?php  $_smarty_tpl->tpl_vars['form_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_value']->_loop = false;
 $_smarty_tpl->tpl_vars['form_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prods']->value['custom_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_value']->key => $_smarty_tpl->tpl_vars['form_value']->value){
$_smarty_tpl->tpl_vars['form_value']->_loop = true;
 $_smarty_tpl->tpl_vars['form_field']->value = $_smarty_tpl->tpl_vars['form_value']->key;
?>
			                        <strong><?php echo $_smarty_tpl->tpl_vars['form_field']->value;?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['form_value']->value;?>
<br>
			                        <?php } ?>
			                        <?php }?>
			                        <?php } ?>
			                        <br>
			                        <?php }else{ ?>
				                        <?php if ($_smarty_tpl->tpl_vars['prods']->value['custom_form']!=''){?>
				                        <br>
				                           <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prods']->value['custom_form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
				                             <strong><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</strong>:<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
<br>
				                           <?php } ?>
				                        <?php }?>
				                        <br>
			                        <?php }?>



									<br>
			                       </td>
			                       <td valign="top">
			                         <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['prods']->value['price']);?>

			                       </td>
			                     </tr>
			              <?php } ?>
			              <tr>
			                <td colspan="4" align="right">
			                  <br />Subtotal: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['subtotal']);?>
<br />
			                  <?php if ($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['giftwrap']!=0){?>
			                    Gift Wrap: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['giftwrap'];?>
<br />
			                  <?php }?>
			                  Shipping Rate: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['shipping']);?>
<br />
			                  <?php if ($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['protective']!=0){?>
			                    Protective Shipping: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['protective'];?>
<br />
			                  <?php }?>
			                  <?php if ($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['sgroupadd']!=0){?>
			                    Additional Flat Shipping Rate: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['sgroupadd'];?>
<br />
			                  <?php }?>
			                  <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['shippromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value){
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
			                    Shipping Promo:&nbsp;- <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pro']->value['deduction'];?>
<br />
			                  <?php } ?>
			                  Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['totals'][$_smarty_tpl->tpl_vars['num']->value]['total']);?>
<br />
			                </td>
			              </tr>
			            </table>
			          </td>
			        </tr>
			        <tr>
			          <td colspan="2">
			            &nbsp;
			          </td>
			        </tr>
			      <?php }?>
			    <?php } ?>
			    <tr bgcolor="#e4cdf3">
			      <td colspan="2">
			         <b><font size="+1">Grand Totals</font></b>:<br />
			      </td>
			    </tr>
			    <tr>
			      <td colspan="2" align="right">
			         Subtotal: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['subtotal']);?>
<br />
			         <?php if ($_smarty_tpl->tpl_vars['totals']->value['gifttotal']!=0){?>
			            Gift Wrap Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['gifttotal'];?>
<br />
			         <?php }?>
			         <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totals']->value['totalordpromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value){
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
			          <?php if ($_smarty_tpl->tpl_vars['pro']->value['type']!='freeprod'){?>
			            Promo Discount:&nbsp;- <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pro']->value['deduction'];?>
<br />
			          <?php }else{ ?>
			            Free Product Discount (<?php echo $_smarty_tpl->tpl_vars['pro']->value['prod_name'];?>
):&nbsp; -<?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pro']->value['deduction'];?>
<br />
			          <?php }?>
			         <?php } ?>
			         <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totals']->value['totalordshippromo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value){
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
			            Shipping Discount:&nbsp;- <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pro']->value['deduction'];?>
<br />
			         <?php } ?>
			         Shipping Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['shiptotal'];?>
<br />
			         <?php if ($_smarty_tpl->tpl_vars['totals']->value['protective']!=0){?>
			            Protective Shipping Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['protective']);?>
<br />
			         <?php }?>
			         <?php if ($_smarty_tpl->tpl_vars['totals']->value['sgroupadd']!=0){?>
			            Additional Flat Shipping Rate: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['sgroupadd'];?>
<br />
			         <?php }?>
			         <?php if ($_smarty_tpl->tpl_vars['totals']->value['shipserviceadd']!=0){?>
			            Shipping Adjustment: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo $_smarty_tpl->tpl_vars['totals']->value['shipserviceadd'];?>
<br />
			         <?php }?>
			         Tax Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['taxtotal']);?>
<br />
			         <strong>Grand Total: <?php echo $_smarty_tpl->tpl_vars['currency_type']->value;?>
<?php echo smarty_modifier_commify($_smarty_tpl->tpl_vars['totals']->value['grandtotal']);?>
</strong><br />
			       </td>
			     </tr>
			     <?php if ($_smarty_tpl->tpl_vars['print_custom_detail']->value=='y'){?>
			        <tr>
			          <td colspan="2">
			            &nbsp;
			          </td>
			        </tr>
			        <?php echo $_smarty_tpl->tpl_vars['custom_detail']->value;?>

			     <?php }?>
			     <?php if ($_smarty_tpl->tpl_vars['print_gift_certificates']->value=='y'){?>
			        <tr>
			          <td colspan="2">

			          </td>
			        </tr>
			        <?php echo $_smarty_tpl->tpl_vars['gift_certificates']->value;?>

			     <?php }?>
			     <?php if ($_smarty_tpl->tpl_vars['has_ed']->value=='y'){?>
			       <tr>
			         <td colspan="2">
			           &nbsp;
			         </td>
			       </tr>
			       <tr bgcolor="#e4cdf3">
			         <td colspan="2">
			           <b><font size="+1">Electronic Products</font></b>:<br />
			         </td>
			       </tr>
			       <tr>
			         <td colspan="2">
			           Your electronic products are now available for download. Please visit the <a href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/electronic_delivery_login">Electronic Delivery</a> section of the site and enter the order id, billing zip code and email address for this order. Alternately, you can access your downloads in the <a href="http://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/member_login">Member</a> section.
			         </td>
			       </tr>
			     <?php }?>
			     <?php if ($_smarty_tpl->getConfigVariable('confirmation_email_disclaimer')!=''){?>
			        <tr>
			          <td colspan="2">
			             &nbsp;
			          </td>
			        </tr>
			        <tr>
			          <td colspan="2">
			             &nbsp;
			          </td>
			        </tr>
			        <tr>
			          <td colspan="2" align="center">
			             <span style="font-size:12px;"><?php echo $_smarty_tpl->getConfigVariable('confirmation_email_disclaimer');?>
</span>
			          </td>
			        </tr>
			      <?php }?>
			    </table>
			    <?php echo $_smarty_tpl->tpl_vars['custf']->value;?>

				<br /><br />
		</td>
	</tr>

	<tr id="merchSection">
		<td valign="top" align="center">
		
                    <a href="http://www.vosgeschocolate.com/category/Vosges-Haut-Chocolat-Holiday-Christmas-Gifts?utm_campaign=Order%20Confirmation%20Email&utm_medium=Bottom%20Banner&utm_source=Free%20Shipping%20Credit"><img src="http://www.vosgeschocolate.com/images/auto-email-banners/2012Auto-Vosges-Chocolate-Holiday-Gifts-Free-Shipping.jpg" style="border:none;margin-bottom:10px;width:520px;height:89px;" /></a><br />




		</td>
	</tr>

	<tr id="emailFooter" style="font-family:arial,helvetica,sans-serif;">
		<td valign="top">
			<img width="550" height="1" style="margin:10px 0 5px 0;" src="http://vosgeschocolate.com/images/gray_line.gif">
			<table width="100%" border="0">
				<tr height="25" valign="top">
					<td width="65%" align="left">
						<table height="30" style="font-size:12px;">
							<tr>
								<td><a href="http://www.vosgeschocolate.com/boutiques?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Boutiques" style="text-decoration:none;color:#38095a;">Vosges Boutiques</a> | </td>
								<td><a href="http://www.vosgeschocolate.com/recipes?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Recipes" style="text-decoration:none;color:#38095a;">Recipes</a> | </td>
								<td><a href="http://www.vosgeschocolate.com/events?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Events" style="text-decoration:none;color:#38095a;">Events</a> | </td>
								<td><a href="http://www.vosgeschocolate.com/newsletter?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Newsletter" style="text-decoration:none;color:#38095a;">Email Signup</a></td>
							</tr>
						</table>
					</td>
					<td width="35%" align="right">
						<table height="30">
							<tr>
								<td><span style="margin-top:2px;font-size:12px;vertical-align:top;zoom:1;">Connect with us:</span></td>
								<td><a href="http://www.twitter.com/vosges?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Twitter" title="Vosges Twitter"><img src="http://www.vosgeschocolate.com/images/ico-social-twitter.png" style="border:0;"></a></td>
								<td><a href="http://www.facebook.com/VosgesChocolate?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=Facebook" title="Vosges Facebook"><img src="http://www.vosgeschocolate.com/images/ico-social-fb.png" style="border:0;"></a></td>
								<td><a href="http://www.peaceloveandchocolate.com?utm_campaign=Order%20Confirmation%20Email%202&utm_medium=Footer&utm_source=KatrinasBlog" title="Katrina's Blog"><img src="http://www.vosgeschocolate.com/images/ico-social-kblog.png" style="border:0;"></a></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p align="justify" style="margin-bottom:20px;font-size:11px;color:#999;">
							
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>
<!-- end confirmation template -->

</body>
</html><?php }} ?>