@echo off
cd "C:\wamp64\bin\mariadb\mariadb10.4.10\bin"

mysqldump -hlocalhost -uahc -pAlhusayncons1234. ahc> "C:\wamp64\www\alhusayncons\database\ahc_%date:~-4,4%%date:~-10,2%%date:~-7,2%_%time:~0,2%%time:~3,2%%time~6,2%.sql"
 