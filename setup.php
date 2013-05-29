<?php
date_default_timezone_set( 'America/Chicago' );
//If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
//Malcolm Boyanton 04-19-2013

//require('./smarty_libs/current/libs/Smarty.class.php');
//SmartyBC() allows for backwards compatability
require('./smarty_libs/current/libs/SmartyBC.class.php');
$smarty = new SmartyBC();

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

   		//Mimic CV3s $view
        $view = (substr($_SERVER['REQUEST_URI'], 1)) ? substr($_SERVER['REQUEST_URI'], 1) : 'index' ;


        parent::__construct();
        //If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
		$this->setTemplateDir('./templates');
		$this->setCompileDir('./templates_c');
		$this->setCacheDir('./cache');
		$this->setConfigDir('./configs');

		$my_security_policy = new Smarty_Security($this);
		$my_security_policy->php_functions = array();
		$my_security_policy->php_modifiers = array();
		$this->enableSecurity($my_security_policy);
		$this->setCaching(false);
		$this->assign('view', $view);
        // Add img_prefix as empty string for test sites
        $this->assign('img_prefix', "");

        $this->assign('app_name', 'CV3 Setup');
   }

}

$smarty = new Smarty_CV3Setup();
?>