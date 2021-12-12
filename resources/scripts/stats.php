<?php

$q = $_REQUEST["q"];

$servername = "localhost";
$username = "fate1405";
$password = ")qvIfQ(z1u?l";
$dbname = "worms";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "fail";
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "UPDATE maindatadb SET {$q}Star = {$q}Star + 1";

if ($conn->query($sql) === TRUE) {
    echo "Star Rating Added";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>