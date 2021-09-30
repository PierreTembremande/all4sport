<?php

require_once "../Model/Bdd.php";

$bdd= new Bdd();
   
$produits=$bdd->getProduits();

require "../View/view_produits.php";




   
?>