<?php

require_once "../Model/Bdd.php";

$bdd= new Bdd();
   
$produits=$bdd->getProduits();
@$oneproduit=$bdd->getOneProduit($_GET['id']);

require "../View/view_produits.php";




   
?>