<?php

class Button {
    var $name = '';

    function render() {
        echo '<button '.$this->renderOnclick().'>';
        echo $this->name;
        echo '</button>';
    }

    function renderOnclick() {
        return 'onclick=""';
    }
}

class AlertButton extends Button {
    function __construct($name, $content) {
    }
}

class RelocationButoon extends Button {
    function __construct($name, $link) {
    }
}

$alertBtn = new AlertButton('ALERT', 'AWESOME!');
$alertBtn->render();

echo "\n";

$relocBtn = new RelocationButoon('Google', 'https://google.com');
$relocBtn->render();

?>
