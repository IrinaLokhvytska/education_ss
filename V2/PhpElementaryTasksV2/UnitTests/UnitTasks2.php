<?php

use PHPUnit\Framework\TestCase;

require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task.php';
require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task2.php';

class EnvelopesTest extends TestCase 
{
    private $envelope;

    protected function setUp()
    {
        $this->envelope = new Envelopes(10, 10);
    }

    protected function tearDown()
    {
        $this->envelope = NULL;
    }
    
    public function testAttribute()
    {
        $width  = $this->envelope->width;
        $height = $this->envelope->height;
        if ($width===10 && $height===10){
            $b=1;
        } else{
            $b=0;
        }
        $this->assertEquals(1, $b);
    }
    
    public function positiveTestComparison()
    {
        $this->envelope->addSides(10, 10, 5, 5);
        $expected = 2;
        $result = $this->envelope->comparisonEnvelopes();
        $this->assertEquals($expected, $result);
    }
}

