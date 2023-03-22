    <?php $title = "Villa-geoise - Page D'une villa "; ?>
    <?php ob_start(); ?>
    <link rel="stylesheet" href="assets/villa.css"/>


    



    
<body>
<main>



 <div class="container-fluid a pt-5 pb-5">
    <div class="container-fluid b">
    
      <div class="row">
        <div class="col">
        

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/thumb-1920-1096250.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/thumb-1920-1096250.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/thumb-1920-1096250.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>



        </div>
            <div class="col c">
            
                <h1>Nom de la villa</h1>

                <h2>descritpino de la villa</h2>

                <p>bla bla bla</p>

            </div>

        </div>


    </div>

 </div>

</main>
</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>


</html>