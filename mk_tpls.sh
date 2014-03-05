#!/bin/bash
#This ugly litlte script just looks for .tpl files in the specified
#directory and outputs basic .php template files. Use this to whip
#together a mock CV3 environment.
#Malcolm Boyanton 03282013
 
phpStart="<?php \nrequire('./setup.php');"
phpFinish="\n?>"
 
tpls=`find . -name \*tpl`
 
for i in `ls ./smarty/templates/*tpl` ; do
  w=`echo $i|cut -d \/ -f4`
	x=`echo $i|cut -d \/ -f4|cut -d \. -f1`
	y="$x.php"
	if [ ! -f $y ]; then
		echo "doesn't exist"
		echo -e "$phpStart" >> $y
		echo -e "\n\$smarty->display('$w');" >> $y
		echo -e "$phpFinish" >> $y
	fi
  #echo "something" >> $i.php
done
