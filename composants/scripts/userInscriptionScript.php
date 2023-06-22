<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" href="../../pages/styles/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
    require_once 'dbconnectionScript.php';

    //Vérification de la soumission du formulaire
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Collecte des données du formulaire
        $name = $_POST["nom"];
        $surname = $_POST["prenom"];
        $mail = $_POST["email"];
        $pass = $_POST["motdepasse"];
        $adress = $_POST["adresse"];
        $city = $_POST["ville"];
        $country = $_POST["pays"];

        //Vérification des champs identiques dans la base de données pour éviter les doublons
        $sql = "SELECT * FROM users WHERE mail = '$mail'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            echo "L'adresse email existe déjà! Choisissez en une autre";
        } else{
            //Insertion des données dans la base de données après récupération de celles ci
            $sql = "INSERT INTO users(nom, prenom, mail, pass, adress, city, country) VALUES('$name', '$surname', '$mail', '$pass',
            '$adress', '$city', '$country')";

            if($conn->query($sql) === TRUE) {
        ?>
<div class="alert-success">
    <p>Vous vous êtes inscrit avec succès</p>
    <?php 
    sleep(3);
    header("location:../components/connexionForm"); ?>
</div>
<?php
        } else {

?>
<div class="alert-warning">
    <?php echo "Echec de l'inscription: ";
    sleep(2);
    header("location: ../components/inscriptionForm");
        }
    }
}
    ?> 
</div>
