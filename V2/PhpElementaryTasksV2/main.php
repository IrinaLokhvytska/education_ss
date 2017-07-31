<!DOCTYPE html>
<html>
<head>
    <style>
        div{
            border: 2px black solid;
            text-align: center;
        }
    </style>
</head>
<body>
<div>

<?php

require_once ('/Tasks/Task.php');
require_once ('/Tasks/Task1.php');
require_once ('/Tasks/Task2.php');
require_once ('/Tasks/Task3.php');
require_once('/Tasks/Task4.php');
require_once ('/Tasks/Task5.php');

//Task#1 Show Chess
$task1 = new ChessBoard(8,8, '*');
echo '<h1>Task№1 "Chess board"</h1><br>';
echo $task1->resolveAsString();

//Task#2 Envelopes
$envelope1 = new Envelopes(55,25);
$envelope2 = new Envelopes(52,22);
$a = $envelope1->width;
$b = $envelope1->height;
$c = $envelope2->width;
$d = $envelope2->height;
$output = $envelope1->addSides($a, $b, $c, $d);
$result = $envelope1->resolveAsString();
echo '<h1>Task№2 "Comparison of envelopes"</h1>';
if($result){
    echo '<p>The number of smallest envelope is:'.$result.'</p>';
} else {
    echo 'Envelopes can not be inserted.';
}

//Task#3 Triangle
$triangle1 = new Triangle('ABC', 5, 15, 15);
$triangle2 = new Triangle('BCD', 10, 9, 9);
$triangle3 = new Triangle('CBD', 10, 10, 9);
$arr = [$triangle1, $triangle2, $triangle3];
$triangle1->addTriangle($arr);
echo '<h1>Task№3 "Comparison of triangle"</h1>';
$output    = $triangle1->resolveAsString();
echo $output;

//Triangle#4 Lucky Tickets
$ticket = new Tickets(1, 135789);
echo '<h1>Task№4 "Lucky Tickets"</h1>';
$answer = $ticket->resolveAsString();
echo $answer;
   
//Triangle#5 Fibonacci
$range  = new Fibonacci(5,0,12);
echo '<h1>Task№5 "Fibonacci range"</h1>';
$range  = $range->resolveAsString();
echo $range;

?>
</div>
</body>
</html>


    


