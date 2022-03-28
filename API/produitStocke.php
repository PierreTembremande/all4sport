<?php

$tableauJson=array();
$i=0;

require_once "../Model/Bdd.php";

$bdd = new Bdd();

    $recuProduit= $bdd->getProduitsStocke();

    echo json_encode($recuProduit);

?>

    

