<?php 
/// Model.php (privosir pour se connecter)

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try{
        // On se connecte à MySQL
        $db = new PDO('mysql:host=localhost;dbname=filbleu;charset=utf8', 'root', '');
        
    }
    catch(Exception $e){
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

}