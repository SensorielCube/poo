<?php

class Database{
    private $bddLivre;
    
    public function __construct()
    {
        $this->bddLivre = new PDO('mysql:host=localhost;dbname=livrebdd',"root","");
    }

    public function getBdd(){
        return $this->bddLivre;
    }

}

?>