<?php

class Homepage {

    function render($content) {
    }
}

$content = '<h1>Hello World</h1>';
$page = new Homepage();
$page->render($content);

?>
