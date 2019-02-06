<?php
  if(!isset($_COOKIE['user'])){
    header('location: index.php');
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Médiathèque</title>
  </head>
  <body>
    <form action="media-trait-del.php" method="POST">
      <input type="text" name="nom" placeholder="nom"/>
      <button type="submit">Valider</button>
    </form>
  </body>
</html>
