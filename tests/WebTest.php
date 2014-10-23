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
        $app = require __DIR__.'/../src/app.php';

        //If your application use sessions, set session.test to true to simulate sessions:
        //$app['session.test'] = true;

        require __DIR__.'/../src/controllers.php';
        return $app;
    }

    public function testIndexStatusCodeIs200(){

        $client = $this->createClient();
        $client->request("GET", "/");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testIndexReturnsJSON(){

        $client = $this->createClient();
        $client->request("GET", "/");

        $this->assertEquals("application/json", $client->getResponse()->headers->get("Content-Type"));
    }

    public function testIndexSaysHelloInJSON(){

        $client = $this->createClient();
        $client->request("GET", "/");

        $this->assertEquals(json_encode(array("hello" => "world")),
                            $client->getResponse()->getContent());
    }
    public function testReturnPreviouslyPosted(){

        $client = $this->createClient();
        $client->request("POST", "/", array(), array(), array(), json_encode(array("toto"=>"titi")));
        $client->request("GET", "/");
        $this->assertEquals(json_encode(array("toto"=>"titi")),
            $client->getResponse()->getContent());
    }
}
