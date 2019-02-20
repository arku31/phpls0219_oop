<?php
require "factory.php";
try {
    $buttons = array('Red', 'Green', 'Blue');

    foreach ($buttons as $b) {
        echo ButtonFactory::createButton($b)->getHtml();
    }
    echo ButtonFactory::createButton('Red');
} catch (\Exception $e) {
     file_put_contents('log.txt',$e->getMessage());
}
?>

<style>
    .red {
        background: red;
    }
    .green {
        background: green;
    }
    .blue {
        background: blue;
    }
</style>
