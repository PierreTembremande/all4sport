<?php

require_once "../Model/Bdd.php";

$bdd= new Bdd();
   
@$stocks=$bdd->getStock($_GET['search']); 

require "../View/view_tableauDeBord.php";



?>



