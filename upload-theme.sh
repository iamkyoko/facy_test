#!/bin/bash

usage () {
    SCRIPT_NAME=`basename "$0"`
    echo "USAGE: ./${SCRIPT_NAME} ~/.ssh/id_rsa my_user@123.232.123.21"
    echo
    exit 1
}

if [ "$#" -ne 2 ]; then
    usage
fi


KEY_PATH=$1
SERVER=$2

scp -i ${KEY_PATH} -r wp-content/themes/test-theme ${SERVER}:~/test-theme
ssh -i ${KEY_PATH} ${SERVER} 'rm -rf /var/www/html/wp-content/themes/test-theme'
ssh -i ${KEY_PATH} ${SERVER} 'cp -rp ~/test-theme /var/www/html/wp-content/themes/'
ssh -i ${KEY_PATH} ${SERVER} 'chgrp -R www-data /var/www/html/wp-config/themes/test-theme'

ssh -i ${KEY_PATH} ${SERVER} 'ls -la /var/www/html/wp-content/themes'