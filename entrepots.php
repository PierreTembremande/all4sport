<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel = "styleSheet" href = "style.css">
    <title> Entrepôts</title>
  </head>
  <body>

    <h1> Entrepôts </h1>
       <div>

           <button><a href="accueil.php">Accueil</a></button>
           <button><a href="entrepots.php">Nos entrepôts</a></button>
           <button><a href="produits.php">Notre liste de produits</a></button>
           <button><a href="tableauDeBord.php">Notre tableau de bord</a></button>
       </div>

       <body>
   
        <div>
            <button id="hav" onclick="afficherEntrepot('hav')">Entrepôt du Havre</button>
            <button id="mar" onclick="afficherEntrepot('mar')">Entrepôt de Marseille</button>
            <button id="lyo" onclick="afficherEntrepot('lyo')">Entrepôt du Lyon</button>
        </div>

    <p id="text">oups</p>

<script>

    let text;

        function afficherEntrepot(element){

            if(element=='hav'){
                text="L'entrepôt du havre se trouve au 19 rue Usain Bolt, 76310 Havre <br> et vous pourrez le contacter via le numéro: +33/07/69/42/77/33 ";
                document.getElementById("text").innerHTML = text;

            }

            if(element=='mar'){
                text="L'entrepôt de Marseille se trouve au 17 rue Teddy Riner,  Marseille <br> et vous pourrez le contacter via le numéro: +33/07/69/42/77/34 ";
                document.getElementById("text").innerHTML = text;

            }

        }

</script>

</body>
</html>

