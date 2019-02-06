<?php
  if(isset($_COOKIE['user'])){
    header('location: index.php');
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Médiathèque</title>
  </head>
  <body>
    <form action="media-trait-connec.php" method="POST">
      <input type="text" name="pseudo" placeholder="pseudo"/>
      <input type="text" name="mdp" placeholder="mdp"/>
      <button type="submit">Valider</button>
    </form>
  </body>
</html>
