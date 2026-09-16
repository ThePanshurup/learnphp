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

class MetalBox extends Box {
    public $metalType;

    public function volumeType($length, $width, $height, $metalType) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->metalType = $metalType;
    }

    public function getMetalType() {
        return $this->metalType;
    }
}

$metalBox1 = new MetalBox();
$metalBox1->volumeType(10, 15, 5, "Aluminum");
var_dump($metalBox1);