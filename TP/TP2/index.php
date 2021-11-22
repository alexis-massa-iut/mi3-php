<?php

use POO\Figures\Point;
use POO\Figures\Segment;

require_once('Point.php');
require_once('Segment.php');

echo "<br>Points <br>";
$point1 = new Point(0, 0);
$point2 = new Point(0, 5);
$point3 = new Point(5, 5);
$point4 = new Point(5, 0);

echo $point1 . "<br>";
echo $point2 . "<br>";
echo $point3 . "<br>";
echo $point4 . "<br>";

echo "<br> Segments <br>";
$segment1 = new Segment("blue", $point1, $point2);
$segment2 = new Segment("red", $point2, $point3);
$segment3 = new Segment("green", $point3, $point4);
$segment4 = new Segment("yellow", $point4, $point1);

echo $segment1 . " longueur : " . $segment1->getLongueur() . "<br>";
echo $segment2 . " longueur : " . $segment2->getLongueur() . "<br>";
echo $segment3 . " longueur : " . $segment3->getLongueur() . "<br>";
echo $segment4 . " longueur : " . $segment4->getLongueur() . "<br>";

$test1 = new Point(-2, 3);
$test2 = new Point(4, -5);
$segment_test = new Segment("vert", $test1, $test2);
echo $segment_test . " longueur : " . $segment_test->getLongueur() . "<br>";
