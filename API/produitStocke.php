<?php

$localisation= $_GET['localisation'];
$tableauJson=array();

require_once "../Model/Bdd.php";

$bdd = new Bdd();

    $recuProduit= $bdd->getProduitsStocke($localisation);

    echo json_encode($recuProduit);

?>

    

