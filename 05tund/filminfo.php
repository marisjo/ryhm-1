<?php
  require("../../../../../config_vp2019.php");
  require("functions_film.php");
  //echo $serverHost;
  $userName = "Andrus Rinde";
  $database = "if19_inga_pe_4";
   
  $filmInfoHTML = readAllFilms();
  
  require("header.php");
  echo "<h1>" .$userName .", veebiprogrammeerimine</h1>";
?>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <hr>
  <h2>Eesti filmid</h2>
  <p>Praegu meie andmebaasis on järgmised filmid:</p>
  <?php
    echo $filmInfoHTML;
  ?>
  
</body>
</html>







