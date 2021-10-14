<?php

class Bdd
{

    private $bdd;

    function __construct()
    {

        $dsn = 'mysql:dbname=all4sport;host=127.0.0.1:3308';
        $dbUser = 'root';
        $dbPwd = '';

        try {
            $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    function getEntrepot($id)
    {

        $sql = "SELECT nom_entrepot, adresse_entrepot, telephone_entrepot FROM entrepots WHERE id_entrepot = :id";
        $rq =  $this->bdd->prepare($sql);
        $rq->execute([":id" => $id]);
        $res = $rq->fetch();

        return $res;
    }

    function getNomsEntrepots(){

        $sql = "SELECT nom_entrepot FROM entrepots;";
        $rq = $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
        
    }

    function getProduits()
    {

        $sql = "SELECT fk_produit as id,
         concat(substr(nom_fournisseur,1,3),substr(nom_categorie,1,3), fk_produit) as reference, 
         nom_produit AS nom, 
         prix_ht_produit AS prixht,
         description_produit AS description, 
         categories.nom_categorie AS categorie, 
         marques.nom_marque AS marque ,
         stocks.*
         FROM produits 
         JOIN categories ON fk_categorie_produit= id_categories 
         JOIN marques ON fk_marque_produit = id_marques
         JOIN stocks  on fk_produit = id_produit 
         JOIN fournisseurs on fk_fournisseur_produit = id_fournisseurs;";
        $rq =  $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
    }

    function getOneProduit($id){
        $sql = "SELECT concat(substr(nom_fournisseur,1,3),substr(nom_categorie,1,3), id_produit) as reference, 
         nom_produit , 
         prix_ht_produit AS prixht,
         description_produit AS description, 
         categories.nom_categorie AS categorie, 
         marques.nom_marque AS marque ,
         stocks.*
         FROM produits 
         JOIN categories ON fk_categorie_produit= id_categories 
         JOIN marques ON fk_marque_produit = id_marques
         JOIN stocks  on fk_produit = id_produit 
         JOIN fournisseurs on fk_fournisseur_produit = id_fournisseurs
         WHERE id_produit= :id;";
        $rq =  $this->bdd->prepare($sql);
        $rq->execute([':id'=>$id]);
        return $rq->fetch();
    }




    function getstock($ref)
    {

        $sql = "SELECT concat(substr(nom_fournisseur,1,3),substr(nom_categorie,1,3), id_produit) as reference,
			nom_produit AS produit,  
            (SUM(quantite_stock)) AS quantite_totale_produit,
            quantite_stock
            FROM stocks 
            JOIN produits on fk_produit= id_produit 
            JOIN fournisseurs on fk_fournisseur_produit = id_fournisseurs
			JOIN categories on fk_categorie_produit = id_categories
			JOIN entrepots on fk_entrepot= id_entrepot
			group by  reference";
        $rq = $this->bdd->prepare($sql);
        $rq->execute([":ref" => $ref]);
        return $rq->fetchAll();
    }
    

}
