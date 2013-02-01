{*
{php}
    $cart = $this->get_template_vars('cart');
  
    $sku = '';
    $units = '';
    $amounts = '';
    foreach ($cart as $item) {
       $sku .= ';' . $item[sku];
       $units .= ';' . $item[qty];
       $amounts .= ';' . $item[price];
    }
    $sku = substr($sku,1);
    $units = substr($units,1);
    $amounts = substr($amounts,1);
    $_SESSION['sku'] = $sku;
    $_SESSION['units'] = $units;
    $_SESSION['amounts'] = $amounts;
{/php}


{get_file_content file="/downloads/skus_to_state.csv" assign="file"}
{assign var="problemSkus" value=""}
*}
{foreach from=$smarty.session.cart item=prod key=key}
  {foreach from=$file item=l key=n}
    {assign var=i value="\t"|explode:$l|trim|regex_replace:"/(\'|\"| )/":""}
    {assign var=test value=$i.0}
    {if $prod.sku == $i.0}
      {if $problemSkus == ''}
        {assign var="problemSkus" value=$prod.sku|cat:"|"|cat:$i.1}
      {else}
        {assign var="problemSkus" value=$problemSkus|cat:$prod.sku|cat:"|"|cat:$i.1}
      {/if}
      {if $i.2 == 'x'}
        {assign var="problemSkus" value=$problemSkus|cat:",X"}
      {/if}
      {assign var="problemSkus" value=$problemSkus|cat:"::"}
    {/if}
  {/foreach}
{/foreach}
{include file="_top.tpl"}

<div class="checkout-inner-page">

<div class="checkout-table-wrapper">
<div {if $smarty.session.mobile != 'true'}style="padding:8px 0 8px 8px;"{/if}>

<div data-role="fieldcontain">
  <fieldset class="ui-grid-a top-buttons">
   <div class="ui-block-a"><h1 style="white-space:nowrap;">Review & Place Order</h1></div>
   <div class="ui-block-b">
    <input type="image" id="checkout_confirmation_btn" name="submit_continue" value="Submit Order" tabindex="1" class="submit btn-checkout" src="http://www.vosgeschocolate.com/images/submit_Order.gif" data-mini="true"/>
   </div>
  </fieldset>
</div>

<br class="clear">

{if $has_account == 'y' && $is_member == 'n'}
 <div>We noticed that you have not logged in yet. Please <a href="/member_login">login</a>.</div><br />
{/if}

{if $change_shipper != '' || $shipservicemsg != '' || $messages != ''}
<div style="border:1px solid red; margin:5px auto 0 auto; padding:4px; text-align:center; width:auto;">

{if $change_shipper != ''}  <p><b>{if $change_shipper|strpos:"Standard" !== false}{$change_shipper|replace:"<br />":" "} for no additional cost to you.{else}{$change_shipper}{/if}</b></p> {/if}

{if $change_tax == 'y'}  <p><b>Note: Your tax total has changed.</b></p> {/if}

{if $shipservicemsg != ''} <p>{$shipservicemsg}</b></p>{/if}

{if $messages != ''} 
<p><b>Note:</b><br />
  {foreach from=$messages item=msg}
    <b>&#149;&nbsp;{$msg}</b><br />
  {/foreach}
 </p>
{/if}

</div>
{/if}

</div>


<form method="post" action="index.php" id="confirmation_form"> 
<input type="hidden" name="action" value="CheckoutConfirmation" />
<input type="hidden" name="confirmation_text" value="{#confirmation_email_text#|replace:'"':'&quot;'}" />
<input type="hidden" name="confirmation_special" value="{#confirmation_email_special#|replace:'"':'&quot;'}" />

<table width="100%" border="0" cellspacing="0" cellpadding="3" align="center">
<tr style="vertical-align:top;">
<td style="border-bottom:0px solid #ddd;padding-bottom:5px;">
<table width="100%">
<tr style="vertical-align:top;">
 <td width="100%">
