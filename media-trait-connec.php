<?php
  function stop(){
    header('location: index.php');
  }
  include_once "media-class.php";
  $u = New user(['Pseudo'=>$_POST['pseudo'], 'Mdp'=>$_POST['mdp']]);
  $bdd = new PDO('mysql:host=localhost;dbname=media-poo','root','');
  $b = new manager($bdd);
  $b->connection($u);
  stop();
?>
