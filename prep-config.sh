#!/bin/bash

usage () {
    SCRIPT_NAME=`basename "$0"`
    echo "USAGE: ./${SCRIPT_NAME} \${DB_USERNAME} \${DB_PASSWORD}"
    echo
    exit 1
}

if [ "$#" -ne 2 ]; then
    usage
fi

DB_USERNAME=$1
DB_PASSWORD=$2

rm -rf docker/mysql.env

cat <<EOF > docker/mysql.env
MYSQL_USER=${DB_USERNAME}
MYSQL_PASSWORD=${DB_PASSWORD}
EOF

rm -rf docker/wordpress.env
cat <<EOF > docker/wordpress.env
WORDPRESS_DB_USER=${DB_USERNAME}
WORDPRESS_DB_PASSWORD=${DB_PASSWORD}
EOF