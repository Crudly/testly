<?php

namespace Crudly\Testly\Tests;

use Crudly\Testly\Testly;
use Crudly\Testly\Tests\TestCase;

class AssertTestly extends TestCase
{
    public function testResponse()
    {
    	$this->assertEquals(Testly::hello(), 'Hello, world!');
    }
}
