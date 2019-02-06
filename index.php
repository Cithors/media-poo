<?php
  function add(){
    header('location: add.php');
  }
  function del(){
    header('location: del.php');
  }
  function aff(){
    header('location: aff.php');
  }
  function maj(){
    header('location: maj.php');
  }
  function ins(){
    header('location: ins.php');
  }
  function connec(){
    header('location: connec.php');
  }
  function affm(){
    header('location: affm.php');
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Médiathèque</title>
  </head>
  <body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <?php
    if(isset($_COOKIE['user'])){
      echo '
      <button type="submit" value="1" name="b">Ajouter film</button>
      <button type="submit" value="2" name="b">Supprimer film</button>
      <button type="submit" value="3" name="b">Afficher film</button>
      <button type="submit" value="7" name="b">Afficher film (ajoutés par moi)</button>
      <button type="submit" value="4" name="b">Maj film</button>';
    }
    else{
      echo '
      <button type="submit" value="5" name="b">inscription</button>
      <button type="submit" value="6" name="b">Connexion</button>';
    }
        if(isset($_POST['b'])){
          $a = $_POST['b'];
          if($a==1){
            add();
          }
          if($a==2){
            del();
          }
          if($a==3){
            aff();
          }
          if($a==4){
            maj();
          }
          if($a==5){
            ins();
          }
          if($a==6){
            connec();
          }
          if($a==7){
            affm();
          }
        }
      ?>
    </form>
  </body>
</html>
