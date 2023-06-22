<?php
    session_start();
    require_once '../scripts/dbconnectionScript.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="../../pages/styles/profil.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/index.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: User Dashboard</title>
</head>
<body>
    <?php 
        include "../../composants/components/userSidebar.php"; 
    ?>
    <div class="content">
                
        <?php
            $connectedMail = $_SESSION['user'];
        
            if(isset($_SESSION['user'])) {
                $sql = "SELECT * FROM users WHERE mail='$connectedMail'";
                $result=$conn->query($sql);
    
                while($row = $result->fetch_assoc()) {
        ?>
        <div class="container" style="padding: 2rem">
        <a href="userDashboard"<?php echo '?'.$_SESSION['user'];?>><button class="btn btn-outline-secondary">Retour</button></a>
            <h2 class="mb-3" style="color: gray">Informations Personnelles</h2>
            <div class="container">
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Identifiant :</label><?php echo ' '.$row['id']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Nom :</label><?php echo' '.$row['nom']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Prénom :</label><?php echo ' '.$row['prenom']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Adresse e-mail :</label><?php echo ' '.$row['mail']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Adresse :</label><?php echo ' '.$row['adress']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Ville de résidence :</label><?php echo ' '.$row['city']; ?>
                </p>
                <p style="font-family: Segoe UI light; font-size: 22px">
                    <label style="font-family: Segoe UI light; font-size: 20px; ">Pays de résidence :</label><?php echo ' '.$row['country']; ?>
                </p>

            </div>
            <a href="updateUser"<?php echo '?'.$_SESSION['user']; ?>><button class="btn btn-primary">Mettre à jour mes informations</button></a>
            <br>
            <br>
        </div>
        <?php
                }
            }
        ?>
    </div>
</body>
</html>