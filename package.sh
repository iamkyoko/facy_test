#!/bin/bash

THEME_NAME=$1

cd wp-content/themes/ && \
zip -r theme.zip ${THEME_NAME} && \
mv -f theme.zip ../../ && \
cd ../..