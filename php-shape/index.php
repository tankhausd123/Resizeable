<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');


$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br>';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br>';
echo 'Circle resize: ' .$circle->resize(100000000).'<br>';


$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';
echo 'Cylinder resize: ' .$cylinder->resize(10000).'<br>';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo 'Rectangle resize: ' .$rectangle->resize(200).'<br>';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';
echo 'Square resize: ' .$square->resize(500).'<br>';
