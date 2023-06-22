<?php
session_start();
    require_once 'dbconnectionScript.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //On récupère les données du formulaire
        $nomprojet = $_POST['nom'];
        $objectif = $_POST['objectif'];
        $statut = 0;
        //On récupère l'ID de l'utilisateur connecté
        $getUserId = "SELECT id FROM users WHERE mail = '".$_SESSION["user"]."'";
        $uId = $conn->query($getUserId);
        if(!$uId){
            die('Erreur dans la requête'.$conn->error);
        } else {
            if($uId->num_rows > 0) {
                $row = $uId->fetch_assoc();
                $userId = $row['id'];
                //Insertion des données dans la base de données
        $insertRequest = "INSERT INTO projets(nom, objectif, statut, user) VALUES('$nomprojet', '$objectif', '$statut', '$userId')";
        if($conn->query($insertRequest) === TRUE) {
            echo '<div class="container bg-success" style="height: 300px;"><p> Votre projet a bien été créé!</p></div>';
            echo 'Redirection';
            sleep(3);
            header("location: ../components/userDashboard?user=".$_SESSION['user']);
        } else {
            echo "Oups... Quelque chose s'est mal passé!";
            sleep(1);
            header("location: ../components/projectForm?user=".$_SESSION['user']);
        }
            }
        
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection</title>
</head>
<body>
    
</body>
</html>