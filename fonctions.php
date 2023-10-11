<?php

//La valeur du mdp dois avoir entre 6-10 caractere

function valid_password($password){
    if (strlen($password)<6 || strlen($password)>10){
    return "Votre mot de passe ne correspod pas aux critères de condidentialité <br> Veuillez choisir un autre mot de passe <br><br>MERCI ";
  }
  $salt=" très securisé . Félicitation  ";// le sel
  $salted_mdp=$password.$salt;
  $encoded_mdp=sha1($salted_mdp);
  $message="Mot de passe valide ".$salt."<br><br> Nous le chiffrons pour vous : ".$encoded_mdp;
$mdp_test="11111111";//mdp de reference
if($encoded_mdp==sha1($salted_mdp)){//comparaison du md de l'utilisateur et de la reference
    return $message."<br><br>Enregistrement realisé avec succès . Merci ";
}else {
    return $message." Erreur d'authentification veuillez revoir le mot de passe svpl ";
}
}
?>
