<?php
// index.php

require_once('controllers/homepage.php');
require_once('controllers/buy.php');
require_once('controllers/form.php');
require_once('controllers/found_us.php');
require_once('controllers/rent.php');
require_once('controllers/villa.php');
require_once('controllers/who_are_we.php');




try{

	if (isset($_GET['page']) && $_GET['page'] !== '') {
        if ($_GET['page'] == 'homepage') {
            homepage();
        }
        if ($_GET['page'] == 'who_are_we') {
            who_are_we();
        }
        if ($_GET['page'] == 'buy') {
            buy();

        }
        if ($_GET['page'] == 'rent') {
            rent();
        }

        if ($_GET['page'] =='villa') {
            villa();
        }

        if ($_GET['page'] =='form') {
            form();
        }
        if ($_GET['page'] =='found_us') {
            found_us();
        }
	} else {
    	homepage();
	}
}  catch (Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
 
    require('templates/error.php');
}
