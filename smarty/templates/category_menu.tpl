<section id="category_menu">
<header><h2>Categories</h2></header>

<nav>
<ul>
{foreach from=$categories key=key item=category}
 {if $category.parent == '' && $category.inactive != 'y'}
  <li{if $cid == $key} class="category_top_active"{/if}>
   <a href="/category/{if $category.url_name != ''}{$category.url_name}{else}{$key}{/if}">{$category.name|replace:"& ":"&amp; "}</a>
  {if $category.sub_cats.0 != ''}
   {include file="cat_menu_recur.tpl" cat_id=$key prefix="sub"}
  {/if}
  </li>
 {/if}
{/foreach}
</ul>
</nav>
</section>