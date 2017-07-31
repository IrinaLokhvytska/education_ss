<?php

use PHPUnit\Framework\TestCase;

require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task.php';
require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task4.php';

class TicketsTest extends TestCase 
{
    private $ticket;

    protected function setUp()
    {
        $this->ticket = new Tickets(2,456123);
    }

    protected function tearDown()
    {
        $this->ticket = NULL;
    }
    
    public function testMin()
    {
        $min  = $this->ticket->min;
        $this->assertSame(2, $min);
    }

    public function testMax()
    {
        $max  = $this->ticket->max;
        if ($max !== '456123'){
            $this->assertFalse(false);
        }
    }
    
}

