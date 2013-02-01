eCMS mock Smarty server
-----------------------

This is a basic implementation of the eCMS Smarty framework. You can use this to setup a local development environment. You will need to populate the data but that can be done using serialized arrays.

####./smarty_libs
  The actual Smarty library.
####./cust_libs
  Customer/custom libraries and includes.
####./cv3_libs
  CV3 specific libraries that extend Smarty.
####./demo
  The Smarty included demos.
  
####setup.php
This is the setup file that should be used to load libraries and classes that will be re-used in multiple template files.
