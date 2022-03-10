<?php

$email=$_GET['email'];
str_replace("%40","@",$email);
$mdp= $_GET['mdp'];

require_once "../Model/Bdd.php";

$bdd = new Bdd();

if (isset($email) && isset($mdp)){

    $verificationLogin= $bdd->getVerifLogin($email,$mdp);

    if(isset($verificationLogin["role_libelle"]) && $verificationLogin["role_libelle"]== "cariste"){

        echo "reussite";

    }else{

        echo "echec";
        
    }
    
}




?>