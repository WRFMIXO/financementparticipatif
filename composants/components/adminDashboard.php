<?php
require '../../composants/scripts/dbconnectionScript.php';
session_start();
    $connectedMail = $_SESSION['admin'];
    $sql = "SELECT * FROM users WHERE mail='$connectedMail'";
    $result=$conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="../../pages/styles/userDashboard.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/index.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: Administration Panel</title>
</head>
<body>
    <?php 
        include "../../composants/components/adminSidebar.php";
    ?>
    <div class="content">        
        <div class="container-fluid">
            <div style="justify-content: center; text-align: center">
                <ul>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">Pas encore Terminés</h5>
                        <div class="card-body">
                            <h1 class="card-text"> 0 </h1>
                        </div>
                    </li>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">Terminés</h5>
                        <div class="card-body">
                            <h1 class="card-text"> 0 </h1>
                        </div>
                    </li>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">En attente</h5>
                        <div class="card-body">
                            <h1 class="card-text"> 0 </h1>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="justify-content: center; text-align: center">
                
            </div>
        </div>
    </div>
</body>
</html>