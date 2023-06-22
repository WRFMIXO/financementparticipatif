<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="background-image">
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-lg bg-light" id="navbar">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="index" id="navbar-brand">
                                        <h1>SmileFund</h1>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="index"> <!--<img src="../../composants/icones/home.png">--> Acceuil </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="listProjets"> <!--<img src="../../composants/icones/audience.png">--> Projets </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="listAssociations"> <!--<img src="../../composants/icones/audience.png">--> Associations </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="howItsWork"> <!--<img src="../../composants/icones/ask_question.png">--> Comment ça marche </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="aboutPage"> <!--<img src="../../composants/icones/about.png">--> A propos </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contactPage"> <!--<img src="../../composants/icones/customer_support.png">--> Contacts </a>
                                            </li>
                                        </ul>
                                        
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Faites une recherche" aria-label="Search">
                                            <button class="btn btn-danger" id="rechercher"><img src="../../composants/icones/search3.png"></button>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>

                        <div id="textUpside">
                            <h1 id="textUpsideValue">Votre plateforme <br/> de financement <br/> participatif</h1>

                            <br/>
                            <br/>

                            <a href="listProjets"><button class="btn btn-danger" id="support"><img src="../../composants/icones/stack_of_money.png"> Soutenir un projet</button></a>
                        </div>
                    </div>


                    <!--Importations des fichiers javascript de bootstrap-->
                <script src="../../pages/styles/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
                <script src="../../pages/styles/bootstrap/js/bootstrap.js" crossorigin="anonymous"></script>
                <script src="../../pages/styles/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
                <!--Fin des importations des fichiers javascript de bootstrap-->
    
</body>
</html>