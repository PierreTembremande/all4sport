<?php
    include "../View/header.php"
?>

<h1>Entrepots</h1>

<div>
    <button id="hav" onclick="afficherEntrepot('1')">Entrepôt du Havre</button>
    <button id="mar" onclick="afficherEntrepot('2')">Entrepôt de Marseille</button>
    <button id="lyo" onclick="afficherEntrepot('3')">Entrepôt du Lyon</button>
</div>

<div>
    <p id="text"></p>
</div>

<script>


        function afficherEntrepot(element){

          $.get("controller_entrepots.php", { id: element}, function( data ) {
            $( "#text" ).html( data );
            });

        }

</script>