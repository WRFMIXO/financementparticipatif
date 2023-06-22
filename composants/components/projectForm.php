<?php 

?>

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
    <title>SmileFund: Donnez du sourire</title>
</head>
<body>

<?php include "header.php" ?>
    <div class="container" id="formulaireInscription">
            <form action="../scripts/addProject.php" method="post" class="p-4 bg-light rounded" id="projectForm">
            <h2 class="mb-3">Créez un projet</h2>
            <span class="mb-3">Enoncéz clairement vos objectifs</span>
  
            <div class="form-group">
                <label for="nom">Nom du projet :</label>
                <input type="text" id="nom" name="nom" class="form-control" required placeholder="Choisissez un nom assez évocateur, le nom de votre entreprise, ou en rapport avec votre cause">
            </div>
  
            <div class="form-group">
                <label for="objectif">Objectif</label>
                <input type="text" id="objectif" name="objectif" class="form-control" placeholder="Combien aimeriez vous recueillir comme soutien?" required>
            </div>

        <br/>
            <button type="submit" class="btn btn-primary" id="submit">Démarrer le projet</button>
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