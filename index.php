<html>
<head>
<title>MusicBox</title>
<meta charset="utf-8">
<style>

body{
  background-image: url("image.jpg");
}
</style>
</head>
<body>
<h2 align="center"><b>Music Box</b></h2>
<form action="second_2.php" method="POST"> 

<p align="center">Choose a song:<select name="id">
  <optgroup label="Games">
    <option value="1">Mario</option>
  </optgroup>
  <optgroup label="Films">
    <option value="2">Star Wars</option>
  </optgroup>
  <optgroup label="Songs">
    <option value="3">New Year</option>
  </optgroup>
</select></p>
  

<p align="center"><input type="reset" name="reset" value="Clear" /> <input type="submit" value="Submit form"></p>

</form>
</body>
</html>
