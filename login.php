<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">

    <title>Connexion</title>
</head>
<body>

<form action="api/auth/setsession.php" method="post" class="col-6 shadow-lg p-3 mb-5 bg-white rounded">

    <h2 class="text-center">Se connecter</h2>

    <div class="form-group my-2">
        <input type="email" name="email" class="form-control" placeholder="Email" required
               value="<?= isset($_GET['email']) ? $_GET['email'] : null ?>">
    </div>

    <div class="form-group my-2">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
    </div>
    <div class="container">
        <button type="submit" class="btn btn-primary btn-block text-center">CONNEXION</button>

        <a href="register.php" class="btn btn-outline-primary">Créer un compte</a>
    </div>

</form>

</body>
</html>