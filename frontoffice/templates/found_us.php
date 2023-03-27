
<?php $title = "Villa-geoise - Nous trouvés "; ?>
<?php ob_start(); ?>
<link rel="stylesheet" href="assets/found.css"/>


<body>
<main>

    <div class="container-fluid text-center a pb-5 pt-4 ">

        <div class="container-fluid d mb-4 pt-1 pb-1">

            <h1>Nous trouvé</h1>

        </div>

        <div class="container b pb-3">

            <h2 class="py-3">Voici ou nous nous situons</h2>

            <div class="ratio ratio-21x9">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41791.685815105615!2d7.070852699999988!3d49.106013499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47943577c85cc675%3A0xd3a85d8c7e61142a!2s57200%20Sarreguemines!5e0!3m2!1sfr!2sfr!4v1678090732751!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="googlemapvilla"></iframe>

            </div>



            <div class="container my-3 "><a href="index.php?page=form" type="button" class="btn btn-info btn-lg">Nous contacter</a></div>


        </div>


    </div>
    

</main>
</body>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</html>