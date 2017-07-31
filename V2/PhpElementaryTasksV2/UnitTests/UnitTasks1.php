<?php

use PHPUnit\Framework\TestCase;

require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task.php';
require_once 'C:\wamp\www\softServe\PhpElementaryTasksV2\Tasks\Task1.php';

class ChessBoardTest extends TestCase 
{
    private $chess;

    protected function setUp()
    {
        $this->chess = new ChessBoard(5, 5, "*");
    }

    protected function tearDown()
    {
        $this->chess = NULL;
    }

    public function testChar()
    {
        $model = new ChessBoard(5, 5, "");
        $result = $model->resolveAsString();
        $expected = 'Enter the char';
        $this->assertEquals($expected, $result);
    }

    public function testWidth()
    {
        $model = new ChessBoard(-3, 5, "*");
        $result = $model->resolveAsString();
        $expected = 'The width of the chess should be a positive integer';
        $this->assertEquals($expected, $result);
    }

    public function testHeight()
    {
        $model = new ChessBoard(5, -3, "*");
        $result = $model->resolveAsString();
        $expected = 'The height of the chess should be a positive integer';
        $this->assertEquals($expected, $result);
    }

    public function testAttribute()
    {
        $width  = $this->chess->width;
        $height = $this->chess->height;
        $char   = $this->chess->char;
        if ($width===5 && $height===5 && $char === "*"){
            $b=1;
        } else {
            $b=0;
        }
        $this->assertEquals(1, $b);
    }
}

