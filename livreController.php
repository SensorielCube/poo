<?php

require 'model/livre.php';


class livreController extends Livres
{
    private $livre;

    public function __construct()
    {
        parent::__construct();
        $this->livre = new Livres();
    }

    public function ajoutLivre()
    {

        $NameLivres = $_POST['NameLivres'];
        $filter_nom = filter_var($NameLivres, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $autheur = $_POST['autheur'];
        $filter_nom = filter_var($autheur, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $Name_Emprun = $_POST['Name_Emprun'];
        $filter_nom = filter_var($Name_Emprun, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $this->livre->Emprunt($filter_nom, $autheur, $Name_Emprun);
        
    }
    public function showLivre()
    {
        $livre = $this->livre->show();
        return $livre;
    }
    public function MajLivre()
    {
        $id = $_GET['id'];
        $NameLivres = $_POST['NameLivres'];
        $filter_nom = filter_var($NameLivres, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $autheur = $_POST['autheur'];
        $filter_nom = filter_var($autheur, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $Name_Emprun = $_POST['Name_Emprun'];
        $filter_nom = filter_var($Name_Emprun, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $this->livre->updateLivre($id, $NameLivres, $autheur, $Name_Emprun);
        if ($id > "0") {
           
        }
    }
    public function supprimerLivre()
    {
        $id = $_GET['id'];
        $this->livre->deleteLivre($id);
    }
    
}
?>