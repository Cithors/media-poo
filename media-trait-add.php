<?php
  function stop(){
    header('location: index.php');
  }
  include_once "media-class.php";
  $u = New media(['Nom'=>$_POST['nom'], 'annee'=>$_POST['année'], 'rea'=>$_POST['rea'], 'desc'=>$_POST['desc']]);
  $bdd = new PDO('mysql:host=localhost;dbname=media-poo','root','');
  $b = new manager($bdd);
  $b->ajouter($u);
  stop();
?>
