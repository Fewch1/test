<html>
<head>
<title>NoTitle</title>
<meta charset="utf-8">
<style>

body{
  background-image: url("image.jpg");
}
</style>
</head>
<body>
<h2 align="center"><b>Contact form:</b></h2>
<form action="second.php" method="POST">

<p align="center">Your name: <input type="text" name="firstname" value="Firstname" /> <input type="text" name="lastname" value="Lastname" /> </p>
<p align="center">Your number: <input type="number" name="number" value="+421xxxxxxxxx" /> </p>
<p align="center">Your Email: <input type="email" name="email" value="example@gmail.com"/></p>  

<p align="center"><input id="radio_1" type="radio" name="rad" value="Male" />
<label for="radio_1">Muž</label><br />
<input id="radio_2" type="radio" name="rad" value="Female" />
<label for="radio_2">Žena</label><br /></p>

<p align="center">You are from:<select name="user_city">
  <optgroup label="Slovakia">
    <option value="Bratislava">Bratislava</option>
    <option value="Košice">Košice</option>
  </optgroup>
  <optgroup label="Ukraina">
    <option value="Kyjev">Kyjev</option>
    <option value="Lviv">Lviv</option>
    <option value="Odesa">Odesa</option>
  </optgroup>
</select></p>
  
<p align="center">Date of Birthday <input type="date" name="date"/></p>
  

<p align="center"><input type="reset" name="reset" value="Clear" /> <input type="submit" value="Submit form"></p>

</form>
</body>
</html>
