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

}

?>