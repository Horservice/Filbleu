<?php
// index.php

require_once('controllers/homepage.php');
require_once('controllers/buy.php');
// require_once('controllers/form.php');
// require_once('controllers/found_us.php');
// require_once('controllers/rent.php');
// require_once('controllers/sales.php');
// require_once('controllers/sell.php');
// require_once('controllers/villa.php');
// require_once('controllers/who_are_we.php');




homepage();





if(isset($_GET['page']) && $_GET['page'] !=NULL) { 
    $page = strval($_GET['page']);
    
    if($page == "homepage") {
        $title = "Page d'accueil";
        $inc= 'templates/homepage.php';
        }
    elseif($page == "buy") {
        $title =  "Qui nous somme";
        $inc= 'templates/who_are_we.php';
        } 
    else {
        $inc= 'templates/homepage.php';
        }
    }
    else {
    $inc= 'templates/homepage.php';
    }

try{


















}  catch (Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
 
    require('templates/error.php');
}






    // if(isset($_GET['page']) && $_GET['page'] !=NULL) { 
    //     $page = strval($_GET['page']);
        
    //     if($page == "homepage") {
    //         $title = "Page d'accueil";
    //         $inc= 'templates/homepage.php';
    //         }
    //     elseif($page == "who_are_we") {
    //         $title =  "Qui nous somme";
    //         $inc= 'templates/who_are_we.php';
    //         } 
    //     elseif($page == "buy") {
    //         $title = "Achat";
    //         $inc= 'templates/buy.php';
    //         }  
    //     elseif($page == "rent") {
    //         $title = "Louer";    
    //         $inc= 'templates/rent.php';
    //         }  
    //     elseif($page == "sell") {
    //         $title = "Vendre";
    //         $inc= 'templates/sell.php';
    //         } 
    //     elseif($page == "form") {
    //         $title = "Contact";
    //         $inc= 'templates/form.php';
    //         } 
    //     elseif($page == "found_us") {
    //         $title = "Nous trouvé";
    //         $inc= 'templates/found_us.php';
    //         }
    //         elseif($page == "villa") {
    //         $title = "Villa";
    //         $inc= 'templates/villa.php';
    //         }        
      
    //     else {
    //         $inc= 'templates/homepage.php';
    //         }
    //     }
    //     else {
    //     $inc= 'templates/homepage.php';
    //     }