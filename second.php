<html>
<body>
<?php 

$mode = $_POST["mode"];
$song = $_POST["song"];

$file = fopen("text.txt","w") or die("Unable to open file!");

echo "It works?";

fwrite($file, $mode);
fwrite($file, $song);

fclose($file1);

?>
</body>
</html>
