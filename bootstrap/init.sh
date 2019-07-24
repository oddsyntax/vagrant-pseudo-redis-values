#!/bin/bash

sudo su

setenforce 0

yum install -y epel-release
yum update -y
yum install -y redis httpd php php-redis

if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi

sed 's/^/#/' /etc/httpd/conf.d/welcome.conf

systemctl start httpd
systemctl start redis

systemctl enable httpd
systemctl enable redis

