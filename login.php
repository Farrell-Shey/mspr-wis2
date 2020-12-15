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
<form action="login.php" method="post" class="col-6 shadow-lg p-3 mb-5 bg-white rounded">

    <h2 class="text-center">Se connecter</h2>

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required">

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                   required="required">

            <div class="form-group" >
                <button type="submit" class="btn btn-primary btn-block text-center"<a href="index.php" style="text-transform: uppercase">Connexion</a>

                <div class="form-group">
                    <button type="submit" class="btn btn-black btn-block text-center"><a href="register.php" style="text-transform: uppercase">Créer un compte</a>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>