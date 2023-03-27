<?php


try{
	// On se connecte à MySQL
	$db = new PDO('mysql:host=localhost;dbname=filbleu;charset=utf8', 'root', '');
}
catch(Exception $e){
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$msg="";
if(isset($_GET['id'])) {
	$id = strval($_GET['id']);
	$query = 'DELETE FROM admin WHERE id = :id';
	$req = $db->prepare($query);
	$req->bindValue(':id', $id, PDO::PARAM_INT);
	$req->execute();
	$msg='<h3 class="my-5 text-success">Admin supprimé.</h3>';
}

$query = 'SELECT * FROM admin';
$req = $db->prepare($query);
$req->execute();
$admins = $req->fetchAll();





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?=$msg?>

    <p class="text-end">
	<a class="btn btn-primary text-end" href="index.php?page=add_admin" role="button">Ajouter une admin</a>
    </p>

    <table class="table table-bordered table-striped mx-auto">
        <thead>
            <tr class="table-secondary">
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            foreach($admins as $admin){?>
            <tr>
                <td><?=$admin['id']?></td>
                <td><?=$admin['firstname']?></td>
                <td><?=$admin['lastname']?></td>
                <td class="text-center">
                <a class="btn btn-warning" href="edit_admin&id=<?=$admin['id']?>" role="button">Modifier</a>
				<a class="btn btn-danger" onclick="return(confirm('Voulez-vous supprimer cet plateforme ?'));" href="index.php?page=management_admin&id=<?=$admin['id']?>" role="button">Supprimer</a>
			    </td>
              </tr>
            <?php }?>
        </tbody>
    </table>
    </div>


</body>
</html>