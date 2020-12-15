<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Mot de passe oublié</title>
</head>
<body>

<form action="forgot.php" method="post" class=" col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">

    <h2>Mot de passe oublié</h2>

    <div class="form-group">
        <p>
            Renseignez votre adresse email. Nous vous enverrons un lien
            vous permettant de réinitialiser votre mot de passe.

        </p>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="form-group">
                <div class="form-group">
                    <button type="submit" class="btn btn-black btn-block text-center"><a href="index.php" style="text-transform: uppercase">envoyer</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>