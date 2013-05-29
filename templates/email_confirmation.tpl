{*config_load file="store.conf" scope="global"*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
           <script type="text/javascript">
    	js = {$js};
    	shipping = js.info.shipping;
    	billing = js.info.billing;
    	gift_certificates = js.gift_certificates;
    	order = js.order;
    	totals = js.totals;
    </script>
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
			  {if #confirmation_email_special# != ''}
			  <tr>
			    <td colspan="2">
			      {#confirmation_email_special#}<br /><br />
			    </td>
			  </tr>
			  {/if}
			  <tr>
			    <td colspan="2">
			      {if #confirmation_email_text# != ''}
			        {assign var=confirm value=#confirmation_email_text#|replace:"[[first_name]]":$billing.first_name}   
			        {assign var=confirm value=$confirm|replace:"[[last_name]]":$billing.last_name}   
			        {assign var=confirm value=$confirm|replace:"[[co_name]]":#store_name#}
			        {$confirm}   
			      {else}
			         Thank you, {$billing.first_name} {$billing.last_name}, for ordering from Vosges Haut-Chocolat.  Your order has been received. Below you will find details about your current order.  You may wish to print and save this confirmation for possible future reference.
			      {/if}
			      </td>
			    </tr>
			    {* if there is an electronic download product put a note here *}
			    {if $has_ed == 'y'}
			    <tr>
			      <td colspan="2">
			        <b>Please see below for information regarding your electronic products.</b>
			      </td>
			    </tr>
			    {/if}
			    <tr>
			      <td colspan="2">
			        <br />
			        <b><font size="+1">Order ID: {$order_id}</font></b>
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
			        {$billing.first_name} {$billing.last_name}
			        <br />
			           {if $billing.company != ''}
			             {$billing.company}<br />
			           {/if}
			           {if $billing.title != ''}
			             {$billing.title}<br />
			           {/if}
			           {$billing.billing_address1}<br />
			           {if $billing.billing_address2 != ''}
			             {$billing.billing_address2}<br />
			           {/if}
			           {$billing.billing_city}, {$billing.billing_state} {$billing.billing_zip}
			           <br />{$billing.billing_country}<br /><br />
			         </td>
			         <td valign="top">
			           Email: {$billing.email}<br />
			           Phone: {$billing.phone}<br /><br />
			         </td>
			       </tr>
			       <tr bgcolor="#e4cdf3">
			         <td colspan="2">
			           <b><font size="+1">Payment Information</font></b>
			         </td>
			       </tr>
			       <tr>
			         <td colspan="2">
			           {assign var=meth value=$billing.payment_method}
			      {if $gift_certificates.codes|@count > 0}
			        {foreach from=$gift_certificates.codes item=code}
			          Payment Method: Gift Card<br />
			          Code: XXXXXXXXXXXX{$code.code|substr:'-4'}<br />
			          Amount Used: {$currency_type}{$code.amount|commify}<br />
			          Remaining Balance: {$currency_type}{$code.remaining|commify}<br /><br />
			        {/foreach}
			      {/if}
			      {if $meth != 'giftcertificate' && $meth != 'purchaseorder'  }
			        Payment Method: {$payment_methods.$meth}<br />
			      {/if}
			           {if $billing.payment_method == 'creditcard'}
			             Name on Card: {$billing.ccname}<br />
			             Card Type: {$billing.cctype}<br />
			             Last Four Digits: {$billing.last_four}<br />
			           {elseif $billing.payment_method == 'purchaseorder'}
			             Gift Card: {$billing.purchase_order}<br />
			           {/if}
			           {if $gift_certificates.codes|@count > 0 && $meth != 'giftcertificate'}
			            {math equation="(x-y)+z" x=$gift_certificates.totals.total y=$gift_certificates.totals.gctotal z=$gift_certificates.totals.remaining assign=difference}
			             Amount: {$currency_type}{$difference|string_format:"%.2f"}<br />
			            {/if}
			         </td>
			       </tr>
			       <tr bgcolor="#e4cdf3">
			         <td colspan="2">
			           <b><font size="+1">Shipping Information</font></b>
			         </td>
			       </tr>
			       {assign var="custom_detail" value="<tr bgcolor=\"#e4cdf3\"><td colspan=\"2\"><b><font size=\"+1\">Custom Product Information</font></b></td></tr>"}
			       {assign var="print_custom_detail" value="n"}
			       {assign var="gift_certificates" value="<tr bgcolor=\"#e4cdf3\"><td colspan=\"2\"><b><font size=\"+1\" >Gift Card Information</font></b></td></tr>"}
			       {assign var="print_gift_certificates" value="n"}
			       {foreach from=$shipping key=num item=ship}
			          {if $ship.prods|@count > 0}
			             <tr>
			               <td colspan="2">
			                  {math equation="x+y" x=$num y=1 assign=recp_num}
			                  <b>Recipient {$recp_num}</b>
			                </td>
			              </tr>
			              <tr>
			                <td valign="top">
			                  {$ship.s_firstname} {$ship.s_lastname}<br />
			                  {$ship.s_title}<br />
			                  {$ship.s_company}<br />
			                  {$ship.s_address1}<br />
			                  {if $ship.s_address2 != ''}
			                    {$ship.s_address2}<br />
			                  {/if}
			                  {$ship.s_city}, {$ship.s_state} {$ship.s_zip}<br />
			                  {$ship.s_country}<br />
			                  {if $ship.s_phone != ''}
			                    {$ship.s_phone}<br />
			                  {/if}
			                </td>
			              <td valign="top">
			                Comments: {$ship.s_comments}<br />
			                {if $ship.gift_message != ''}
			                  Gift Message: {$ship.gift_message}<br />
			                {/if} 
			                {if $ship.s_shipon == $smarty.now|date_format:"%Y-%m-%d" || $ship.s_shipon == 'As soon as possible'}
			                   {assign var=ship_on value="As soon as possible"}
			                {else}
			                   {assign var=ship_on value=$ship.s_shipon}
			                {/if}
			                Requested Ship Date: {$ship_on}<br />
			                Shipping Method: {if $ship.s_method=='Standard 3-10 days w/Cooling Materials'}Summer Express 2 Days{else}{$ship.s_method}{/if}
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
			                  {foreach from=$ship.prods item=prods}
			                    <tr>
			                      <td valign="top">
			                        {$prods.qty}
			                      </td>
			                      <td valign="top">
			                       {if $prods.att_sku == ''}{$prods.sku}{else}{$prods.att_sku}{/if}
			                      </td>
			                      <td valign="top">
			                        {$prods.name}
			                        {if $prods.gifts|@count > 0}
			                          {foreach from=$prods.gifts key=i item=glist}
			                            {if $glist != ''}
			                               <br />* {$glist}
			                            {/if}
			                          {/foreach}
			                        {/if}
			                          {if $prods.note != ''}
			                          <br />Note: {$prods.note}
			                        {/if}
			                        {if $prods.att_list != ''}
			                           {$prods.att_list}
			                        {/if}
			                        {if $prods.gift_certificate != 'n' && $prods.gift_certificate|@count > 0}
			                        {foreach from=$prods.gift_certificate item=gc}
			                        <br>
			                        <strong>Code</strong>: {$gc.code}<br>
			                        <strong>Expiration</strong>: {$gc.expiration}<br>
			                        <strong>Value</strong>: {$gc.value}<br>
			                        {if $prods.custom_form != ''}
			                        {foreach from=$prods.custom_form key=form_field item=form_value}
			                        <strong>{$form_field}</strong>: {$form_value}<br>
			                        {/foreach}
			                        {/if}
			                        {/foreach}
			                        <br>
			                        {else}
				                        {if $prods.custom_form != ''}
				                        <br>
				                           {foreach from=$prods.custom_form key=field item=label}
				                             <strong>{$field}</strong>:{$label}<br>
				                           {/foreach}
				                        {/if}
				                        <br>
			                        {/if}


{*********************************************************************************************************			                        
{if $prods.gift_certificate != 'n' && $prods.gift_certificate|@count > 0}
  <br />- See "Gift Card Information" Section for Details
  {assign var=print_gift_certificates value="y"}
  {assign var=gift_certificates value="$gift_certificates<tr><td colspan=\"2\"><b>Recipient $recp_num: "|cat:$prods.name|cat:" </b></td></tr>"}
  {foreach from=$prods.gift_certificate item=gc}
    {if $gc.expiration != "None"}
      {assign var=exp value=$gc.expiration|date_format:"%D"}
    {else}
      {assign var=exp value="None"}
    {/if}
    {assign var=gift_certificates value="$gift_certificates<tr><td colspan=\"2\">Redemption Code: "}
    {if $gc.recipient != '' && $gift_certificate_delay=='y'}
      {assign var=gift_certificates value=$gift_certificates|cat:"will be emailed to "|cat:$gc.recipient|cat:" once the order has been validated"}
    {elseif $gc.recipient != ''}
      {assign var=gift_certificates value=$gift_certificates|cat:"emailed to "|cat:$gc.recipient}
    {elseif $gift_certificate_delay == 'y'}
      {assign var=gift_certificates value=$gift_certificates|cat:"will be emailed to you once the order has been validated"}
    {elseif $prods.name =="Gift Card"}
      {assign var=gift_certificates value=$gift_certificates|cat:"will be mailed to the recipient once the order has been validated"}
    {else}
       {assign var=gift_certificates value=$gift_certificates|cat:$gc.code}
     {/if}
     {assign var=gift_certificates value="$gift_certificates<br />Expiration Date: "|cat:$exp|cat:"</td></tr>"}
  {/foreach}
{/if}
 {if $prods.custom_form != ''}
    <br />- See "Custom Product Information" Section for Details
    {assign var="print_custom_detail" value="y"}
    {assign var=custom_detail value="$custom_detail<tr><td colspan=\"2\"><b>Recipient $recp_num: "|cat:$prods.name|cat:"</b></td></tr>"}
    {foreach from=$prods.custom_form key=field item=label}
      {assign var=custom_detail value="$custom_detail<tr><td><b>$field</b></td><td>$label</td></tr>"}
    {/foreach}
    {assign var=custom_detail value="$custom_detail<tr><td colspan=\"2\">&nbsp;</b></td></tr>"}

 {/if}
*********************************************************************************************************}
									<br>
			                       </td>
			                       <td valign="top">
			                         {$currency_type}{$prods.price|commify}
			                       </td>
			                     </tr>
			              {/foreach}
			              <tr>
			                <td colspan="4" align="right">
			                  <br />Subtotal: {$currency_type}{$totals.totals.$num.subtotal|commify}<br />
			                  {if $totals.totals.$num.giftwrap != 0}
			                    Gift Wrap: {$currency_type}{$totals.totals.$num.giftwrap}<br />
			                  {/if}
			                  Shipping Rate: {$currency_type}{$totals.totals.$num.shipping|commify}<br />
			                  {if $totals.totals.$num.protective != 0}
			                    Protective Shipping: {$currency_type}{$totals.totals.$num.protective}<br />
			                  {/if}
			                  {if $totals.totals.$num.sgroupadd != 0}
			                    Additional Flat Shipping Rate: {$currency_type}{$totals.totals.$num.sgroupadd}<br />
			                  {/if}
			                  {foreach from=$totals.totals.$num.shippromo item=pro}
			                    Shipping Promo:&nbsp;- {$currency_type}{$pro.deduction}<br />
			                  {/foreach}
			                  Total: {$currency_type}{$totals.totals.$num.total|commify}<br />
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
			      {/if}
			    {/foreach}
			    <tr bgcolor="#e4cdf3">
			      <td colspan="2">
			         <b><font size="+1">Grand Totals</font></b>:<br />
			      </td>
			    </tr>
			    <tr>
			      <td colspan="2" align="right">
			         Subtotal: {$currency_type}{$totals.subtotal|commify}<br />
			         {if $totals.gifttotal != 0}
			            Gift Wrap Total: {$currency_type}{$totals.gifttotal}<br />
			         {/if}
			         {foreach from=$totals.totalordpromo item=pro}
			          {if $pro.type != 'freeprod'}
			            Promo Discount:&nbsp;- {$currency_type}{$pro.deduction}<br />
			          {else}
			            Free Product Discount ({$pro.prod_name}):&nbsp; -{$currency_type}{$pro.deduction}<br />
			          {/if}
			         {/foreach}
			         {foreach from=$totals.totalordshippromo item=pro}
			            Shipping Discount:&nbsp;- {$currency_type}{$pro.deduction}<br />
			         {/foreach}
			         Shipping Total: {$currency_type}{$totals.shiptotal}<br />
			         {if $totals.protective != 0}
			            Protective Shipping Total: {$currency_type}{$totals.protective|commify}<br />
			         {/if}
			         {if $totals.sgroupadd != 0}
			            Additional Flat Shipping Rate: {$currency_type}{$totals.sgroupadd}<br />
			         {/if}
			         {if $totals.shipserviceadd != 0}
			            Shipping Adjustment: {$currency_type}{$totals.shipserviceadd}<br />
			         {/if}
			         Tax Total: {$currency_type}{$totals.taxtotal|commify}<br />
			         <strong>Grand Total: {$currency_type}{$totals.grandtotal|commify}</strong><br />
			       </td>
			     </tr>
			     {if $print_custom_detail == 'y'}
			        <tr>
			          <td colspan="2">
			            &nbsp;
			          </td>
			        </tr>
			        {$custom_detail}
			     {/if}
			     {if $print_gift_certificates == 'y'}
			        <tr>
			          <td colspan="2">

			          </td>
			        </tr>
			        {$gift_certificates}
			     {/if}
			     {if $has_ed == 'y'}
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
			           Your electronic products are now available for download. Please visit the <a href="http://{$url}/electronic_delivery_login">Electronic Delivery</a> section of the site and enter the order id, billing zip code and email address for this order. Alternately, you can access your downloads in the <a href="http://{$url}/member_login">Member</a> section.
			         </td>
			       </tr>
			     {/if}
			     {if #confirmation_email_disclaimer# != ''}
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
			             <span style="font-size:12px;">{#confirmation_email_disclaimer#}</span>
			          </td>
			        </tr>
			      {/if}
			    </table>
			    {$custf}
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
</html>