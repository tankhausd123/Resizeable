<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
include_once ('Shape.php');
include_once 'Resizeable.php';

class Circle extends Shape implements Resizeable
{
    public $radius;
    public function resize($percent)
    {
        return $this->calculateArea() + ($this->calculateArea()*$percent)/100;
    }

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}