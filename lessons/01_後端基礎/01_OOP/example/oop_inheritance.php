<?php

class Father {
    var $car = 'Mazda';
    var $house = 'Tainan City';

    function address() {
        echo 'My address is at ' . $this->house;
    }
    function driveACar() {
        echo 'Drive my ' . $this->car;
    }
}

class Child extends Father {
    var $ship = 'Wally';

    function driveAship() {
        echo 'Drive my ' . $this->ship;
    }
}

$father = new Father();
$child = new Child();

echo '<pre>';
var_dump($father);
var_dump($child);
echo '</pre>';

?>
