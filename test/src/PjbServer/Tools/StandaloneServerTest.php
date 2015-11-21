<?php

namespace PjbServer\Tools;

class StandaloneServerTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testConstructorThrowsInvalidArgumentException()
    {
        $this->setExpectedException('PjbServer\Tools\Exception\InvalidArgumentException');
        $config = array();
        $server = new StandaloneServer($config);
    }
}