<div class="info-box first">
<table width="100%">

 {if $settings.amazon_checkout != 'y' || $smarty.session.amazon_id == ''}
  <tr>
    <th> 
      <div class="cart-section-header"><h4>Billing Information</h4></div>
    </th>
  </tr>
  <tr>
    <td class="normaltext">
      {if $info.billing.payment_method == 'paypal' && ($settings.paypal_skip == 'y' || $settings.paypal_express_checkout == 'y')}
         <p>PayPal Order</p>
         <p>{$info.billing.email}</p>
      {else}
      <p>{$info.billing.first_name} {$info.billing.last_name}</p>
{if $info.billing.company != ''}

      {$info.billing.company}<br />

{/if}
{if $info.billing.title != ''}

      <p>{$info.billing.title}</p>

{/if}

      <p>{$info.billing.billing_address1}</p>

{if $info.billing.billing_address2 != ''}

      <p>{$info.billing.billing_address2}</p>

{/if}

      <p>{$info.billing.billing_city}, {$info.billing.billing_state}  {$info.billing.billing_zip}</p>
      <p>{$info.billing.billing_country}</p>
      <p>{$info.billing.email}</p>
      <p>{$info.billing.phone}</p>
      {/if}
     {*{if $settings.paypal_express_checkout != 'y'}<input type="submit" name="submit_billing" value="Edit" class="edit_btn" />{/if}*}
       {if $settings.paypal_express_checkout != 'y'}<input type="image" name="submit_billing" value="Edit" class="submit btn-checkout" src="http://www.vosgeschocolate.com/images/edit.gif" />{/if}
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
      {assign var="meth" value=$info.billing.payment_method}
      {if $gift_certificates.codes|@count > 0}
        {foreach from=$gift_certificates.codes item=code}
          <p>Payment Method:&nbsp;Gift Card</p>
          <p>Code:&nbsp;{$code.code}</p>
          <p>Amount Used:&nbsp;{$currency_type}{$code.amount|commify}</p>
          <p>Remaining Balance:&nbsp;{$currency_type}{$code.remaining|commify}</p>
        {/foreach}
      {/if}
      {if $meth != 'giftcertificate'} 
        <p>Payment Method:&nbsp;{$payment_methods.$meth}</p>
      {/if}
      {if $meth == 'creditcard'}
        <p>{$info.billing.ccname}</p>
        <p>{$info.billing.cctype}</p>
        <p>{$info.billing.last_four} (Last 4 digits)</p>
      {elseif $meth == 'purchaseorder'}
        <p>Gift Card:&nbsp;{$info.billing.purchase_order}</p>
      {elseif $meth == 'echeck'}
        <p>{$info.billing.last_four} (Last 4 digits)</p>
      {/if}
      {if $gift_certificates.codes|@count > 0 && $meth != 'giftcertificate'}
        {math equation="(x-y)+z" x=$gift_certificates.totals.total y=$gift_certificates.totals.gctotal z=$gift_certificates.totals.remaining assign=difference}
        <p>Amount:&nbsp;{$currency_type}{$difference|string_format:"%.2f"}</p>
      {/if}
      {if $settings.paypal_express_checkout != 'y'}<input type="image" name="submit_payment" value="Edit" class="submit" src="http://www.vosgeschocolate.com/images/edit.gif" />{/if}
    </td>
  </tr>
 {/if}
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
           {if $someHaveIssues == ''}
      <p><b>Subtotal:</b> {$currency_type}{$order.subtotal|commify}</p>
   {if $order.gifttotal != 0}
      <p><b>Giftwrap Total:</b> {$currency_type}{$order.gifttotal|commify}</p>
   {/if}
      {foreach from=$order.totalordpromo item=promo}
          {if $promo.type == '%'}
            <p><b>Promo Discount: </b> -{$currency_type}{$promo.deduction}</p>
          {elseif $promo.type == '$'}
            <p><b>Promo Discount: </b>-{$currency_type}{$promo.deduction}</p>
          {elseif $promo.type == 'freeprod'}
            <p><b>Free Product Discount ({$promo.prod_name}): </b>-{$currency_type}{$promo.deduction}</p>
          {/if}
       {/foreach}
      {foreach from=$order.totalordshippromo item=promo}
          {if $promo.type == '%'}
            <p><b>Shipping Discount: </b> -{$currency_type}{$promo.deduction}</p>
          {elseif $promo.type == '$'}
            <p><b>Shipping Discount: </b>-{$currency_type}{$promo.deduction}</p>
          {/if}
       {/foreach}
      <p><b>Shipping Total:</b> {$currency_type}{$order.shiptotal|commify}</p>

