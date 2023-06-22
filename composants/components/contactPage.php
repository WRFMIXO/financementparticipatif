<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--Importations de fichiers de styles-->
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../pages/styles/index.css">
    <!--Fin des importations des fichiers de styles-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: Donnez du sourire</title>
</head>
<body>
    <?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="container">
        <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Nous contacter</h2>
    </div>

    <div class="container"  >
        <section>

            <div class="container" style="padding: 20px; width: 720px">
                <form action="../scripts/userConnexionScript" method="post" class="p-4 bg-light rounded" id="connexionForm">
                    <h2 class="mb-3" style="color: darkorange">Un problème ?</h2>
                    <span class="mb-3">Pour toute question, suggestion ou demande d'assistance, n'hésitez pas à nous contacter en utilisant le formulaire ci-dessous :</span>
  
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="email" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
  
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
  
                    <br/>
                    <button type="submit" class="btn btn-danger">Envoyer</button>
                </form>
            </div>
        </section>
    </div>
</div>


    <?php include 'footer.php'; ?>
</body>
</html>