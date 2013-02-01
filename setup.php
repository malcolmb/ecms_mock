<?php
date_default_timezone_set( 'America/Chicago' );

//If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
require('./smarty_libs/current/libs/Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_CV3Setup extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();
        //If you are experiencing any issues use the absolute path as that is what is recommended by Smarty.
		$this->setTemplateDir('./smarty/templates');
		$this->setCompileDir('./smarty/templates_c');
		$this->setCacheDir('./smarty/cache');
		$this->setConfigDir('./smarty/configs');

		$my_security_policy = new Smarty_Security($this);
		$my_security_policy->php_functions = array();
		$my_security_policy->php_modifiers = array();
		$this->enableSecurity($my_security_policy);
		$this->setCaching(false);

        $this->assign('app_name', 'CV3 Setup');
   }

}

?>