{if $order.sgroupadd != 0}
      <p><b>Cooling Materials:</b> {$currency_type}{$order.sgroupadd}</p>
{/if}
{if $order.shipserviceadd != 0}
      <p><b>Shipping Adjustment:</b> {$currency_type}{$order.shipserviceadd}</p>
{/if}

      <p><b>Tax Total:</b> {$currency_type}{$order.taxtotal|commify}</p>
      <p class="larger black"><b>Grand Total:</b> {$currency_type}{$order.grandtotal|commify}</p>
           {else}
            <p><b>Please correct the above issue(s) before continuing.</b></p>
           {/if}
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

 {counter start=0 assign=num}
  {section name=ship loop=$ship_num}
  <tr style="vertical-align:top;">
    <th colspan="2">
      <div class="cart-section-header"><h4>Shipping Information for {$info.shipping.$num.s_firstname}</h4></div>
    </th>
  </tr>

<tr style="vertical-align:top;">
<td width="100%">

<div class="info-box first">
<table style="width:100%;">

  <tr style="vertical-align:top;">
    <td>
      <p>{$info.shipping.$num.s_firstname} {$info.shipping.$num.s_lastname}</p>
      {if $info.shipping.$num.s_title != ''}<p>{$info.shipping.$num.s_title}</p>{/if}
      {if $info.shipping.$num.s_company != ''}<p>{$info.shipping.$num.s_company}</p>{/if}
      {if $settings.amazon_checkout != 'y' || $smarty.session.amazon_id == ''}
      <p>{$info.shipping.$num.s_address1}</p>
        {if $info.shipping.$num.s_address2 != ''}
          <p>{$info.shipping.$num.s_address2}</p>
        {/if}
      {/if}

      <p>{$info.shipping.$num.s_city}, {$info.shipping.$num.s_state} 
      {$info.shipping.$num.s_zip}
      <p>{$info.shipping.$num.s_country}</p>
      {if $info.shipping.$num.s_phone != ''}
        <p>{$info.shipping.$num.s_phone}</p>
      {/if}
      {if $info.shipping.$num.s_email != ''}
        <p>{$info.shipping.$num.s_email}</p>
      {/if}

      {if $settings.amazon_checkout == 'y' && isset($smarty.session.amazon_id) && $info.billing.payment_method == 'amazon'}
        <p>Payment Method: Amazon Payments</p>
      {/if}

      <p>Requested Ship Date: {$info.shipping.$num.s_shipon}</p>
      {if $settings.ups_time_in_transit == 'y' && isset($transit_time.$num.arrival_date)}
        <p>Transit Time: {$transit_time.$num.transit_days} Business Day{if $transit_time.$num.transit_days > 1}s{/if}<br />
               Estimated Arrival: {$transit_time.$num.arrival_date|date_format:"%B %e"}
       </p>
      {/if}

    {if $info.shipping.$num.gift_message != ''}

      <p>Gift Message: {$info.shipping.$num.gift_message}</p>

    {/if}
    {if $info.shipping.$num.s_comments != ''}

      <p>Comments: {$info.shipping.$num.s_comments}</p>
  
    {/if}
 {if $settings.paypal_express_checkout != 'y'}<input type="image" name="submit_shipping" value="Edit" class="submit" src="http://www.vosgeschocolate.com/images/edit.gif" />{/if}

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

      {assign var="someHaveIssues" value=""}
      {foreach from=$info.shipping.$num.prods item=prod}
        {assign var="hasIssue" value=""}
        {if $problemSkus != ''}
          {assign var="i" value="::"|explode:$problemSkus}
          {foreach from=$i item=t key=k}
            {assign var="s" value="|"|explode:$t}
            {assign var="t_sku" value=$s.0}
            {assign var="t_states" value=$s.1}
            {assign var="t_states" value=","|explode:$t_states}
            {if $t_sku == $prod.sku}
              {if in_array($info.shipping.$num.s_state,$t_states)}
                {assign var="someHaveIssues" value="y"}
                {assign var="hasIssue" value="<b>The item above cannot ship to "|cat:$info.shipping.$num.s_state}
                {assign var="hasIssue" value=$hasIssue|cat:". Please <a href=\"/viewcart\">remove this item</a> before continuing.</b>"}
              {elseif $info.shipping.$num.s_country <> "United States"}
                {assign var="hasIssue" value="<b>The item above cannot ship to "|cat:$info.shipping.$num.s_country}
                {assign var="hasIssue" value=$hasIssue|cat:". Please <a href=\"/viewcart\">remove this item</a> before continuing.</b>"}
              {/if}
            {/if}
          {/foreach}
        {/if}

        {if $prod.build_prod_id == ''}
        <tr>
          <td align="center" class="normaltext">
            {if $hasIssue != ''}<s>{/if}{$prod.qty}{if $hasIssue != ''}</s>{/if}
          </td>
          <td align="center" class="normaltext">
            {if $hasIssue != ''}<s>{/if}{$prod.sku}{if $hasIssue != ''}</s>{/if}
          </td>
          <td class="normaltext">
          <table width="100%" cellspacing="0" cellpadding="0">
           <tr>
           {*if $prod.web_image != ''}<td width="60"><img src="{$prod.web_image|img_prefix}" width="50" alt="{$prod.name|replace:"& ":"&amp; "}" class="bordered" /></td>{/if*}
            <td align="left" class="normaltext">
            {if $hasIssue != ''}<s>{/if}{$prod.name}<br />
        {foreach from=$prod.gifts item=gift}
          {if $gift != ''}
           * {$gift}<br />
          {/if}
        {/foreach}
        {if $prod.note != ''}
         Note: {$prod.note}<br />
        {/if}
        {if $prod.att_list != ''}
         {$prod.att_list}<br />
        {/if}{if $hasIssue != ''}</s>{/if}
        {if $prod.custom_form != ''}
          {if $prod.custom_form|@count > 0 && $prod.name =='e-Gift Card'}
             {foreach from=$prod.custom_form key=i item=glist}
                <br /><strong>{$i}:</strong> {$glist}
             {/foreach}
          {/if}
{* <a href="javascript:void(0);" onclick="javascript:window.open('/custom_form_info/{$prod.cart_id}','popup','width=400,height=500,statusbar=no,toolbars=no,location=no,scrollbars=yes');">view details &raquo;</a> *}
          <br />
        {/if}
           </td></tr>
          </table>
          </td>
          <td align="right" class="normaltext">
            {if $hasIssue != ''}<s>{/if}{if $prod.build_parent != 'y'}
              {$currency_type}{$prod.price|commify}
            {else}
              &nbsp;
            {/if}{if $hasIssue != ''}</s>{/if}
          </td>
        </tr>

        {if $prod.build_parent == 'y'}
          {foreach from=$info.shipping.$num.prods item=pr}
            {if $pr.build_prod_id != '' && $pr.build_link == $prod.build_link}
              <tr valign="top">
                <td align="center" class="normaltext">
                 {if $hasIssue != ''}<s>{/if} {$pr.qty}{if $hasIssue != ''}</s>{/if}
                </td>
                <td align="center" class="normaltext">
                  &nbsp;
                </td>
                <td class="normaltext">
                  {if $hasIssue != ''}<s>{/if}&nbsp;&nbsp;&nbsp;{$pr.name}<br />
                  {foreach from=$prod.gifts item=gift}
                    {if $gift != ''}
                     &nbsp;&nbsp;&nbsp;* {$gift}<br />
                    {/if}
                  {/foreach}
                  {if $pr.note != ''}
                    &nbsp;&nbsp;&nbsp;Note: {$pr.note}<br />
                  {/if}
                  {if $pr.att_list != ''}
                    {$pr.att_list|replace:"<br />":"<br />&nbsp;&nbsp;&nbsp;&nbsp;"}
                  {/if}{if $hasIssue != ''}</s>{/if}
                  {if $pr.custom_form != ''}
                    {if $pr.custom_form|@count > 0 && $pr.name =='e-Gift Card'}
                       {foreach from=$pr.custom_form key=i item=glist}
                          <br /><strong>{$i}:</strong> {$glist}
                       {/foreach}
                    {/if}
                    {* <a href="javascript:void(0);" onclick="javascript:window.open('/custom_form_info/{$prod.cart_id}','popup','width=400,height=500,statusbar=no,toolbars=no,location=no,scrollbars=yes');">view details &raquo;</a> *}
                  {/if}
                </td>
                <td align="right" class="normaltext">
                  {if $hasIssue != ''}<s>{/if}{$currency_type}{$pr.price|commify}{if $hasIssue != ''}</s>{/if}
                </td>
              </tr>
            {/if}
          {/foreach}
        {/if}
        {if $prod.gift_wrap == 'y' && $prod.gift_wrap_info != ''}
           <tr valign="top">
              <td align="center" class="normaltext">
                 {$prod.qty}
              </td>
              <td align="center" class="normaltext">
                {$prod.gift_wrap_info.gift_wrap_sku}
              </td>
              <td class="normaltext">
                {$prod.gift_wrap_info.gift_wrap_name}
              </td>
              <td align="right" class="normaltext">
                {$currency_type}{$prod.gift_wrap_info.total|commify}
              </td>
            </tr>
          {/if}
        {/if}
       {if $hasIssue != ''}
         {cycle values="#f2ecdb,#ebe1a5" assign=bgcol}
         <tr bgcolor="{$bgcol}" class="small_darkred">
           <td colspan="2">&nbsp;</td>
           <td align="left" colspan="2">{$hasIssue}</td>
         </tr>
       {/if}
