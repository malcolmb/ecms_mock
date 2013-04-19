{include file="_top.tpl"}
{*if isset($placed.order.id)}{php}
 
    /* Get the order vars*/
    $tpl_vars = $this->get_template_vars();
 
    /* Set a session var with just the order variables. */
    $_SESSION['test_order'] = $tpl_vars['placed'];
 
    /* Set a session var with all of the available variables. */
    $_SESSION['full_test'] = $tpl_vars;
 
    /* Serialize and then base64 encode the array so it's portable. Be aware that this is can create a very large string with no breaks
    or white space so it may take awhile to copy it to your clipboard and it will choke some editors *cough* Sublme Text 2 *cough*. If
    you are going to include it in your code I'd load it from an include file. */
    $serialized = base64_encode(serialize($tpl_vars['placed']));
 
    /* Now do somehing with them. Here I'm echoing it out to the screen for cut&paste. */
    echo '<pre><!--'.$serialized.'--></pre>';
 
    /* Or you could set another session and then access it with Smarty using $smarty.session.session_name */
    $_SESSION['serialized'] = $serialized;
{/php}{/if*}
<div class="checkout-inner-page">

<div class="checkout-table-wrapper">
<div class="cart-header">
  <h1>Thank You!</h1>
</div>
<div class="clear"></div>
<br />
<span class="normaltext">{#order_thankyou_text#}</span>
<br/>
<br/>
If you have a question about your order, please call 888-301-YUMM and reference order number: <b> {$placed.order.id}</b>
<br/><br/><br/>

 {*literal}                       
                    <script> 
jQuery(window).load(function(){
                        FB._https = true;//Pull the content securely so there are no warnings.
                        FB.init({appId: "378604702151901", status: true, cookie: true});
});
                        
                        function postToFeed(obj) {
                        var obj = obj;
                                                       
                            function callback(response) {
                                document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
                            }
                            
                            FB.ui(obj, callback);
                        }
                        
                    </script>
{/literal*}

<table class="viewcart checkout-table-wrapper" style="width:100%'">
  <tr>
  {if $smarty.session.mobile == 'true'}
    <th>&nbsp;Qty&nbsp;</th><th>&nbsp;Item#&nbsp;</th><th>&nbsp;Description&nbsp;</th><th style="text-align:right">Price&nbsp;</th>
  {else}
    <th>&nbsp;Qty&nbsp;</th><th>&nbsp;Item#&nbsp;</th><th colspan="2">&nbsp;Description&nbsp;</th><th style="text-align:right">Price&nbsp;</th>
  {/if}
</tr>
{foreach from=$placed.cart item=prod key=key}

{assign var=prod2shareUrl value="http://www.vosgeschocolate.com/product/"|cat:$prod.url_name}
{assign var=prod2shareImg  value="http://www.vosgeschocolate.com"|cat:$prod.web_image}
{assign var=prod2ShareName value=$prod.name|replace:"'":"\'"}
{assign var=prod2shareDesc value=$prod.desc|replace:"'":"\'"}

{*
<script>
  var obj{$prod.prod_id} = {ldelim}
                                method: 'feed',
                                link: '{$prod2shareUrl}',
                                picture: '{$prod2shareImg}',
                                name: '{$prod2ShareName}',
                                caption: '{$prod2shareDesc}',
                                description: '{if $prod.cust_9 != ''}{$prod.cust_9}{else}{#facebook_default#}{/if}'
                         {rdelim};
</script>
*}
<tr>
  <td style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;">&nbsp;{$prod.qty}&nbsp;</td>
  <td style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;">&nbsp;{$prod.sku}&nbsp;</td>
  <td style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;vertical-align:middle;"><img src="{$prod.web_image}" alt="{$prod2shareDesc}"  width="80" style="margin:0 8px 0 0; vertical-align:middle;">&nbsp;{$prod.name}&nbsp;</td>
 {if $smarty.session.mobile != 'true'}
  <td style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;">
    <table id="checkout_socials">
     <tr><td colspan="3" style="padding:0 5px;"><span style="color:#E1007A; font-size:14px;">{#checkout_share_title#}</span></td></tr>
     <tr>
       
       <td><a onclick='postToFeed(obj{$prod.prod_id}); return false;' class="share-btn"><img src="{$img_prefix}/images/social_icons/mini/facebook.png" alt="facebook"> Facebook</a></td>

       <td><a href="javascript:void(0);" onclick="javascript:openTweet('https://twitter.com/share?url={$prod2shareUrl}&counturl={$prod2shareUrl}&via=vosges&text={if $prod.cust_10 != ''}{$prod.cust_10}{else}{#twitter_default#}{/if}%20{$prod2ShareName}')" class="share-btn" id="twitter-share"><img src="{$img_prefix}/images/social_icons/mini/twitter.png" alt="twitter"> Twitter</a></td>

       <td><a href="javascript:void(0);" onclick="javascript:window.open('/tellfriend/{$prod.prod_id}?custom_share_message={if $prod.cust_10 != ''}{$prod.cust_10|escape:url}{else}{#facebook_default#|escape:url}{/if}','popup','width=400,height=500,statusbar=no,toolbars=no,location=no,scrollbars=yes,resizable=yes,top=300,left=500');"><img src="{$img_prefix}/images/social_icons/mini/email.png" alt="email"> Email</a></td>

     </tr>
   </table>
  </td>
 {/if}
  <td  style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;text-align:right;">&nbsp;{$prod.price}&nbsp;</td>
</tr>
<tr>
 {if $smarty.session.mobile == 'true'}
  <td style="padding-bottom:12px; border-bottom: 1px solid #e7e7e7;" colspan="5">
    <table id="checkout_socials">
     <tr><td colspan="3"><span style="color:#E1007A; font-size:14px; line-height:2em;">{#checkout_share_title#}</span></td></tr>
     <tr>
       
       <td><a onclick='postToFeed(obj{$prod.prod_id}); return false;' class="share-btn"><img src="{$img_prefix}/images/social_icons/mini/facebook.png" alt="facebook"> Facebook</a></td>

       <td><a href="javascript:void(0);" onclick="javascript:openTweet('https://twitter.com/share?url={$prod2shareUrl}&counturl={$prod2shareUrl}&via=vosges&text={if $prod.cust_10 != ''}{$prod.cust_10}{else}{#twitter_default#}{/if}%20{$prod2ShareName}')" class="share-btn" id="twitter-share"><img src="{$img_prefix}/images/social_icons/mini/twitter.png" alt="twitter"> Twitter</a></td>

       <td><a href="javascript:void(0);" onclick="javascript:window.open('/tellfriend/{$prod.prod_id}?custom_share_message={if $prod.cust_10 != ''}{$prod.cust_10|escape:url}{else}{#facebook_default#|escape:url}{/if}','popup','width=400,height=500,statusbar=no,toolbars=no,location=no,scrollbars=yes,resizable=yes,top=300,left=500');"><img src="{$img_prefix}/images/social_icons/mini/email.png" alt="email"> Email</a></td>

     </tr>
   </table>
  </td>
 {/if}
</tr>
{/foreach}
<tr>
 <td colspan = "4" style="text-align:right; font-weight:bold;">SubTotal: </td>
 <td style="text-align:right; font-weight:bold;">{$currency_type}{$placed.totals.subtotal}&nbsp</td></tr>
<tr>
 <td colspan = "4" style="text-align:right; font-weight:bold;">Discount: </td>
 <td style="text-align:right; font-weight:bold;">-{$currency_type}{$placed.totals.totalordpromo[0].deduction}&nbsp</td></tr>
<tr>
 <td colspan = "4" style="text-align:right; font-weight:bold;">Tax: </td>
 <td style="text-align:right; font-weight:bold;">{$currency_type}{$placed.totals.taxtotal}&nbsp</td></tr>
<tr>
 <td colspan = "4" style="text-align:right; font-weight:bold;">Shipping: </td>
 <td style="text-align:right; font-weight:bold;">{$currency_type}{$placed.totals.shiptotal}&nbsp</td></tr>
<tr>
 <td colspan = "4" style="text-align:right; font-weight:bold; border-top:solid 1px gray">Order Total: </td>
 <td style="text-align:right; font-weight:bold; border-top:solid 1px gray">{$currency_type}{$placed.totals.grandtotal}&nbsp</td></tr>
</table>
<br/>




{*related products*}
<br /><br />
{*include file="related_products_all.tpl*}

<br /><br />
<br /><br />
<br /><br />
<br /><br />

{assign var="skus" value=""}
{assign var="qtys" value=""}
{assign var="prices" value=""}
{foreach from=$placed.cart item=prod key=key}
  {if $prod.qty > 0}
    {if $skus == ""}
      {assign var=skus value=$prod.sku}
      {assign var=qtys value=$prod.qty}
      {assign var=prices value=$prod.price}
    {else}
      {assign var=skus value=$skus|cat:";"|cat:$prod.sku}
      {assign var=qtys value=$qtys|cat:";"|cat:$prod.qty}
      {assign var=prices value=$prices|cat:";"|cat:$prod.price}
    {/if}
  {/if}
{/foreach}

<!-- --------------           -->
<!-- PPC CONVERSION CODE -->
<!-- --------------           -->

{*literal}
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1045122853;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "KcGjCPO35AEQpZ6t8gM";
var google_conversion_value = 0;
if ({/literal}{$placed.totals.subtotal}{literal}) {
  google_conversion_value = {/literal}{$placed.totals.subtotal}{literal};
}
/* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1045122853/?value={/literal}{$placed.totals.subtotal}{literal}&amp;label=KcGjCPO35AEQpZ6t8gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
{/literal*}

{*

<script type="text/javascript"> if (!window.mstag) mstag = {ldelim}loadTag : function(){ldelim}{rdelim},time :(new Date()).getTime(){rdelim};</script> <script id="mstag_tops" type="text/javascript" src="//flex.atdmt.com/mstag/site/23a20920-ba9f-41d1-b0df-a740f0ecb98e/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics",{ldelim}dedup:"1",domainId:"1049326",type:"1",revenue:"{$placed.totals.subtotal}",actionid:"29561"{rdelim})</script> <noscript> <iframe src="//flex.atdmt.com/mstag/tag/23a20920-ba9f-41d1-b0df-a740f0ecb98e/analytics.html?dedup=1&domainId=1049326&type=1&revenue={$placed.totals.subtotal}&actionid=29561" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>
*}
<!-- ------------------           -->
<!-- END PPC CONVERSION CODE -->
<!-- ------------------           -->

{** Bronto conversion code - Mike::NHS::07132012 **}

{*
  <img src="http://email.vosgeschocolate.com/public/?q=stream_conversion&fn=Mail_Conversion&id=agmiidheadgwjsgmyvlqbjmipxmsbnc&type=$&description=order&money={$placed.totals.grandtotal}" width="0" height="0" border="0" alt=""/>
*}

{*include file="product_display_boxes.tpl"*}
{*include file="commission_junction.tpl"*}
<!--checkout-table-wrapper--></div>
<!--checkout-inner-page--></div>
<script type="text/javascript">
adroll_conversion_value_in_dollars = {$placed.totals.subtotal}
adroll_custom_data = {ldelim}"ORDER_ID": "{$order.id}"{rdelim}
</script>
<script type="text/javascript">
adroll_adv_id = "ZUYIKVCZVFAYRGIOKAQBED";
adroll_pix_id = "LFKMSIJPJVH3TM6TLCUJFR";
(function () {ldelim}
var oldonload = window.onload;
window.onload = function(){ldelim}
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){ldelim}oldonload(){rdelim}{rdelim};
{rdelim}());
</script>
{include file="_bottom.tpl"}