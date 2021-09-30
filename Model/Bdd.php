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

        $sql="SELECT reference_produit AS reference, nom_produit AS nom, prix_ht_produit AS prixht, description_produit AS description, categories.nom_categorie AS categorie, marques.nom_marque AS marque FROM produits JOIN categories ON fk_categorie_produit= id_categories JOIN marques ON fk_marque_produit = id_marques JOIN stocks ON  ;";
        $rq=  $this->bdd->prepare($sql);
        $rq->execute();
        return $rq->fetchAll();
        $emplacementProduit= $rq['reference'];
        
        $seql="SELECT fk_produit, fk_etagere, fk_section, fk_rangee, fk_module, fk_entrepot FROM stocks WHERE fk_produits= :reference;";
        $req=  $this->bdd->prepare($seql);
        $req->execute(['fk_produit'=> $emplacementProduit]);
        return $req->fetchAll();
    }

    function getstock($ref){

        $sql ="SELECT quantite_stock, fk_produit FROM stocks WHERE fk_produit = :ref ORDER BY fk_produit DESC";
        $rq = $this -> bdd -> prepare($sql);
        $rq -> execute( [":ref" => $ref]);
        return $rq->fetchAll();

    }

}

?>