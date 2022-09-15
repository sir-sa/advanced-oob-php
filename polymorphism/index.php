<?php
// require "shape.php";

// function getPrices(Shape $shape){
//     return $shape->getArea() * 0.158;
// }
// $rect = new Rect(5,2);
// $circle = new Circle(7);

// echo"<p> $",getPrices($rect),"</p>";
// echo"<p> the area is ",getPrices($circle),"</p>";

class Singleton {
    private static $instance = false;
    public $property;
    private function __construct() {}
    public static function getInstance()
    {
    if(self::$instance === false) {
    self::$instance = new Singleton;
    }
    return self::$instance;
    }
    }

    $a = Singleton::getInstance();
    $b = Singleton::getInstance();
    $a->property = "hello world";
    print $b->property;