#!/bin/sh

# (1) set up all the mysqldump variables
FILE_STRUCTURE=attendance_system-structure.`date +"%Y%m%d"`.sql
FILE_DATA=attendance_system-data.`date +"%Y%m%d"`.sql
DBSERVER=127.0.0.1
DATABASE=attendance_system
USER=root
PASS=root

mysqldump -d --user=${USER} --password=${PASS} ${DATABASE} > attendance_system-structure-tmp.sql

mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info --user=${USER} --password=${PASS} ${DATABASE} > ${FILE_DATA}

#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 organisations > docs/myspata3-data-organisations.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 users > docs/myspata3-data-users.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 locations > docs/myspata3-data-locations.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 omniclasses > docs/myspata3-data-omniclasses.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 premises > docs/myspata3-data-premises.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 buildings > docs/myspata3-data-buildings.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 component_types > docs/myspata3-data-component_types.sql
#mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info  -uroot myspata3 lands > docs/myspata3-data-lands.sql

cat attendance_system-structure-tmp.sql | sed "s/ AUTO_INCREMENT=[0-9]*//g" > ${FILE_STRUCTURE}
rm attendance_system-structure-tmp.sql

gzip $FILE_DATA
gzip $FILE_STRUCTURE

echo "attendance_system-structure.sql and attendance_system-data.sql was created"