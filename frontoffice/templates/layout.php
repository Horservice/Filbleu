<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/frontoffice/assets/layout.css"/>
    
    <title><?= $title ?></title>


</head>


<body>
<header>
    <nav class="navbar  navbar-expand-sm ">
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
                      <li><a class="dropdown-item" href="index.php?page=villa">Villa</a></li>
                    </ul>
                  </li>              
                </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Contact
                    </a>
                    <ul class="dropdown-menu ">
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

<?= $content ?>         

</main>




<footer>


  <div class="container-fluid back">


    <div class="container-fluid bg-body-tertiary">


      <h5 class="text-center">Nos réseaux sociaux</h5>


      <div class="container text-center">
        <div class="row">
          <div class="col">
            <a href="facebook.com"><img src="images/facebook.svg" alt="facebook" class="pictures"></a>
          </div>
          <div class="col">
            <a href="twitter.com"><img src="images/twitter.svg" alt="twitter" class="pictures"></a>
          </div>
          <div class="col">
            <a href="instagram.com"><img src="images/instagram.svg" alt="instagram" class="pictures"></a>
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