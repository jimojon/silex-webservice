silex-webservice
================

Setup
----------------

1.  Install composer  
    curl -sS https://getcomposer.org/installer | php

2.  Install skeletton  
    composer create-project jonas/silex-webservice -sdev

3. Run php server  
  php -S localhost:8080 -t web web/index.php



PHPUnit
----------------

curl "https://phar.phpunit.de/phpunit.phar" -o "phpunit.phar"  
chmod +x phpunit.phar  
mv phpunit.phar /usr/local/bin/phpunit  
