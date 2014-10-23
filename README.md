silex-webservice
================

Setup
----------------

1.  Install composer
    curl -sS https://getcomposer.org/installer | php

2.  Install skeletton
    composer create-project jonas/silex-webservice -sdev

3.  Run php server
    php -S localhost:8080 -t web web/index.php


PHPUnit
----------------

    curl "https://phar.phpunit.de/phpunit.phar" -o "phpunit.phar"
    chmod +x phpunit.phar
    mv phpunit.phar /usr/local/bin/phpunit


Dojo setup
----------------

1.  Step 1 : basic Silex project
    git init
    git remote add origin git@github.com:jonasmonnier/silex-webservice.git
    git pull origin dojo-step1

2.  Step 2 : Silex project with unit tests
    git pull origin dojo-step2
    git checkout dojo-step2 -- composer.json
    git checkout dojo-step2 -- phpunit.xml.dist
    git checkout dojo-step2 -- tests/