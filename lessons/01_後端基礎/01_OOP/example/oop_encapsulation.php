<?php

class Person {
    var $car = 'Mazda';
    var $house = 'Tainan City';

    function address() {
        echo 'My address is at ' . $this->house;
    }
    function driveACar() {
        echo 'Drive my ' . $this->car;
    }
}

$person = new Person();

$person->address();

echo '<br>';

$person->driveACar();

echo '<br>';

?>
