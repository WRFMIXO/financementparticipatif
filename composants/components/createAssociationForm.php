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
            <form action="../scripts/addAssociation.php" method="post" class="p-4 bg-light rounded" id="inscriptionForm">
            <h2 class="mb-3">Créez votre propre association</h2>
            <span class="mb-3">Faites vous connaitre en tant qu'association, faites parler de votre cause</span>
  
            <div class="form-group">
                <label for="nom">Nom de l'association :</label>
                <input type="text" id="nom" name="nom" class="form-control" required placeholder="Choisissez un nom assez évocateur, le nom de votre entreprise, ou en rapport avec votre cause">
            </div>
  
            <div class="form-group">
                <label for="resume">Résumé :</label>
                <input type="text" id="resume" name="resume" class="form-control" placeholder="Vous pouvez par exemple énoncer quels sont les objectifs de votre association" required>
            </div>
  
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
  
  
            <div class="form-group">
                <label for="pays">Localisation :</label>
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

            <div class="form-group">
                <label for="image">Photo</label>
                
            </div>
        <br/>
            <button type="submit" class="btn btn-primary" id="submit">Créer mon association</button>
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