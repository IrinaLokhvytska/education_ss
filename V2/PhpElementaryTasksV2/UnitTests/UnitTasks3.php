<?php

use PHPUnit\Framework\TestCase;

require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task.php';
require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task3.php';

class TriangleTest extends TestCase 
{
    private $triangle;

    protected function setUp()
    {
        $this->triangle = new Triangle('ABC', 10,10,10);
    }

    protected function tearDown()
    {
        $this->triangle = NULL;
    }
    
    public function testAttribute()
    {
        $name  = $this->triangle->name;
        $side1 = $this->triangle->side1;
        $side2 = $this->triangle->side2;
        $side3 = $this->triangle->side3;
        if ($name==='ABC' && $side1===10 && $side2===10 && $side3===10){
            $b=1;
        }else{
            $b=0;
        }
        $this->assertEquals(1, $b);
    }

    public function testAddTriangles()
    {
        $triangle1 = new Triangle('ABC', 5, 15, 15);
        $triangle2 = new Triangle('BCD', 10, 9, 9);
        $triangle3 = new Triangle('CBD', 10, 10, 9);
        $arr = [$triangle1, $triangle2, $triangle3];
        $this->triangle->addTriangle($arr);
        $triangles = $this->triangle->triangles;

        $this->assertEquals($arr, $triangles);
    }
}

