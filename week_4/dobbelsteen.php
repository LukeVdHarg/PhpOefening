<?php
  $randNum = rand(1, 6);

  if($randNum >= 4) {  
    echo"You rolled ", $randNum, " and won";
  }
  else {
    echo"You rolled ", $randNum, " and lost";
  }
?>
