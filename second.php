<?php 

$mode = $_POST["mode"];
$song = $_POST["song"];

$file = file_puts_content("text.txt", $song) or die("Unable to open file!");

echo "It works?";

?>
