<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">

    <title>Inscription</title>
</head>
<body>
<form action="login.php" method="post" class=" col-6 shadow-lg p-3 mb-5 bg-white rounded">

    <h2 class="text-center">Créer un compte</h2>

    <div class="form-group col-sm-6 ">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required">

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                   required="required">

            <div class="form-group">
                <input type="password" name="password_confirm" class="form-control"
                       placeholder="Confirmez le mot de passe" required="required">

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-black btn-block">Inscription</button>
                </div>
            </div>
        </div>
</form>
</body>
</html>