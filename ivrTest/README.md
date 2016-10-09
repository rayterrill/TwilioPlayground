# Twilio IVRTest Proof-of-Concept

A quick proof-of-concept IVR system illustrating a basic welcome messages and prompt for input from the user.

## Installation ##
1. Clone the repository into the desired location.
2. cd TwilioPlayground/ivrTest
3. composer install 

## Machine Preparation ##
1. sudo yum update -y
2. sudo yum install php56 php56-mbstring php56-intl php56-pdo php56-mysqlnd git -y
3. sudo chkconfig --levels 3 httpd on
4. Modify your /etc/httpd/conf/httpd.conf file in the /var/www/html section:
  1. AllowOverride All
  2. Allow from all
5. sudo /etc/init.d/httpd start
6. Install Composer
  1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  2. php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  3. php composer-setup.php
  4. php -r "unlink('composer-setup.php');"
  5. sudo mv composer.phar /usr/bin/composer

