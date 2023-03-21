<?php

class Livres{
    private $database;
    private $bdd;

    public function __construct()
    {
        $this->database = new Database();
        $this->bdd = $this->database->getBdd();
    }

    //enristrement des livres 
    public function Emprunt($NameLivres,$autheur,$Name_Emprun){
        $query = $this->bdd->prepare("INSERT INTO livre(NameLivres,autheur,Name_Emprun)VALUES (?,?,?)");
        try{
            $registerLivre = $query->execute([$NameLivres,$autheur,$Name_Emprun]);
            return $registerLivre;
        }catch(Exception $e){
            print_r($e);
        }
    }

    //afficher les livres   
    public function show(){
        $query = $this->bdd->prepare("SELECT * FROM livre");
        try{
            $show = $query->execute();
            return $show;
        }catch(Exception $e){
            print_r($e);
        }
    }
    //supprimer les livres
    public function deleteLivre($id_livre){
        $query = $this->bdd->prepare("DELETE FROM livre WHERE id_livre = ?");
        try{
            $query->execute([$id_livre]);
            return $query;
        }catch(Exception $e){
            print_r($e);
        }
    }

    //modifier les livres
    public function updateLivre($id_livre,$NameLivres,$autheur,$Name_Emprun){
        $query = $this->bdd->prepare("UPDATE livre SET NameLivres = ?, autheur = ?, Name_Emprun = ? WHERE id_livre = ?");
        try{
            $query->execute([$NameLivres,$autheur,$Name_Emprun,$id_livre]);
            return $query;
        }catch(Exception $e){
            print_r($e);
        }
    }    
}

?>