<?php

use PHPUnit\Framework\TestCase;

require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task.php';
require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task5.php';

class FibonacciTest extends TestCase
{
    private $fibonacci;

    protected function setUp()
    {
        $this->fibonacci = new Fibonacci(5, 0, 10);
    }

    protected function tearDown()
    {
        $this->fibonacci = NULL;
    }
    

    public function testAttribute()
    {
        $min    = $this->fibonacci->min;
        $max    = $this->fibonacci->max;
        $length = $this->fibonacci->length;
        if ($min===5 && $max===0 && $length===10){
            $b=1;
        } else{
            $b=0;
        }
        $this->assertEquals(1, $b);
    }
}

