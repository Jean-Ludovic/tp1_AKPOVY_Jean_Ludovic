<?php
require_once("fonctions.php");
    if (isset($_POST['mot_de_passe'])){
        $mot_de_passe=$_POST['mot_de_passe'];
        $resultat=valid_password($mot_de_passe);
    }else{
        $resultat="il faut recommencer";
    }
    echo $resultat;