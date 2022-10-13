<?php
include './blade-config.php';

echo $blade->run("room-details", array("variable1" => "value1")); // it calls /views/hello.blade.php