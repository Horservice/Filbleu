    <?php $title = "Villa-geoise - Qui nous sommes ?"; ?>
    <?php ob_start();?>
    <link rel="stylesheet" href="assets/who.css"/>


<main>
<body>
    <div class="container-fluid a pb-5 pt-5">

        <div class="container d pb-5 pt">

            <div class="container b text-center py-3">

                <h1>Qui nous sommes ? </h1>

            </div>
                                
            <div class="container-fluid c">

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. Duis convallis convallis tellus id interdum velit. Scelerisque varius morbi enim nunc faucibus a pellentesque. Euismod nisi porta lorem mollis aliquam ut porttitor leo a. Non diam phasellus vestibulum lorem sed. Parturient montes nascetur ridiculus mus mauris vitae ultricies leo. Est lorem ipsum dolor sit amet. Leo vel orci porta non pulvinar. Integer vitae justo eget magna fermentum iaculis eu non. Sed blandit libero volutpat sed cras ornare arcu. Dui ut ornare lectus sit amet est placerat in egestas. Ante in nibh mauris cursus mattis molestie a. Tempus quam pellentesque nec nam. Eget mauris pharetra et ultrices neque ornare aenean. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Ac tortor vitae purus faucibus ornare suspendisse sed.

                    
                </p>

            </div>


            <div class="container b text-center my-5">

                <h2>Notre équipe  </h2>

            </div>

                                
            <div class="container-fluid c pb-5 text-center ">

                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">Richard</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">Pierre</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                          <div class="card-body">
                            <h5 class="card-title ">Daniel</h5>
                            <p class="card-text">description du poste de la personne</p>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">Jérôme</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">François</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">Claire</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                          <div class="card-body">
                            <h5 class="card-title ">Valérie</h5>
                            <p class="card-text">description du poste de la personne</p>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                      <div class="card">
                        <a><img src="images/user-solid.svg" class="card-img-top picture " alt="images/user-solid.svg"></a>
                        <div class="card-body">
                          <h5 class="card-title ">Pauline</h5>
                          <p class="card-text">description du poste de la personne</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>

    </div>

      
  </main>
</body>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>