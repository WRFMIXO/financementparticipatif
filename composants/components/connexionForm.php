<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Importations de fichiers de styles-->
     <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap-grid.css">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="../../pages/styles/index.css">
            <!--Fin des importations des fichiers de styles-->
    <title>SmileFund: Inscrivez vous</title>
</head>
<body>

<?php include "header.php" ?>

    <div class="container" style="padding: 20px; width: 720px">
        <form action="../scripts/userConnexionScript" method="post" class="p-4 bg-light rounded" id="connexionForm">
            <h2 class="mb-3" style="color: darkorange">Connexion au compte</h2>
            <span class="mb-3">Accédez à votre compte et suivez l'évolution en temps réel <br> de vos financements</span>
  
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" class="form-control" required>
            </div>
  
            <br/>
            <button type="submit" class="btn btn-danger">Se connecter</button>
            <p>Pas encore de compte? <a href="inscriptionForm" class="link">Inscrivez-vous</a></p>
            </form>
    </div>

<?php include "footer.php" ?>

<!--Importations des fichiers javascript de bootstrap-->
<script src="../styles/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
                <!--Fin des importations des fichiers javascript de bootstrap-->
</body>
</html>