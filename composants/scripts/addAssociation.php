<?php
session_start();
    require_once 'dbconnectionScript.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // On récupère les données du formulaire
        $nomAssociation = $_POST['nom'];
        $resume = $_POST['resume'];
        $localisation = $_POST['pays'];
        $mail = $_POST['mail'];
    
        // On génère le code unique de l'association en utilisant la première lettre du nom
        function genererCodeUnique($longueur, $nom) {
            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $code = '';
            $caracteres_length = strlen($caracteres);
    
            for ($i = 0; $i < $longueur; $i++) {
                $random_index = rand(0, $caracteres_length - 1);
                $code .= $caracteres[$random_index];
            }
    
            $code = strtoupper($nom[0]) . $code; // Ajoute la première lettre du nom en majuscule au début du code
            return $code;
        }
    
        $code_unique = genererCodeUnique(20, $nomAssociation);
    
        // On récupère l'ID de l'utilisateur connecté
        $getUserId = "SELECT id FROM users WHERE mail = '".$_SESSION["user"]."'";
        $uId = $conn->query($getUserId);
    
        if (!$uId) {
            die('Erreur dans la requête'.$conn->error);
        } else {
            if ($uId->num_rows > 0) {
                $row = $uId->fetch_assoc();
                $userId = $row['id'];
                // Insertion des données dans la base de données
                $insertRequest = "INSERT INTO associations(code_assoc, nom, resume, localisation, mail, userId) VALUES('$code_unique', '$nomAssociation', '$resume', '$localisation', '$mail', '$userId')";
                if ($conn->query($insertRequest) === TRUE) {
                    echo '<div class="container bg-success" style="height: 300px;"><p> Votre projet a bien été créé!</p></div>';
                    echo 'Redirection';
                    sleep(3);
                    header("location: ../components/userDashboard?user=".$_SESSION['user']);
                } else {
                    echo "Oups... Quelque chose s'est mal passé!";
                    sleep(1);
                    header("location: ../components/createAssociationForm?user=".$_SESSION['user']);
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