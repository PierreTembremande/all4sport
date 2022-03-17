<?php

$referenceProduit;
$entrepot;
$quantite;

require_once "../Model/Bdd.php";

$bdd = new Bdd();

if (isset($referenceProduit) && isset($entrepot) && isset($quantite)){

    $recupQuantite= $bdd->recupQuantite($referenceProduit,$entrepot);

    $quantite= $recupQuantite["quantite_stock"]+$quantite;

    $ajoutQuantite= $bdd->updateQuantite($referenceProduit, $entrepot, $quantite);

    echo "les stocks ont étaient mis à jours.";
    
}
