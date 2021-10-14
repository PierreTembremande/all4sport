<?php

require_once "../Model/Bdd.php";

$bdd= new Bdd();

$entrepots=$bdd->getNomsEntrepots();
   
@$stocks=$bdd->getStock($_GET['search']); 

require "../View/view_tableauDeBord.php";



?>



