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
    <form action="media-trait-add.php" method="POST">
      <input type="text" name="nom" placeholder="nom"/>
      <input type="text" name="année" placeholder="année"/>
      <input type="text" name="rea" placeholder="rea"/>
      <input type="text" name="desc" placeholder="desc"/>
      <button type="submit">Valider</button>
    </form>
  </body>
</html>
