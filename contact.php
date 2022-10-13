<?php
include './blade-config.php';

if (isset($_POST["name"])) {
  echo $_POST["name"];
}
echo $blade->run("contact");
