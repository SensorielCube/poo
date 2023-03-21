<?php

//new session
session_start();

//Connection a la bdd
require 'config/DataBase.php';

//Connection a livreController
require 'controller/livreController.php';


$livreController = new livreController();

//Si l'utilisateur est connecté
if(array_key_exists('action',$_GET)){
    switch($_GET['action']){
        case 'createLivres':
            $livreController->ajoutLivre();
            break;
        case 'deleteLivre':
            $livreController->supprimerLivre();
            break;
        case'MajLivre':
            $task = $livreController->MajLivre();
            break;
    }
}
 ?>
