<?php

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




?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="styleIndex.css"/> -->
    
    <title>Index </title>

</head>
<style>

    @font-face {
      font-family: "";
      src: url();
    }

    p{

      font-family: 'Robot-Black';

    }


    h1,h2,h3,h4,h5{

      font-family: 'Georgia', Courier, monospace;

    }

 
    .back{

      background-color: black;
      width: 100%;

    }

    .t{

      background-color: red;

    }



    
    .pictures{

      width: 35%;
      color: aliceblue;

    }

</style>
<body>
<header>
    <nav class="navbar  navbar-expand-sm bg-aqua ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Villa-geoise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=homepage">Accueil</a>
              </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      L'Agences
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php?page=who_are_we">Qui nous sommes ? </a></li>
                    </ul>
                  </li>             
                 </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Proprieté
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php?page=buy">Acheter</a></li>
                      <li><a class="dropdown-item" href="index.php?page=rent">Louer</a></li>
                      <li><a class="dropdown-item" href="index.php?page=sell">Vendre</a></li>
                      <li><a class="dropdown-item" href="index.php?page=villa">villa(teste)</a></li>

                    </ul>
                  </li>              
                </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Contact
                    </a>
                    <ul class="dropdown-menu bgColor">
                      <li><a class="dropdown-item " href="index.php?page=form">Nous contacter<a></li>
                      <li><a class="dropdown-item " href="index.php?page=found_us">Nous trouvé</a></li>
                    </ul>
                  </li>
              </li>
            </ul>
          </div>
        </div>  
      </nav>
  </header>
  




<main>
<?php


  include("$inc");
          
          
?>
</main>




<footer>


  <div class="container-fluid back">


    <div class="container-fluid bg-body-tertiary">


      <h5 class="text-center">Nos réseaux sociaux</h5>


      <div class="container text-center">
        <div class="row">
          <div class="col">
            <a href="facebook.com"><img src="images/facebook.svg" alt="" class="pictures"></a>
          </div>
          <div class="col">
            <a href="twitter.com"><img src="images/twitter.svg" alt="" class="pictures"></a>
          </div>
          <div class="col">
            <a href="instagram.com"><img src="images/instagram.svg" alt="" class="pictures"></a>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="container-fluid pt-3">

    <p id="year" class="text-center"></p> 

    <p class="text-center"> Mentions légales | Politique de confidentialité | Exercer vos droits sur les traitements de données personnelles</p>

  </div>

  <script>
    const y = new Date();
    document.getElementById("year").innerHTML = y.getFullYear();
    </script>
    

</footer>
</body>
</html>