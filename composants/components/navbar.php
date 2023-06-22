<!DOCTYPE html>
<html>
<head>
    <!--Importations de fichiers de styles-->
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../pages/styles/index.css">

    <!--Fin des importations des fichiers de styles-->
    <title>Sidebar Example</title>
</head>
<body>
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

    <!--Importations des fichiers javascript de bootstrap-->
                <script src="../styles/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.js" crossorigin="anonymous"></script>
                <script src="../styles/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
                <!--Fin des importations des fichiers javascript de bootstrap-->
</body>
</html>
