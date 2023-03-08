<?php

$title="Index";
if(isset($_GET['page']) && $_GET['page'] !=NULL) { 
	$page = strval($_GET['page']);
	
	if($page == "Home page") {
		$title="Homepage";
		$inc= 'homepage.php';
		}
	elseif($page == "usersAdd") {
		$title="UserAdd";
		$inc= 'usersAdd.php';
		} 
	elseif($page == "usersEdit") {
		$title="UserEdit";
		$inc= 'usersEdit.php';
		}  
	else {
		$inc= 'homepage.php';
		}
	}
else {
	$inc= 'homepage.php';
	}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styleIndex.css"/> -->
    <title><?=$title?></title>

</head>
<style>
  
    .bg-aqua{

      background-color: rgb(60, 230, 173);

    }
    .bgColor{

      background-color: aquamarine;

    }
    .back{

      background-color: black;

    }
    .t{

      background-color: red;

    }
    a:hover{

      background-color: rgba(128, 128, 128, 0.397);
    }

    


</style>
<body>
<header>

    <nav class="navbar navbar-expand-sm bg-aqua">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Villa-geoise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      L'Agences
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="index.php?page=who_are_we(Galerie de membres).html">Qui nous sommes ? </a></li>
                      <li><a class="dropdown-item" href="3">Nos atouts</a></li>
                      <li><a class="dropdown-item" href="présentain de la base de donnée.php">Notre présentation de nos donnée (?)</a></li>
                    </ul>
                  </li>             
                 </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Proprieté
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="sales(Galerie photo (et ou vidéos) ).php">Acheter</a></li>
                      <li><a class="dropdown-item" href="#">Louer</a></li>
                      <li><a class="dropdown-item" href="#">Vendre</a></li>
                      <li><a class="dropdown-item" href="#">Louer/gérer</a></li>
                    </ul>
                  </li>              
                </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Contact
                    </a>
                    <ul class="dropdown-menu bgColor">
                      <li><a class="dropdown-item " href="#">Nous contacter<a></li>
                      <li><a class="dropdown-item " href="#">Nous trouvé</a></li>
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
    <p class="text-light text-center">Nos réseaux sociaux</p>


  </div>

  <div class="container-fluid">

    <p id="year" class="text-center"></p> 

    <p class="text-center"> Mentions légales | Politique de confidentialité | Exercer vos droits sur les traitements de données personnelles</p>

  </div>


</footer>

    <script>
    const y = new Date();
    document.getElementById("year").innerHTML = y.getFullYear();
    </script>
    
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>