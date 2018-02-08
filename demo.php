<?php
/*I ran this using xampp, along with the xampp control panel to run a local apache server and mySQL database
I named the database ferulatest, and the table that I was inserting data into is named demo*/

define('DB_NAME', 'ferulatest');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
  die('Could not connect: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected) {
  die('Can\'t use ' . DB_NAME . ' : ' . mysqli_error());
}

$value = $_POST["input1"];

$sql = "INSERT INTO demo (input1) VALUES ('$value')";

if (!mysqli_query($link, $sql, MYSQLI_STORE_RESULT)) {
  die ('Error: ' . mysqli_error());
}

Echo "It's all legit mate ";
mysqli_close($link);
 ?>
