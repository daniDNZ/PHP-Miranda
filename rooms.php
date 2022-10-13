<?php
include './blade-config.php';
include './db.php';

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_object()) {
    $rooms[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();

echo $blade->run("rooms", array("rooms" => $rooms));
