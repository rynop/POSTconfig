# Welcome

## Getting started

### Requirements:
OS that supports <code>ln -s</code>

Highly recomended prerequisites:

1. sudo pecl install apc-3.1.9
1. sudo pecl install memcache-3.0.6
1. sudo add-apt-repository ppa:nginx/stable && sudo apt-get update && sudo apt-get install nginx-full php5-fpm php5-suhosin php5-curl php5-mcrypt
1. you may have to uncomment /etc/php5/fpm/conf.d/apc.ini , memcache.ini, mcrypt.ini

### setup the project

1. fork this repo
1. <code>git clone --recursive git@github.com:[yourforkedrepo].git</code>
1. <code>sudo chgrp -R www-data webapp/app/tmp/ && sudo chmod -R g+w webapp/app/tmp/</code>
1. <code>cp webapp/app/Config/core.template.php webapp/app/Config/core.dev.php</code>
1. edit webapp/app/Config/core.dev.php (change 'Security.cipherSeed', 'Security.salt')
1. <code>sudo ln -s <full path to where you cloned>/POSTconfig/ /opt</code>
1. <code>sudo ln -s /opt/POSTconfig/etc/nginx_dev.conf /etc/nginx/sites-enabled/POSTconfig_dev.conf</code>
1. <code>sudo /etc/init.d/php5-fpm restart && sudo /etc/init.d/nginx restart</code>
 