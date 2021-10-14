<?php
include "../View/header.php"
?>

<h1 style="text-align:center;">Tableau de bord</h1>

<form method="GET">

    <input type="search" name="search" id="search" placeholder="Rechercher un produit..." />
    <input type="submit" value="Valider" style="outline: solid grey; cursor:pointer;" />

</form>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Reference</th>
            <th>Nom produit</th>
            <?php
            foreach ($entrepots as $entrepot) {
                echo "<th>" . $entrepot['nom_entrepot'] . "</th>";
            }
            ?>
            <th>Stock total</th>
    </thead>

    <tbody>
        <?php
        foreach ($stocks as $stock) {

            echo "<tr>";
            echo "<td>" . $stock['reference'] . "</td>";
            echo "<td>" . $stock['produit'] . "</td>";
            echo "<td>" . $stock['quantite_stock'] . "</td>";
            echo "<td>40</td>";
            echo "<td>59</td>";
            echo "<td>" . $stock['quantite_totale_produit'] . "</td>";
            echo "</tr>";
        }

        ?>
    </tbody>

</table>