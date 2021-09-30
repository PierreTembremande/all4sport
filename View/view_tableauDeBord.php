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
                <th>Stock</th>
        </thead>

        <tbody>
              <?php
                    foreach($stocks as $stock){

                        echo"<td>".$stock['fk_produit']."</td>";
                        echo"<td>".$stock['quantite_stock']."</td>";

                    }

                ?>
        </tbody>
        
</table>