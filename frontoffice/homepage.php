<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="styleHome.css"/> -->
    <title>Homepage</title>

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


<main>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/background_villa.jfif" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1><h4>First slide label</h4></h1>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/OIP.jfif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1><h4>Second slide label</h4></h1>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1><h4>Third slide label</h4></h1>
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

              <div class="col-md-auto">
                <input class="btn btn-primary mt-3 mb-3" type="submit" value="Recherche">
              </div>


            </div>
          </div>

          






        </div>


      <div class="container-fluid te">

        <h2 class="text-center text-white">Trouver votre nouvelle Villa avec Villa-geoise </h2>

        <h3 class="text-center text-white"><cite>Citation de l'entreprise ou devise </cite></h3>

      </div>

      
      <div class="container-fluid">



        <div class="container text-center ">
        
          <div class="container pt-2">
 

            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col">
                <div class="card border-0">
                  <a href="index.php?page=buy"><img href src="images/pen-nib-solid.svg" class="card-img-top picture " alt="icone pen"></a>
                  <div class="card-body">
                    <h4 class="card-title">Acheter</h4>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0">
                  <a href="index.php?page=rent"><img src="images/key-solid.svg" class="card-img-top picture" alt="icone key"></a>
                  <div class="card-body">
                    <h4 class="card-title">Louer </h4>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0" >
                  <a href="index.php?page=sell"><img src="images/house-solid.svg" class="card-img-top picture" alt="icone maison"></a>
                  <div class="card-body">
                    <h4 class="card-title  mt-3">Vendre</h4>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="cardborder-0 ">
                  <a href="index.php?page="><img src="images/people-arrows-solid.svg" class="card-img-top picture" alt="icone people "></a>
                  <div class="card-body">
                    <h4 class="card-title">Louer/Gérer</h4>
                    <p class="card-text">Tout les annonces de villa a vendre </p>
                  </div>
                </div>
              </div>
            </div>






            </div>




                <div class="container-fluid">
                        
                  <h4><h1>Villa récemment mis en vente</h1></h>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>


                </div>

                <div class="container-fluid">
                        
                  <h4><h1>Villa a acheter </h1></h>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>


                </div>



                <div class="container-fluid">
                        
                  <h4><h1>Villa a louer récamment</h1></h4>

                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>


                </div>





        </div>
        
        

      </div>











</main>
    
</html>