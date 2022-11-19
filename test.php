<html>
<head>
<title>Muchtar.com</title>
<meta charset="utf-8">
</head>
<body>
<h2>Contact form:</h2>
<form action="display.php" method="POST">

<p>Your name: <input type="text" name="firstname" value="Firstname" /> <input type="text" name="lastname" value="Lastname" /> </p>
<p>Your number: <input type="number" name="number" value="+421xxxxxxxxx" /> </p>
<p>Your Email: <input name="email" type="email" value="example@gmail.com"/></p>  

<input id="radio_1" name="sex" type="radio" value="Male" />
<label for="radio_1">Muž</label><br />
<input id="radio_2" name="sex" type="radio" value="Female" />
<label for="radio_2">Žena</label><br />

<p>You are from:<select name="user_city">
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
  
<p>Date of Birthday <input name="date" type="date" /></p>
  


<p><input name="reset" type="reset" value="Clear" /></p>
<input type="submit" value="Submit form">

</form>
</body>
</html>
