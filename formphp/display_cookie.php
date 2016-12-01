<?php

      // Condition genre
      if ($_COOKIE['gender'] == "femme") {
        $l1 = "Que c'est bon d'être une femme.";
      }
      else{
        $l1 = "Que c'est bon d'être un homme.";
      }

      // Condition pays

      if ($_COOKIE['pays'] == "france") {
        $l2 = "Vous habitez en France";
      } elseif ($_COOKIE['pays'] == "suede") {
        $l2 = "Vous habitez en Suède";
      }
      else {
        $l2 = "Vous habitez au Kazakhstan";
      }

      // Condition genre
      if ($_COOKIE['newsletter'] == "true") {
        $l3 = "bonne lecture de la Newsletter";
      }
      else {
        $l3 = "comme ça on aime pas lire les Newsletters !";
      }


      // ÉCRITURE DU MESSAGE
      $msg = "Bonjour " . $_COOKIE['prenom'] . " ! (en " . $_COOKIE['longPst'] . " lettres)<br>" . $l1 . "<br>" . $l2 . "<br>" . $l3 ;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
    <link rel="stylesheet" href="bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
  </head>
  <body>
    <div class="jumbotron" id="maDiv">
      <p>
        <?php

          echo $msg;

         ?>
         <br>
         <a class="btn btn-primary" href="exercice1_cookie.php">< Retour</a>
      </p>

    </div>
  </body>
</html>
