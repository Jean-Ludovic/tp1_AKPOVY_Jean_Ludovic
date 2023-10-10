<?php
$mdp_error="Ivalid password : Your password must have between 6 and 10 characters.";
$mdp_salt="Your secret password is  : ".$password. "Please keep it secret"
function valid_password($password){
    if (strlen($password)<6 || strlen($password)>10){
    return $mdp_error    }
    else{
        
       $encoded_password= sha1($password);
       echo $encoded_password;
        $final_message =$mdp_salt."<br><br>".$encoded_password;
        
    }
    }
  
?>
