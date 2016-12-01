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
      <form class="form-group" id ="monForm" action="traitement.php" method="post">
        <label for="prenom">Prénom</label>
        <input class="form-control" type="text" name="prenom" value="" id="prennom">
        <input type="radio" name="gender" value="femme">Femme<br>
        <input type="radio" name="gender" value="homme">Homme<br>
        <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="pays" >*
          <option value="france">France</option>
          <option value="suede">Suède</option>
          <option value="kazakhstan">Kazakhstan</option>
        </select>
        <input type="checkbox" name="newsletter" value="">Inscription newsletter<br>
        <button type="submit" name="button" class="btn btn-default">Valider</button>
      </form>
    </div>
  </body>
</html>
