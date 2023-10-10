<?php
$mdp_error="Ivalid password : Your password must have between 6 and 10 characters.";
$mdp_salt="Your secret password is  : ".$password. "Please keep it secret"
function valid_password($password){
    if (strlen($password)<6 || strlen($password)>10){
    return $mdp_error    }
    else{
        echo $mdp_salt;
    }
    }
  
?>
