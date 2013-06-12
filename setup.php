<?php
define('SMARTYPATH', '/Users/malcolm/Sites/ecms_mock');

//error_reporting(E_ALL);
ini_set(display_errors, 1);
date_default_timezone_set( 'America/Chicago' );
//If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
//Malcolm Boyanton 04-19-2013

//require('./smarty_libs/current/libs/Smarty.class.php');
//SmartyBC() allows for backwards compatability
require(SMARTYPATH.'/smarty_libs/current/libs/SmartyBC.class.php');
$smarty = new SmartyBC();

if (file_exists(SMARTYPATH.'/cust_libs/tpl_vars.php'))
    include(SMARTYPATH.'/cust_libs/tpl_vars.php');
if (file_exists(SMARTYPATH.'/cust_libs/site_map.php'))
    include(SMARTYPATH.'/cust_libs/site_map.php');
if (file_exists(SMARTYPATH.'/cust_libs/prod_array.php'))
    include(SMARTYPATH.'/cust_libs/prod_array.php');
//$categories = $tpls['categories'];

// http://www.smarty.net/docsv2/en/installing.smarty.extended.tpl
// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_CV3Setup extends SmartyBC {

    function __construct()
    {

        // Class Constructor.
        // These automatically get set with each new instance.
        $plugins[] = SMARTY_DIR . 'plugins';
        $plugins[] = SMARTYPATH . '/cv3_libs';

        //Mimic CV3s $view
        function view($path){
            if (strpos($path, '/category') === 0 || strpos($path, '/prod_detail_list') === 0){
                preg_match('/^\/(category|prod_detail_list)\/([a-zA-Z0-9_-]+)/',$_SERVER['REQUEST_URI'], $matches);
                if (count($matches))
                    $cid = $matches[2];
                $page = 'category';
                $view = array(
                    'page' => $page,
                    'cid' => $cid
                );
            } elseif (strpos($path, '/product') === 0){
                $view = array('page' => 'product');
            } elseif (strlen($path) === 1 || strpos($path , '/index') ===0 ) {
                $view['page'] = 'index';
            }
            else {
                preg_match('/[a-zA-Z0-9_-]+/', $path, $matches);
                $view['page'] = $matches[0];
            }
            return $view;
        }
        $view = view($_SERVER['REQUEST_URI']);
        parent::__construct();
        //If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
        $this->setTemplateDir(SMARTYPATH.'/templates');
        $this->setCompileDir(SMARTYPATH.'/templates_c');
        $this->setCacheDir(SMARTYPATH.'/cache');
        $this->setConfigDir(SMARTYPATH.'/configs');
        $this->setPluginsDir($plugins);

        $my_security_policy = new Smarty_Security($this);
        $my_security_policy->php_functions = array();
        $my_security_policy->php_modifiers = array();
        $this->enableSecurity($my_security_policy);
        $this->setCaching(false);
        // Add img_prefix as empty string for test sites
        $this->assign('img_prefix', "");
        $this->assign('cdn_styles', "");
        $this->assign('app_name', 'CV3 Setup');
        $this->assign('view', $view['page']);
        if (isset($view['cid'])) $this->assign('cid', $view['cid']);
    }

}

$smarty = new Smarty_CV3Setup();
if (isset($tpls)){
    $categories = $tpls['categories'];
    $featured = $tpls['featured'];
    $specials = $tpls['specials'];

    foreach($tpls as $key => $value){
        if (is_array($tpls[$key])){
        } else {
            $smarty->assign($key, $value);
        }
    }
    $js = json_encode( $tpls );
}

if (isset($site_map)){
    $sitemap = $site_map['sitemap'];
    $smarty->assign('sitemap', $sitemap);
    foreach($site_map as $key => $value){
        if (is_array($site_map[$key])){
        } else {
            if (!$tpls[$key]){
                $smarty->assign($key, $value);
            }
        }
    }
}
if (isset($prod_array)){
    $product = $prod_array['product'];
    $attributes = $prod_array['attributes'];
}

//$smarty->assign('all_vars', $all_vars);
//$smarty->assign('tpl_vars', $tpls);
if (!empty($categories))
    $smarty->assign('categories', $categories);
if (!empty($featured))
    $smarty->assign('featured', $featured);
if (!empty($specials))
    $smarty->assign('specials',$specials);
if (!empty($product))
    $smarty->assign('product', $product);
if (!empty($attributes))
    $smarty->assign('attributes', $attributes);

$view = view($_SERVER['REQUEST_URI']);
$page = $view['page'];
$smarty->assign('view', $page);
if(!empty($js))
    $smarty->assign('js', $js);
?>