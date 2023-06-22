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
    <title>SmileFund: Inscrivez vous</title>
</head>
<body>

<?php include "header.php" ?>
    <div class="container" id="formulaireInscription">
            <form action="../scripts/userInscriptionScript" method="post" class="p-4 bg-light rounded" id="inscriptionForm">
            <h2 class="mb-3">Inscription</h2>
            <span class="mb-3">Rejoignez de nombreux utilisateurs qui nous ont fait confiance</span>
  
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="confirmpassword">Confirmer le mot de passe :</label>
                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" class="form-control" required>
            </div>
  
            <div class="form-group">
                <label for="pays">Pays :</label>
                <select id="pays" name="pays" class="form-control" required>
                    <option value="" selected>Sélectionner un pays</option>
                        <?php 
                            $id_fichier = fopen("liste_pays.txt", "r");
                                while($ligne=fgets($id_fichier, 1024))
                                {
                                    $ligne=explode(chr(9), $ligne);
                                    if ($ligne[1]=='Cameroun') {
                                        print '<option value='.$ligne[0].'selected="selected">'.$ligne[1].'</option>';
                                    # code...
                                    } else {
                                        print '<option value = '.$ligne[0].'>'.$ligne[1].'</option>';
                                    }
                                }
                        ?>
                </select>
            </div>
        <br/>
            <button type="submit" class="btn btn-danger" id="submit">S'inscrire</button>
            <p>Vous avez déjà un compte? <a href="connexionForm" class="link">Connectez vous</a></p>
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