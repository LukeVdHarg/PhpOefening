<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php include "navbar.php"; ?>
<form action="welcome_get.php" method="GET">
  <label for="name">Naam</label><br>
  <input id="name" type="text" name="name"><br>
  <label for="email">E-mail</label><br>
  <input id="email" type="text" name="email"><br>
  <label for="message">Bericht</label><br>
  <input id="message" type="text" name="message"><br>
  <br>
<button>Submit</button>
<?php include "footer.php"; ?>
</form>
</body>
</html>