<?php


function valid_password($password){
    if (strlen($password)<6 || strlen($password)>10){
    return "mot de passe error";
  }
  $salt="ok d'accord";
  $salted_mdp=$mdp.$salt;
  $encded_mdp=sha1($salted_mdp);
  $message="Mot de passe valide ".$salt."Mot de passe chiffree ".$encoded_mdp;
$mdp_test="1111";
if($encded_mdp==sha1($salted_mdp)){
    return $message."mdp correct";
}else {
    return $message."Impossible";
}
}
?>
