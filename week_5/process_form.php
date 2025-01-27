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
  header("refresh:2;url=form_normal.php");
    }

  ?>