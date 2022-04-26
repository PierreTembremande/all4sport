<?php

$localisation= $_GET['localisation'];

require_once "../Model/Bdd.php";

$bdd = new Bdd();

    $recuProduit= $bdd->getProduitsNonStocke($localisation);

        foreach($recuProduit as $produit){

            echo json_encode($recuProduit);;

        }

    if($recuProduit== null ){

        echo json_encode("Aucun produit est  épuisé ");

    }