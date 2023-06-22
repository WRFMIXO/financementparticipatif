<?php 
    //Vérifier si l'utilisateur clique sur le lien de déconnexion
    if(isset($_POST['logout'])) {
        //détruire la session et toutes les données associées
        $_SESSION['logged_in'] = false;
        if($_SESSION['logged_in'] === false){
            sleep(1);
            header("location: index");
        }
        session_destroy();
        //Rediriger l'utilisateur vers la page d'accueil
        sleep(5);
        header("location: index");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sidebar and Navbar Example</title>
    <link rel="stylesheet" type="text/css" href="../../pages/styles/sidebar.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../pages/styles/index.css">
</head>
<body>
    <div class="sidebar bg-dark">
        <h2>SmileFund</h2>
        <ul>
            <hr>
            <h5>Utilisateur</h5>
            <li><a href="../../pages/accueil/index">Accueil</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Notifications</a></li>
            <hr>
            <h5>Personnalisation</h5>
            <li><a href="#">Paramètres</a></li>
            <hr>
            <h5>Déconnexion</h5>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <button type="submit" name="logout" class="btn btn-outline"><img src="../icones/Logout.png" id="logout"></img></button>
            </form>
        </ul>
    </div>
</body>
</html>



