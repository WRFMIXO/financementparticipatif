<?php
    require_once '../../composants/scripts/dbconnectionScript.php';

    $sql = "SELECT * FROM projets LIMIT 3";
    $result = $conn->query($sql);
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
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" >

            <title>SmileFund: Donnez du sourire grâce à votre soutien</title>

        </head>
        <body>
            <!--Contenu de la page-->
                <div class="main">
                    <?php  include "../../composants/components/header.php" ?>

                    <div class="main-body">
                        <div class="body-first-title">
                            <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline">Quelques étapes</h5>
                            <p>
                                <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Faire un don ne vous <br/> prendra que quelques minutes</h2>
                            </p>
                        </div>
                        <div class="toDo">
                            <div style="justify-content: center; text-align: center">
                            <ul>
                                <li class="card bg-light">
                                    <img src="../../composants/icones/keycap_digit_one.png" class="card-img-top" id="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Précisez quelques informations sur vous</h4>
                                        <p class="card-text">Quel est votre nom, votre adresse et comment vous contacter?</p>
                                    </div>
                                </li>
                                <li class="card bg-light">
                                    <img src="../../composants/icones/keycap_digit_two.png" class="card-img-top" id="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Faites votre choix</h4>
                                        <p class="card-text">Choisissez parmi notre grande liste de projets ou créez le vôtre</p>
                                    </div>
                                </li>
                                <li class="card bg-light">
                                    <img src="../../composants/icones/keycap_digit_three.png" class="card-img-top" id="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Finalisez votre soutient</h4>
                                            <p class="card-text">Partagez votre envie avec votre famille et vos amis</p>
                                        </div>
                                </li>
                            </ul>
                            </div>
                            <h5 style="font-family: Segoe UI light; font-size: 18px; padding: 25px; text-decoration: underline; text-align: right">Ce que nous vous assurons</h5>
                           <div class="container bg-secondary" id="security" style="padding: 10px; border-radius: 1.5em; 
                            justify-content: center; color: white">
                                <div style="padding: 5em;">
                                <h3 style="font-size: 50px; font-family: Segoe UI light;"><img src="../../composants/icones/shield.png" width="70px">Sécurité et Fiabilité</h3>
                                <blockquote><label style="padding: 0; font-size: 22px; font-family: segoe UI light; margin-left: 5em">Nous protégeons vos données</label></blockquote>
                                <p style="padding: 20px; font-size: 20px; font-family: Segoe UI light; margin-left: 2.2em">Un grand groupe des meilleurs développeurs s'occupe exclusivement <br> 
                                de la sécurité et de la fiabilité de notre plateforme. N'ayez crainte, votre <br/>
                                soutient parviendra toujours à son destinataire. Soyez rassurés, vous pourrez vérifier <br/>
                                en temps réel le suivi du financement du projet que vous soutenez</p>

                                <br/>
                                <a class="btn btn-dark" id="support" href="securityTeam">Découvrez l'équipe de sécurité<img src="../../composants/icones/next_page.png"></a>
                                </div>
                            </div>
                        </div>
 
                        <div>
                            <div class="body-second-title">
                                <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline">Ce que vous pouvez faire</h5>
                                <p>
                                    <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Devenez...<br> <b>Acteur</b> du changement </h2>
                                </p>
                            </div>
                            <div class="toDo">
                            <div style="justify-content: center; text-align: center">
                            <ul>
                                <li class="card" id="secondmenu">
                                    <img src="../../composants/icones/hand_with_fingers_splayed.png" class="card-img-top" id="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Démarrez une cagnotte pour vous</h4>
                                        <p class="card-text">Vous êtes porteur d'un projet d'envergure? Commencez et laissez la communauté vous venir en aide.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="cagnoteForm"><img src="../../composants/icones/go.png" width="90px" style="background: transparent"></a>
                                    </div>  
                                </li>
                                <li class="card" id="secondmenu">
                                    <img src="../../composants/icones/awareness2.png" class="card-img-top" id="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Soutenez une association</h4>
                                        <p class="card-text">Vous êtes ému par une cause, montrez votre soutient à l'association au départ du projet.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="listAssociations"><img src="../../composants/icones/go.png" width="90px" style="background: transparent"></a>
                                    </div>  
                                </li>
                                <li class="card" id="secondmenu">
                                    <img src="../../composants/icones/office_building.png" class="card-img-top" id="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Investissez dans un projet prometteur</h4>
                                            <p class="card-text">Curieux, à la recherche d'opportunités de faire fructifier votre argent, pensez à investir dans des projets 
                                                différents nouveaux.
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="listProjets"><img src="../../composants/icones/go.png" width="90px" style="background: transparent"></a>
                                        </div>    
                                </li>
                            </ul>
                            </div>

                        </div>

                        <div class="container-fluid">
                            <div id="someprojects">
                            <div class="body-second-title">
                                <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline">Nos réalisations</h5>
                                <p>
                                    <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Quelques uns des projets financés </h2>
                                </p>
                                <div>
                                    <ul>
                                    <?php 
                                        if($result->num_rows > 0) {
                                            foreach($result as $row) {           

                                    ?>
                                        <li class="card">
                                            <div class="card-header">
                                                <img src="<?php echo $row['image']?>" class="card-img-top">
                                            </div>
                                            <div class="card-footer">
                                                <h4 class="card-title"><?php echo $row['nom']; ?>
                                            </div>
                                        </li>
                                    <?php
                                        }
                                    } else {
                                        echo "No more data to collect!";
                                    } 
                                    ?>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="container bg-dark" style="position: relative; font-size: 25px; font-family: Segoe UI light; color: white; border-radius: 1rem">
                            
                           <div style="margin-left: 5rem; position: relative; top: 2rem">
                                <p>
                                    Prêt(e) à vous lancer? <br/>
                                    Rejoignez des milliers d'utilisateurs au Cameroun <br/>
                                    et à travers le monde dès aujourd'hui.
                                </p>
                           </div>
                            <div style="justify-content: center; margin-left: 3rem; padding: 2rem">
                                <a href="inscriptionForm"><button class="btn btn-danger">Participer au Financement</button></a>
                                <a href="howItsWork"><button class="btn btn-primary">Comment ça marche?</button></a>
                            </div>
                        </div>
                    </div>

                    <br/>
                    <div>
                        <?php  include "footer.php" ?>
                    </div>
                </div>
            <!--Fin du contenu de la page-->

            <!--Importations des fichiers javascript de bootstrap-->
                <script src="../styles/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
                <!--Fin des importations des fichiers javascript de bootstrap-->
        </body>
    </html>