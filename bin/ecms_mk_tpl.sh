#!/bin/bash
#tpls=`find . -name \*tpl| cut -d \/ -f2|cut -d \. -f1`

phpStart="<?php \nrequire('./setup.php');"
phpFinish="\n?>"

tpls=`find . -name \*tpl`

for i in `ls ./templates/*tpl` ; do
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
