<?php

require_once "../Model/Bdd.php";

$bdd = new Bdd();

    $recuProduit= $bdd->getProduitsStocke();

        foreach($recuProduit as $produit){

            $jsondata="{\"nom\":\"". $produit['nom']."\",\"quantite\":\"".$produit['quantite_stock']."\"}";
            echo $jsondata;

        }

?>

    

