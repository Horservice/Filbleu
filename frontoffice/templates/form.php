<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styleform.css"/> -->
    <title>Homepage - Nomdusite</title>

</head>
<style>

    .a{

        background-color: rgba(105, 104, 104, 0.219);

    }

    .b{

        background-color: white;
        width: 50%;
        
    }

    .c{

        background-color: white;
        width: 65%;

    }

    .d{

        background-color: darkorange;


    }

    


</style>
<body>
<main>

    <div class="container-fluid a  pb-5 pt-4 ">

        <div class="container b mb-4 pt-1 pb-1">

                <h1 class="text-center m-3" >Nous contacter</h1>

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
</html>