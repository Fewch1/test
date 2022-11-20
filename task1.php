<html>
<head>
<title>Muchtar.com</title>
<meta charset="utf-8">
</head>
<body>
<h2><b>Contact form:</b></h2>
<form action="second.php" method="POST">

<p>Your name: <input type="text" name="firstname" value="Firstname" /> <input type="text" name="lastname" value="Lastname" /> </p>
<p>Your number: <input type="number" name="number" value="+421xxxxxxxxx" /> </p>
<p>Your Email: <input type="email" name="email" value="example@gmail.com"/></p>  

<input id="radio_1" type="radio" name="sex" value="Male" />
<label for="radio_1">Muž</label><br />
<input id="radio_2" type="radio" name="sex" value="Female" />
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
  
<p>Date of Birthday <input type="date" name="date"/></p>
  


<p><input type="reset" name="reset" value="Clear" /></p>
<input type="submit" value="Submit form">

</form>
</body>
</html>
