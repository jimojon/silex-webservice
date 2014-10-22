<?php

class PHPTest extends \PHPUnit_Framework_TestCase
{
    public function testEquals()
    {
        $code = 200;
        $this->assertEquals(200, $code);
    }

    public function testContains()
    {
        $content = 'Tu connais l\'histoire de toto qui veut faire un test unitaire ?';
        $this->assertContains('toto', $content);
    }

    public function testOutputString()
    {
        $this->expectOutputString('hello');
        print 'hello';
    }

    public function testOne()
    {
        $this->assertTrue(TRUE);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {

    }
} 