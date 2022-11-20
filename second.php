<?php

$name = $_POST["firstname"];
$surname = $_POST["lastname"];
$usercity = $_POST["user_city"];
$number = $_POST["number"];
$email = $_POST["email"];
$rad = $_POST["rad"];
$date = $_POST["date"];
$file = fopen("text.txt","w") or die("Unable to open file!");

echo "Hello, <b>".$name . " " . $surname . " " . "from " . $usercity . "</b> .";

fwrite($file, $name);
fwrite($file, $surname);
fwrite($file, $usercity);
fwrite($file, $number);
fwrite($file, $email);
fwrite($file, $rad);
fwrite($file, $date);

fclose($file1);
?>
