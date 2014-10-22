<?php

use \Silex\WebTestCase;

/**
 * Class WebTest
 * http://symfony.com/doc/current/book/testing.html#the-test-client
 */
class WebTest extends WebTestCase
{
    public function createApplication()
    {
        $app =  require __DIR__.'/../src/app.php';

        //If your application use sessions, set session.test to true to simulate sessions:
        //$app['session.test'] = true;

        require __DIR__.'/../src/controllers.php';
        return $app;
    }
}