<?php
    include "../View/header.php"
?>

<h1>Tableau de bord</h1>

<form method="GET">
    
   <input type="search" name="search" id="search" placeholder="Rechercher un produit..."/>
   <input type="submit" value="Valider"/>

</form>

<table class="table table-striped">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Nom produit</th>
                <th>Havre</th>
                <th>Lyon</th>
                <th>Marseille</th>
                <th>Stock total</th>
        </thead>

        <tbody>
              <?php
                    foreach($stocks as $stock){

                        echo "<tr>";
                        echo "<td>".$stock['reference']."</td>";
                        echo "<td>".$stock['produit']."</td>";
                        echo "<td>".$stock['entrepot']."</td>";
                        echo "<td>".$stock['quantite_dans_entrepot']."</td>";
                        echo "<td></td>";
                        echo "<td>".$stock['quantite_totale_produit']."</td>";
                        echo "</tr>";

                    }

                ?>
        </tbody>
        
</table>