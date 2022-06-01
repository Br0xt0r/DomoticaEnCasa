
#!/bin/bash
sleep 10
tty=$( dmesg | grep "ttyACM" | awk {'print $5'} | sed 's/://g')
#echo $tty
python3 /var/www/html/DomoticaEnCasa/DomoticaEnCasa/DomoticaEnCasa.py $tty

echo $tty
