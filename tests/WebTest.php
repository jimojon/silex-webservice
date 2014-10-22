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

    public function testInitialPageStatusCodeIs200()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testInitialPageReturnsJSON()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->headers->contains('Content-Type','application/json'));
    }

    public function testInitialPageContainsHello()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertContains('hello', $client->getResponse()->getContent());
    }

    public function testInitialPageReturnExeptectedJSON()
    {
        $client = $this->createClient();
        $client->request('GET', '/');

        $this->assertEquals('{"hello":"world"}', $client->getResponse()->getContent());
    }

    public function testInitialPageReturnValidJSON()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
        $this->assertJson($client->getResponse()->getContent());
    }
}