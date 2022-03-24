<?php

$referenceProduit= $_GET["reference"];
$entrepot= $_GET["entrepot"];
$module=$_GET["module"];
$etagere= $_GET["etagere"];
$section= $_GET["section"];
$range= $_GET["range"];
$quantite= $_GET["quantite"];

require_once "../Model/Bdd.php";

$bdd = new Bdd();

if (isset($referenceProduit) && isset($entrepot) && isset($module) && isset($etagere) && isset($section) && isset($range) && isset($quantite)){

    $recupQuantite= $bdd->recupQuantite($referenceProduit,$entrepot, $module, $etagere, $section, $range);

    $quantite= $recupQuantite["quantite_stock"]+$quantite;

    $ajoutQuantite= $bdd->updateQuantite($referenceProduit, $entrepot, $module, $etagere, $section, $range, $quantite);

    echo "les stocks ont été mis à jours.";
    
}else{

    echo "Une erreur c'est produite.";
}