<tr><td colspan="4" style="border-bottom:1px solid #CCC; padding:0;"></td></tr>
      {/foreach}

        <tr>
          <td align="right" colspan="4" class="normaltext order-totals-bottom">
    {if $someHaveIssues == ''}
            <p><b>Subtotal:</b> {$currency_type}{$order.totals.$num.subtotal|commify}</p>
        {if $order.totals.$num.giftwrap != 0}
            <p>Giftwrap:</b> {$currency_type}{$order.totals.$num.giftwrap|commify}</p>
        {/if}
            <p><b>Shipping Rate:</b> {$currency_type}{$order.totals.$num.shipping|commify}</p>

        {if $order.totals.$num.sgroupadd != 0}
            <p><b>{*Additional Flat Shipping Rate:*} Cooling Materials: </b> {$curreny_type}{$order.totals.$num.sgroupadd|commify}</p>
        {/if}
        {foreach from=$order.totals.$num.totalpromo item=promo}
           {if $promo.type == '%'}
               <p><b>Promo Discount: </b>-{$currency_type}{$promo.deduction}</p>
           {elseif $promo.type == '$'}
               <p><b>Promo Discount: </b>-{$currency_type}{$promo.deduction}</p>
           {/if}
        {/foreach}
        {foreach from=$order.totals.$num.shippromo item=promo}
           {if $promo.type == '%'}
               <p><b>Shipping Promo: </b>-{$currency_type}{$promo.deduction}</p>
           {elseif $promo.type == '$'}
               <p><b>Shipping Promo: </b>-{$currency_type}{$promo.deduction}</p>
           {/if}
        {/foreach}
            <p><b>Total:</b> {$currency_type}{$order.totals.$num.total|commify}</p>
           {else}
            <p><b>Please correct the above issue(s) before continuing.</b></p>
           {/if}
          </td>
        </tr>
      </table>
    </td>
  </tr>
  {counter assign=num}
{/section}

