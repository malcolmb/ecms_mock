{php}
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://wildophelia.commercev3.com/site_map?included=true");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
$tmp_map = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

//Unencode and serialize the results.
$sitemap_menu = unserialize(base64_decode($tmp_map));

//Pass the results to the template
$this->assign('sitemap_menu', $sitemap_menu);
{/php}

{assign var=sitemap_menu value=$sitemap_menu scope=parent}

<ul class="sitemap_menu sitemap_menu_parent">
{foreach from=$sitemap_menu key=key item=category name=category_loop}
 {if $category.inactive !== 'y'}
  <li class="sitemap_menu_item sitemap_menu_item_parent sitemap_menu_item_parent-{$smarty.foreach.category_loop.iteration}"><a href="{$category.url_name}">{$category.name}</a>
  	{if $category.subcat|@count > 0}{*Put something here*}{/if}
  	{if $category.products|@count > 0}
  	<ul class="sitemap_menu_sub_prods" data-prodcount="{$category.products|@count}">
  	{foreach from=$category.products item=product key=pkey name=prod_loop}
  		<li class="sitemap_menu_item sitemap_menu_item_prod sitemap_menu_item_prod- {$smarty.foreach.prod_loop.iteration}" data-prodid="{$product.prod_id}" data-prodsku="{$product.sku}">
      	<a href="{$product.url_name}">{$product.prod_name}</a>
  	{/foreach}
  	</ul>
  	{/if}
  </li>
 {/if}

{/foreach}
</ul>