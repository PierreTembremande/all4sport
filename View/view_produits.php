<?php
    include "../View/header.php"
?>

<h1>Produits</h1>

<table class="table table-striped">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Nom</th>
                <th>Prix hors taxes</th>
                <th>Description</th>
                <!-- <th>photo</th> -->
                <th>Categorie</th>
                <th>Marque</th>
                <th>emplacements</th>
            </tr>
        </thead>

        <tbody>
                <?php
                    foreach($produits as $produit){
                         echo "<tr>";
                        echo"<td>".$produit['reference']."</td>";
                        echo"<td>".$produit['nom']."...</td>";
                        echo"<td>".$produit['prixht']."</td>";
                        echo "<td>".$produit['description']."</td>";
                        // echo "<td>$produit['photo']</td>";
                        echo "<td>".$produit['categorie']."</td>";
                        echo "<td>".$produit['marque']."</td>";
                        echo "<td>".$produit['fk_module'].$produit['fk_rangee'].$produit['fk_section'].$produit['fk_etagere']."</td>";
                        echo "</tr>";
                    }

                ?>
        </tbody>
        
</table>