</table>
</div>

</td>
</tr>

{*
  <tr>
    <th>
      <div class="cart-section-header"><h4>Complete Order Total</h4></div>
    </th>
  </tr>
  <tr>
    <td align="right" class="normaltext order-totals-bottom">
           {if $someHaveIssues == ''}
      <b>Subtotal:</b> {$currency_type}{$order.subtotal|commify}<br />
   {if $order.gifttotal != 0}
      <b>Giftwrap Total:</b> {$currency_type}{$order.gifttotal|commify}<br />
   {/if}
      {foreach from=$order.totalordpromo item=promo}
          {if $promo.type == '%'}
            <b>Promo Discount: </b> -{$currency_type}{$promo.deduction}<br />
          {elseif $promo.type == '$'}
            <b>Promo Discount: </b>-{$currency_type}{$promo.deduction}<br />
          {elseif $promo.type == 'freeprod'}
            <b>Free Product Discount ({$promo.prod_name}): </b>-{$currency_type}{$promo.deduction}<br />
          {/if}
       {/foreach}
      {foreach from=$order.totalordshippromo item=promo}
          {if $promo.type == '%'}
            <b>Shipping Discount: </b> -{$currency_type}{$promo.deduction}<br />
          {elseif $promo.type == '$'}
            <b>Shipping Discount: </b>-{$currency_type}{$promo.deduction}<br />
          {/if}
       {/foreach}
      <b>Shipping Total:</b> {$currency_type}{$order.shiptotal|commify}<br />

{if $order.sgroupadd != 0}
      <b>Cooling Materials:</b> {$currency_type}{$order.sgroupadd}<br />
{/if}
{if $order.shipserviceadd != 0}
      <b>Shipping Adjustment:</b> {$currency_type}{$order.shipserviceadd}<br />
{/if}

      <b>Tax Total:</b> {$currency_type}{$order.taxtotal|commify}<br />
      <b>Grand Total:</b> {$currency_type}{$order.grandtotal|commify}
           {else}
            <b>Please correct the above issue(s) before continuing.</b>
           {/if}
    </td>
  </tr>
*}

  <tr>
    <td align="right" >
     <p class="largest black" ><b>Grand Total:</b> {$currency_type}{$order.grandtotal|commify}</p>

