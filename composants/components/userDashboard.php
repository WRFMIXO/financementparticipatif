<?php
require '../../composants/scripts/dbconnectionScript.php';
session_start();
    $connectedMail = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE mail='$connectedMail'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];

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
    <title>SmileFund: User Dashboard</title>
</head>
<body>
    <?php 
        include "../../composants/components/userSidebar.php";
    ?>
    <div class="content">        
        <div class="container-fluid">
        <h2 class="mb-3" style="color: darkorange">Dashboard de : <?php echo $_SESSION['user']; ?></h2>
            <div style="justify-content: center; text-align: center">
                <ul>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">Mes Investissements</h5>
                        <div class="card-body">
                            <h1 class="card-text"> 0 </h1>
                        </div>
                    </li>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">Mes Donations</h5>
                        <div class="card-body">
                            <h1 class="card-text"> 0 </h1>
                        </div>
                    </li>
                    <li class="card bg-dark" id="upCards">
                        <h5 class="card-title">Mes projets</h5>
                        <div class="card-body">
                            <h1 class="card-text"><?php
                                $getProjects = "SELECT * FROM projets WHERE user = ".$_SESSION['id'];
                                $projects = $conn->query($getProjects);

                                if($projects) {
                                    $rowCount = $projects->num_rows;
                                }
                                echo $rowCount;
                            ?></h1>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>