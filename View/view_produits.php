<?php
include "../View/header.php"
?>

<h1>Produits</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Reference</th>
            <th>Nom</th>
            <th>emplacements</th>
            <th>Information sur le produit</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($produits as $produit) {
            echo "<tr>";
            echo "<td>" . $produit['reference'] . "</td>";
            echo "<td>" . $produit['nom'] . "...</td>";
            echo "<td>" . $produit['fk_module'] . $produit['fk_rangee'] . $produit['fk_section'] . $produit['fk_etagere'] . "</td>";
            echo '<td> <a href="controller_produits.php?id=' . $produit['id'] . '"><button data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#produit">Détail</button></a></td>';
            echo "</tr>";
        }

        ?>
    </tbody>

</table>


<div class="modal" role="dialog" id="produit" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Caractéristiques : </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    <?php
                    foreach ($oneproduit as $element) {

                        echo "Reference :<br><br>" . $element['reference'] . "<br><br>";
                        echo "Nom du produit :<br><br>" . $element['nom_produit'] . "<br><br>";
                        echo "Prix hors Taxes :<br><br>" . $element['prixht'] . "€ <br><br>";
                        echo "Description du produit :<br><br>" . $element['description'] . "<br><br>";
                        echo "Categorie du produit :<br><br>" . $element['categorie'] . "<br><br>";
                        echo "Marque du produit :<br><br>" . $element['marque'] . "<br><br>";
                        echo "Emplacement du produit :<br><br>" . $element['fk_module'] . $element['fk_rangee'] . $element['fk_section'] . $element['fk_etagere'] . "<br><br>";
                    }
                    ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>