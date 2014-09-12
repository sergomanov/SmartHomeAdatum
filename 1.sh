#!/bin/bash

STRING=`pwd`

echo " параметр $STRING. "
exit 0 #Выход с кодом 0 (удачное завершение работы скрипта)
sed -i 11i'* *	* * *	root    /var/www/html/runing.sh' crontab