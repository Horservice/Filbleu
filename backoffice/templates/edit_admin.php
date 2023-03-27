<?php
var_dump($_GET);

$msg="";
if(isset($_GET['id'])) {
	$id = strval($_GET['id']);
    $query = 'SELECT * FROM admin WHERE id = :id';
	$req = $db->prepare($query);
	$req->bindValue(':id', $id, PDO::PARAM_INT);
	$req->execute();
	$admin = $req->fetch();

	$firstname = $admin['firstname'];
    $lastname = $admin['lastname'];
    $email = $admin['email'];



	if(isset($_POST['submit'])){
		if (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		|| (!isset($_POST['firstname']) || empty($_POST['firstname']))
		|| (!isset($_POST['lastname']) || empty($_POST['lastname']))
        || (!isset($_POST['password']) || empty($_POST['password']))){
			
		echo 'Il faut faut remplir tous les champs pour soumettre le formulaire.';
			exit;
		} else {
            
            $email = $_POST['email'];
			$firstname = strip_tags($_POST['firstname']);
            $lastname = strip_tags($_POST['lastname']);
            $passwords = strip_tags($_POST['password']);
            $password = password_hash($passwords, PASSWORD_DEFAULT);
            $id = strval($_GET['id']);

			$query = 'UPDATE admin SET lastname = :lastname, firstname =:firstname, email=:email, password = :password WHERE id = :id';
			$req = $db->prepare($query);
			$req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
			$req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
			$req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':password', $password, PDO::PARAM_STR);
			$req->bindValue(':id', $id, PDO::PARAM_INT);
			$req->execute();
			$msg=$msg='<h3 class="my-5 text-warning">Informations modifiées.</h3>';

            
			

		}
	} 
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    


<div class="container">
	<h1>Modification</h1>
	<?=$msg?>

	<form action="#" method="POST" class="row my-5">
		<div class="mb-3">
			<label for="firstname" class="form-label">Prénom</label>
			<input type="text" class="form-control" placeholder="Nom" name="firstname"
				value="<?=(isset($_GET['id'])) ? $firstname : ''?>">
		</div>

		<div class="mb-3">
			<label for="lastname" class="form-label">Nom de famille</label>
			<input type="text" class="form-control" placeholder="Nom" name="lastname"
				value="<?=(isset($_GET['id'])) ? $lastname : ''?>">
		</div>


		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" placeholder="exemple@hotmail.com" name="email"
				value="<?=(isset($_GET['id'])) ? $email : ''?>">
		</div>

		<div class="mb-3">
			<label for="password" class="form-label">Mot de passse </label>
			<input type="password" class="form-control" placeholder="" name="password"
				value="<?=(isset($_GET['id']))?>">
		</div>









		<div class="mb-3 col-3">
			<button type="submit" class="btn btn-primary" name="submit">Valider</button>
			<a class="btn btn-warning" href="management_admin" role="button">Retour</a>
		</div>
	</form>

</div>