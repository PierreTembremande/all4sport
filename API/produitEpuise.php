<?php

require_once "../Model/Bdd.php";

$bdd = new Bdd();

    $recuProduit= $bdd->getProduitsNonStocke();

        foreach($recuProduit as $produit){

            echo json_encode($recuProduit);;

        }

    if($recuProduit== null ){

        echo "Aucun produit est  épuisé ";

    }