<?php

Class Bdd{

    private $bdd;

    function __construct(){

        $dsn='mysql:dbname=all4sport;host=127.0.0.1:3308';
        $dbUser='root';
        $dbPwd='';

        try{
            $this->bdd=new PDO($dsn,$dbUser,$dbPwd);

        }catch (PDOException $e){

            echo $e-> getMessage();
        }
    }

    function getEntrepot($id){

        $sql="SELECT nom_entrepot, adresse_entrepot, telephone_entrepot FROM entrepots WHERE id_entrepot = :id";
        $rq=  $this->bdd->prepare($sql);
        $rq->execute( [":id" => $id]);
        $res=$rq->fetch();
        
        return $res;
    }

    function getProduits(){

        $sql="SELECT id_produit AS reference, nom_produit AS nom, prix_ht_produit AS prixht,
         description_produit AS description, 
         categories.nom_categorie AS categorie, marques.nom_marque AS marque ,
         stocks.*
         FROM produits 
         JOIN categories ON fk_categorie_produit= id_categories 
         JOIN marques ON fk_marque_produit = id_marques
         JOIN stocks  on fk_produit = id_produit ;";
        $rq=  $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();

    }


   

    function getstock($ref){

        $sql ="SELECT concat(substr(nom_fournisseur,1,3),substr(nom_categorie,1,3), id_produit) as reference,
			nom_produit AS produit, 
            nom_entrepot as entrepot, 
            quantite_stock AS quantite_dans_entrepot, 
            (SUM(quantite_stock)) AS quantite_totale_produit,
            count(*)
            FROM stocks 
            JOIN produits on fk_produit= id_produit 
            JOIN entrepots on fk_entrepot = id_entrepot 
            JOIN fournisseurs on fk_fournisseur_produit = id_fournisseurs
			jOIN categories on fk_categorie_produit = id_categories
            group by  fk_produit, fk_entrepot
            ORDER BY produit; ";
        $rq = $this -> bdd -> prepare($sql);
        $rq -> execute( [":ref" => $ref]);
        return $rq->fetchAll();

    }

}

?>