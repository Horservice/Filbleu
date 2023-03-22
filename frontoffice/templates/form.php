    <?php $title = "Villa-geoise - Contact "; ?>
    <?php ob_start(); ?>
    <link rel="stylesheet" href="assets/form.css"/>   


<body>
<main>

    <div class="container-fluid a  pb-5 pt-4 ">

        <div class="container b mb-4 pt-1 pb-1">

                <h1 class="text-center m-2" >Nous contacter</h1>

        </div>

            <div class="container c pt-2">


                <h2 class="text-center">Formulaire</h2>


                <form action="" method="POST" class="row" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom (obligatoire)</label>
                        <input type="text" class="form-control"  name="name">
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email (obligatoire)</label>
                        <input type="email" class="form-control"  name="email">
                    </div>

                    
                    <div class="mb-3">
                        <label for="text" class="form-label">Votre message</label>
                        <textarea placeholder="" name="msg" class="form-control"></textarea>              
                    </div>
        
                    
        
                    <div class="mb-3 col-3 ">
                        <button type="submit" class="btn btn-primary btn-lg" name="submit">Envoyé </button>
                    </div>
        
        
        
        
                </form>
        
        


            </div>













    </div>

















</main>
</body>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
</html>