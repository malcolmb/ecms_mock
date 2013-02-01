<?php
date_default_timezone_set( 'America/Chicago' );
 /**
 * Example Application

 * @package Example-application
 */

require('../smarty_libs/current/libs/Smarty.class.php');
//require('/Users/malcolm/Sites/Playground/cv3/smarty_libs/current/libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->setTemplateDir('/Users/malcolm/Sites/Playground/cv3/demo/templates');
$smarty->setCompileDir('/Users/malcolm/Sites/Playground/cv3/demo/templates_c');
$smarty->setCacheDir('/Users/malcolm/Sites/Playground/cv3/demo/cache');
$smarty->setConfigDir('/Users/malcolm/Sites/Playground/cv3/demo/configs');


//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
$smarty->assign("FirstName",array("John","Mary","James","Henry"));
$smarty->assign("LastName",array("Doe","Smith","Johnson","Case"));
$smarty->assign("Class",array(array("A","B","C","D"), array("E", "F", "G", "H"),
	  array("I", "J", "K", "L"), array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
	  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign("option_values", array("NY","NE","KS","IA","OK","TX"));
$smarty->assign("option_output", array("New York","Nebraska","Kansas","Iowa","Oklahoma","Texas"));
$smarty->assign("option_selected", "NE");

$smarty->display('index.tpl');
?>
