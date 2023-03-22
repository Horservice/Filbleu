<?php $title = "Villa-geoise - Page introuvable "; ?>

<?php ob_start(); ?>

<h1>Erreur</h1>
<p>Une erreur eest survenue : <?= $errorMessage ?></p>

<p>Merci de retour a la plage d'accueill du site </p>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>