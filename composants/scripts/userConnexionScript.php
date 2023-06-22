<?php 
session_start();
require_once 'dbconnectionScript.php';

//Verification de la soumission du formulaire
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Récupération des données du formulaire
    $mail = $_POST["email"];
    $pass = $_POST["motdepasse"];

    //Vérification de la correspondance dans la base de données
    $sql = "SELECT * FROM users WHERE mail = '$mail' AND pass='$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        //Vérification de l'état de la variable de session
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo "Déja connecté";
            sleep(1);
            header("location:../components/userDashboard?user=".$_SESSION['user']);
        } else {
            //Vérification du type de compte
            while($row = $result->fetch_assoc()) {
                $usertype = $row['usertype'];
                if($usertype === "user") {
                //Stockage des valeurs récupérées dans la variable de session
                    $_SESSION['user'] = $mail;
                    $_SESSION['logged_in'] = true;
                    sleep(5);
                    header("location:../components/userDashboard?user=".$_SESSION['user']);
                } elseif($usertype === "admin") {
                    $_SESSION['admin'] = $mail;
                    $_SESSION['logged_in'] = true;
                    sleep(5);
                    header("location:../components/adminDashboard?admin=".$_SESSION['admin']);
                } else {
                    $_SESSION['logged_in'] = false;
                    echo "Informations incorrectes ";
                    sleep(3);
                    header("location: ../components/connexionForm.php");
                }
            }
        }
    }

    $conn->close();
}