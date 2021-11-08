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
$segment1 = new Segment($point1, $point2);
$segment2 = new Segment($point2, $point3);
$segment3 = new Segment($point3, $point4);
$segment4 = new Segment($point4, $point1);

echo $segment1 . "<br>";
echo $segment2 . "<br>";
echo $segment3 . "<br>";
echo $segment4 . "<br>";