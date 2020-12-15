<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>

<?php

session_start();
require_once 'config.php';
if(isset($POST ['email']) && isset($POST['password']))


?>

<form action="connexion.php" method="post" class="col-sm-6">

    <h2 class="text-center">Se connecter</h2>

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required">

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                   required="required">

            <div class="form-group" >
                <button type="submit" class="btn btn-primary btn-block"<a href="index.php" style="text-transform: uppercase">Connexion</a>
                <button type="submit" class="btn btn-primary btn-block"><a href="inscription.php" style="text-transform: uppercase">Créer un compte</a>
                </button>
            </div>
        </div>
    </div>
</form>
</body>
</html>