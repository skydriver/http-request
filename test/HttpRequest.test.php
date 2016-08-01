<?php

namespace skydriver\HttpRequest;

class HttpRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check Request inheritance
     */
    public function testInheritance()
    {
        $request = new HttpRequest();
        $this->assertInstanceOf('\skydriver\HttpRequest\Request', $request);
    }

}