{if $info.billing.payment_method == 'onfile' || $info.billing.payment_method == 'creditcard' || $info.billing.payment_method == 'giftcertificate'}
 {if $info.billing.payment_method == 'onfile'}
   {assign var=mypayment_method value="Credit Card On File"}
 {elseif $info.billing.payment_method == 'creditcard' }
   {assign var=mypayment_method value="Credit Card"}
 {elseif $info.billing.payment_method == 'giftcertificate'}
   {assign var=mypayment_method value="Gift Certificat"}
 {/if}

  <p style="color:#777;font-size:12px;"><em>Your form of payment <strong>{$mypayment_method}</strong>, will be charged at the time of order.</em></p>
{/if}
<br>
      {*<input type="submit" name="submit_edit" value="Edit" class="addtocart_btn btnstyle1" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*}
      <input type="hidden" name="to_email" value="{#form_orders_to#}" />
      <input type="hidden" name="from_email" value="{#form_orders_from#}" />
      <input type="hidden" name="paypal_express_checkout" value="{$settings.paypal_express_checkout}" />
<fieldset class="ui-grid-a">
	<div class="ui-block-a"></div>
	<div class="ui-block-b">
      {if $hasIssue == ''}<input type="image" name="submit_continue" value="Submit Order" tabindex="1" class="submit" src="http://www.vosgeschocolate.com/images/submit_Order.gif" data-mini="true"/>{/if}
	</div>
</fieldset>
    </td>
  </tr>
</table>
</form>

<!--checkout-table-wrapper--></div>
<!--checkout-inner-page--></div>
{include file="_bottom.tpl"}