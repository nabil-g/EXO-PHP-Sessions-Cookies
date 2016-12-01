<?php
  session_start();

  if(isset($_POST['prenom']) and isset($_POST['gender']) and !empty($_POST['prenom']) and !empty($_POST['gender'])) {

    if (preg_match("#[0-9]#", $_POST['prenom'])) { // s'il y a des chiffres dans le prenom
      $msg = "Votre prénom ne peut contenir que des lettres";
    } else {

      $prenom = strip_tags($_POST['prenom']);

      $prenomSansTirets = preg_replace("#\-#", "", $prenom); // on retire les tirets éventuels du prénom

      $longPst = strlen($prenomSansTirets);


      $_SESSION['prenom'] = $prenom;
      $_SESSION['gender'] = $_POST['gender'];
      $_SESSION['pays'] = $_POST['pays'];

      if (isset($_POST['newsletter'])) {
        $_SESSION['newsletter'] = true;
      }
      else {
        $_SESSION['newsletter'] = false;
      }


      // Condition genre
      if ($_SESSION['gender'] == "femme") {
        $l1 = "Que c'est bon d'être une femme.";
      }
      else{
        $l1 = "Que c'est bon d'être un homme.";
      }

      // Condition pays

      if ($_SESSION['pays'] == "france") {
        $l2 = "Vous habitez en France";
      } elseif ($_SESSION['pays'] == "suede") {
        $l2 = "Vous habitez en Suède";
      }
      else {
        $l2 = "Vous habitez au Kazakhstan";
      }

      // Condition newsletter
      if ($_SESSION['newsletter'] == true) {
        $l3 = "bonne lecture de la Newsletter";
      }
      else {
        $l3 = "comme ça on aime pas lire les Newsletters !";
      }


      // ÉCRITURE DU MESSAGE
      $msg = "Bonjour " . $_SESSION['prenom'] . " ! (en " . $longPst . " lettres)<br>" . $l1 . "<br>" . $l2 . "<br>" . $l3 ;

      // setcookie('login', $login, time() + 30*24*3600, null, null, false, true);
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
         <a class="btn btn-primary" href="exercice1.php">< Retour</a>
      </p>

    </div>
  </body>
</html>
