php /var/www/html/mod-email.php  > /dev/tty3 2>&1 &
php /var/www/html/mod-run.php  > /dev/tty4 2>&1 &
php /var/www/html/mod-sms.php  > /dev/tty5 2>&1 &
php /var/www/html/mod-system.php  > /dev/tty6 2>&1 &

date >>/var/www/html/script/test.txt