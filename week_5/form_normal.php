<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="process_form.php" method="POST">
    <label for="name">Naam vliegtuig</label>
    <input type="text" id="name" name="name">

    <label for="available">Ja</label>
    <input type="radio" id="available" name="available" value="Ja">
    <label for="available">Nee</label>
    <input type="radio" id="available" name="available" value="Nee">

    <label for="stock">Voorraad</label>
    <input type="number" id="stock" name="stock">

    <input type="submit" name="submit_form" value="Toevoegen">
  </form>

  <?php 
    if(isset($_POST["submit_form"])){
      $name = $_POST["name"];
      $stock = $_POST["stock"];
      $available = $_POST["available"];
  ?>

  <h1><?= $name ?></h1>
  <p><?= $stock ?></p>
  <p><?= $available ?></p>

  <?php
    }

  ?>
</body>
</html>