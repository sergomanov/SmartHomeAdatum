php /var/www/html/SmartHomeAdatum/mod-email.php  > /dev/tty3 2>&1 &
php /var/www/html/SmartHomeAdatum/mod-run.php  > /dev/tty4 2>&1 &
php /var/www/html/SmartHomeAdatum/mod-sms.php  > /dev/tty5 2>&1 &
php /var/www/html/SmartHomeAdatum/mod-system.php  > /dev/tty6 2>&1 &

date >>/var/www/html/SmartHomeAdatum/script/test.txt