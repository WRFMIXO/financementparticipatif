<?php
    require_once '../scripts/dbconnectionScript.php';

    $sql = "SELECT * FROM associations";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--Importations de fichiers de styles-->
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../pages/styles/index.css">
    <!--Fin des importations des fichiers de styles-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: Donnez du sourire</title>
</head>
<body>
    <?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="container">
        <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Ils travaillent pour vous</h2>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service sécurité</h5>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service analyse</h5>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service déployement</h5>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service vérification</h5>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service client</h5>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline; color: darkorange;D">Service callcenter</h5>
    </div>
    <div>
        <ul>
            <?php
                
            ?>
        </ul>
    </div>
</div>


    <?php include 'footer.php'; ?>
</body>
</html>