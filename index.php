<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fjell Bedriftsløsninger</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Her kan du sende inn dine hendvendelser!</h1>

<form action="action_page.php">
  <label for="fname">Fornavn:</label>
  <input type="text" id="fnavn" name="fnavn"><br><br>
  <label for="lname">Etternavn:</label>
  <input type="text" id="enavn" name="enavn"><br><br>
  <label for="lname">E-post:</label>
  <input type="text" id="epost" name="epost"><br><br>

  <label for="help">Velg hendvendelse:</label>
  <select id="help" name="help">
    <option value="Faktura">Faktura</option>
    <option value="Support">Support</option>
    <option value="Vedlikehold">Vedlikehold</option>
    <option value="Programvarelisens">Programvarelisens</option>
  </select> <br> <br>

  <textarea name="beskrivelse" cols="40" rows="5"></textarea> <br><br>

  <button type="submit">Send inn</button>

</form>

</body>
</html>