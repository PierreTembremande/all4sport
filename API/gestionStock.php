<?php

$referenceProduit= $_GET["reference"];
$entrepot= $_GET["entrepot"];
$module=$_GET["module"];
$etagere= $_GET["etagere"];
$section= $_GET["section"];
$rangee= $_GET["rangee"];
$quantite= $_GET["quantite"];

require_once "../Model/Bdd.php";

$bdd = new Bdd();

if (isset($referenceProduit) && isset($entrepot) && isset($module) && isset($etagere) && isset($section) && isset($rangee) && isset($quantite)){

    $recupQuantite= $bdd->recupQuantite($referenceProduit,$entrepot, $module, $etagere, $section, $rangee);

    $quantite= $recupQuantite[0]["quantite_stock"]+$quantite;

    $ajoutQuantite= $bdd->updateQuantite($referenceProduit, $entrepot, $module, $etagere, $section, $rangee, $quantite);

    echo "les stocks ont été mis à jours.";
    
}else{

    echo "Une erreur s'est produite.";
}
