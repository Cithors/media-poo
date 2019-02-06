<?php
  function stop(){
    header('location: index.php');
  }
  include_once "media-class.php";
  $u = New media(['Nom'=>$_POST['nom']]);
  $bdd = new PDO('mysql:host=localhost;dbname=media-poo','root','');
  $b = new manager($bdd);
  $b->del($u);
  stop();
?>
