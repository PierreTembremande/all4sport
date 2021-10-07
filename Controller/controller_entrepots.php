<?php

require_once "../Model/Bdd.php";

//appel au model pour recup les données
$bdd= new Bdd();

if (!empty($_GET["id"])) {

    // dans le cas de la requete ajax
    $entrepot=$bdd->getEntrepot($_GET["id"]);
    
        $str ="L'entrepôt choisi est  ".$entrepot['nom_entrepot']."<br> 
        Il se trouve au  ".$entrepot['adresse_entrepot']."<br>
        Et vous pourrez le contacter au: ".$entrepot['telephone_entrepot'];
        echo $str;

} else {

//appel la vue
require "../View/view_entrepots.php";
}
?>