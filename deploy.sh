#!/bin/bash
cd /var/www/html || exit
unset GIT_DIR
git pull origin master
