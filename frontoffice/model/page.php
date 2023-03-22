<?php

function page(){

    if(isset($_GET['page']) && $_GET['page'] !=NULL) { 
        $page = strval($_GET['page']);
        
        if($page == "homepage") {
            $inc= 'templates/homepage.php';
            }
        elseif($page == "who_are_we") {
            $inc= 'templates/who_are_we.php';
            } 
        elseif($page == "buy") {
            $inc= 'templates/buy.php';
            }  
        elseif($page == "rent") {
            $inc= 'templates/rent.php';
            }  
        elseif($page == "sell") {
            $inc= 'templates/sell.php';
            } 
        elseif($page == "form") {
            $inc= 'templates/form.php';
            } 
        elseif($page == "found_us") {
            $inc= 'templates/found_us.php';
            }
            elseif($page == "villa") {
            $inc= 'templates/villa.php';
            }  





            
        else {
            $inc= 'templates/homepage.php';
            }
        }
        else {
        $inc= 'templates/homepage.php';
        }


        
}
        


?>

