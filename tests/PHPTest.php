<?php
use \util\Storage;

class PHPTest extends \PHPUnit_Framework_TestCase
{
    var $code = 500;


    public function setUp(){
        $this->code = 200;
    }

    public function testEquals()
    {
        $this->assertEquals(200, $this->code);
    }

    public function testStorageCanWrite() {
        $storage = new Storage();
        $storage->writeData(array("hello" => "world"));
        $this->assertEquals(
            $storage->readData()->hello,
            "world"
        );
    }
}
