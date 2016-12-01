<?php
    if(isset($_POST['prenom']) and isset($_POST['gender']) and !empty($_POST['prenom']) and !empty($_POST['gender'])) {

      if (preg_match("#[0-9]#", $_POST['prenom'])) { // s'il y a des chiffres dans le prenom
        $msg = "Votre prénom ne peut contenir que des lettres";
      } else {

        $prenom = strip_tags($_POST['prenom']);

        $prenomSansTirets = preg_replace("#\-#", "", $prenom); // on retire les tirets éventuels du prénom

        $longPst = strlen($prenomSansTirets);


        setcookie('longPst', $longPst, time() + 30*24*3600, null, null, false, true);

        setcookie('prenom', $prenom, time() + 30*24*3600, null, null, false, true);
        setcookie('gender', $_POST['gender'], time() + 30*24*3600, null, null, false, true);
        setcookie('pays', $_POST['pays'], time() + 30*24*3600, null, null, false, true);

        if (isset($_POST['newsletter'])) {
          setcookie('newsletter', "true", time() + 30*24*3600, null, null, false, true);
        }
        else {
          setcookie('newsletter', "false", time() + 30*24*3600, null, null, false, true);
        }
        $msg = 'Cookie crée. <a class="btn btn-default" href="display_cookie.php">Venez me voir !</a>';

      }
    }
    else {
      $msg = "Vous n'avez pas renseigné votre prénom ou votre genre.";
    }
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
