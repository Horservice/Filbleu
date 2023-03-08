<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styleHome.css"/> -->
    <title>Homepage - Nomdusite</title>

</head>
<style>



  .te{

    background-color: rgb(60, 230, 173);

  }

  .tee{

    background-color: rgb(191, 107, 199);

  }

  .grey{

    color: grey;

  }

  .t{

    background-color: red;

  }

  .picture{

    width: 40%;

  }

</style>
<body>


<main>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/background_villa.jfif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/OIP.jfif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

        <div class="container-fluid bg-black">

          <div class="container text-center">
            <div class="row">
              <div class="col">
                <div class="input-group mb-3 mt-3 ">
                  <select class="form-select" id="inputGroupSelect01">
                    <option value="1">Location</option>
                    <option value="2">Vente</option>
                  </select>
                </div>
              </div>
              <div class="col">

                <div class="input-group mb-3 mt-3">
                  <select class="form-select" id="inputGroupSelect02">
                    <option selected>Ville</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                  </select>
                </div>
              </div>

              <div class="col-3">
                <input class="btn btn-primary mt-3 mb-3 " type="submit" value="Recherche">
              </div>


            </div>
          </div>

          






        </div>


      <div class="container-fluid te">

        <h2 class="text-center text-white">Trouver votre nouvelle Villa avec Villa-geoise </h2>

        <h3 class="text-center text-white"><cite>Citation de l'entreprise </cite></h3>

      </div>

      
      <div class="container-fluid">



        <div class="container text-center ">
        
          <div class="container pt-2">
 

            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col">
                <div class="card">
                  <a href=""><img href src="images/pen-nib-solid.svg" class="card-img-top picture" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">Acheter</h5>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href=""><img src="images/key-solid.svg" class="card-img-top picture" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">Louer </h5>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href=""><img src="images/house-solid.svg" class="card-img-top picture" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">Vendre</h5>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href=""><img src="images/people-arrows-solid.svg" class="card-img-top picture pt-2" alt="..."></a>
                  <div class="card-body">
                    <h5 class="card-title">Louer/Gérer</h5>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
            </div>






            </div>



        </div>
        
        

      </div>











</main>
    <script src="https://kit.fontawesome.com/962e0fbbfc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>