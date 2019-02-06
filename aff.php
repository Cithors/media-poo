<?php
  if(!isset($_COOKIE['user'])){
    header('location: index.php');
  }
?>
<meta charset="utf-8">
<?php
  include 'media-class.php';
  $bdd = new PDO('mysql:host=localhost;dbname=media-poo','root','');
  $is = new media(['o'=>1]);
  $tab = $is->afficher($bdd);
  echo '
  <table>
    <tr>
      <td>Nom</td>
      <td>Année</td>
      <td>Réalisateur</td>
      <td>Description</td>
    </tr>
  ';
  foreach($tab as $value){
    echo '<tr>';
    foreach($value as $val){
      echo '<td>'.$val.'</td>';
    }
    echo '</tr>';
  }
  echo'</table>';
?>
