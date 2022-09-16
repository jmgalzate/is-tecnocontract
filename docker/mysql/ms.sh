#!/usr/bin/bash

username='root'
password='S4p3r34ud3779**'

mysql -u $username --password=$password	<< mysql

source /var/www/is-tecnocontract/docker/mysql/tccontract.sql;

mysql


