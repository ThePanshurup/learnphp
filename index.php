<?php
class Box {
    public $length;
    public $width;
    public $height;

    public function volume() {
        return $this->length * $this->width * $this->height;
    }
}

$box1= new Box();
$box1->length = 5;
$box1->width = 10;
$box1->height = 2;
var_dump($box1);
echo "Volume: " . $box1->volume() . "\n\n";

$box2= new Box();
$box2->length = 15;
$box2->width = 20;
$box2->height = 3;
var_dump($box2);
echo "Volume: " . $box2->volume() . "\n\n";
