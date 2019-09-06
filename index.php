<?php
include "Rectangle.php";

$width = 10;
$height = 20;

$rectangle = new Rectangle($width,$height);

echo $rectangle->height ."<br>";
echo $rectangle->width ."<br>";

$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->height ."<br>";
echo $rectangle->width ."<br>";

echo "Area: ". $rectangle->getArea()."<br>";
echo "Perimeter: ". $rectangle->getPerimeter()."<br>";

echo ("Your rectangle" . $rectangle->display());
?>;