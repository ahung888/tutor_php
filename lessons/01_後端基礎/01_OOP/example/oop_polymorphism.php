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
    var $house = 'Taipei City';

    function driveACar() {
        echo "Drive my father's " . $this->car;
    }
}

$father = new Father();
$child = new Child();

echo '==== Father ===='.'<br>';

$father->address();
echo '<br>';
$father->driveACar();
echo '<br>';

echo '==== Child ===='.'<br>';

$child->address();
echo '<br>';
$child->driveACar();
echo '<br>';

?>
