<?php
include './blade-config.php';

echo $blade->run("rooms", array("variable1" => "value1")); // it calls /views/hello.blade.php