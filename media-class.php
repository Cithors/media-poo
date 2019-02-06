<meta charset="utf-8">
<?php
class user{
  //attributs
  private $_Pseudo;
  private $_Mdp;

  //méthodes
  public function setPseudo($Pseudo){
    if(is_string($Pseudo)){
      $this->_Pseudo = $Pseudo;
    }
  }

  public function getPseudo(){
    return $this->_Pseudo;
  }

  public function setMdp($Mdp){
    if(is_string($Mdp)){
      $this->_Mdp = md5($Mdp);
    }
  }

  public function getMdp(){
    return $this->_Mdp;
  }

  public function hydrate(array $donnee){
    foreach($donnee as $k=>$u){
      $methode='set'.ucfirst($k);
      if(method_exists($this,$methode)){
        $this->$methode($u);
      }
    }
  }

  public function __construct(array $donnee){
    $this->hydrate($donnee);
  }
}

class media{
  //attributs
  private $_Nom;
  private $_Annee;
  private $_Rea;
  private $_Desc;

  //méthodes
  public function setNom($Nom){
    if(is_string($Nom)){
      $this->_Nom = $Nom;
    }
  }

  public function getNom(){
    return $this->_Nom;
  }

  public function setAnnee($Annee){
    if(is_string($Annee)){
      $this->_Annee = $Annee;
    }
  }

  public function getAnnee(){
    return $this->_Annee;
  }

  public function setRea($Rea){
    if(is_string($Rea)){
      $this->_Rea = $Rea;
    }
  }

  public function getRea(){
    return $this->_Rea;
  }

  public function setDesc($Desc){
    if(is_string($Desc)){
      $this->_Desc = $Desc;
    }
  }

  public function getDesc(){
    return $this->_Desc;
  }

  public function hydrate(array $donnee){
    foreach($donnee as $k=>$u){
      $methode='set'.ucfirst($k);
      if(method_exists($this,$methode)){
        $this->$methode($u);
      }
    }
  }

  public function __construct(array $donnee){
    $this->hydrate($donnee);
  }

  public function afficher($bdd){
    $l = $bdd->query('SELECT * FROM films ORDER BY nom');
    if($l != false){
      $l1 = $l->fetchall(PDO::FETCH_ASSOC);
      return $l1;
    }
    else{
      echo "C'est un fail !";
    }
  }

}

class manager{
  private $_bdd;

  public function __construct($bdd){
    $this->setDb($bdd);
  }

  public function setDb($bdd){
    $this->_bdd=$bdd;
  }

  public function ajouter(media $media){
    $r=$this->_bdd->prepare('INSERT INTO films VALUES (:n, :a, :r, :d)');
    $r->execute(['n'=>$media->getNom(),'a'=>$media->getAnnee(),'r'=>$media->getRea(),'d'=>$media->getDesc()]);
  }


  public function del(media $media){
    $l = $this->_bdd->prepare('DELETE FROM films WHERE nom=:nom');
    $ok = $l->execute(['nom'=>$media->getNom()]);
  }

  public function modifier(media $media){
    $r=$this->_bdd->prepare('UPDATE films SET annee=:a, realisateur=:r, description=:d WHERE nom=:n');
    $r->execute(['n'=>$media->getNom(),'a'=>$media->getAnnee(),'r'=>$media->getRea(),'d'=>$media->getDesc()]);
  }

  public function inscrire(user $user){
    $r=$this->_bdd->prepare('SELECT * FROM user WHERE pseudo=:a');
    $r->execute(['a'=>$user->getPseudo()]);
    $result=$r->fetchall();
    if(isset($result[0])){
        echo 'Utilisateur déjà inscrit !';
    }
    else{
      $r=$this->_bdd->prepare('INSERT INTO user VALUES (:n, :a)');
      $r->execute(['n'=>$user->getPseudo(),'a'=>$user->getMdp()]);
      echo "L'utilisateur ".$user->getPseudo()." à été inscrit !";
      setcookie("user","1",time()+120);
    }
  }

  public function connection(user $user){
    $r=$this->_bdd->prepare('SELECT mdp FROM user WHERE pseudo=:a');
    $r->execute(['a'=>$user->getPseudo()]);
    $resultat=$r->fetch();
    if($resultat['mdp']==$user->getMdp()){
      echo 'Utilisateur '.$user->getPseudo().' connecté !';
      $pseudo = $user->getPseudo();
      setcookie("user","1",time()+120);
    }
    else{
      echo 'Connexion impossible, mot de passe incorrect';
    }
  }
}
?>
