<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="../../pages/styles/cagnoteForm.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../pages/styles/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: Démarrez une cagnotte pour vous</title>
</head>
<body>
    <?php 
        require_once '../scripts/dbconnectionScript.php';
        include 'header.php';
    ?>
    <div class="container">
        <div>
            <p>
                <p>Vous êtes porteur de projets, une ambition à réaliser, mais vous n'avez pas les moyens?</p>
                <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px; color:darkgray">Démarrez votre propre <br/>cagnotte. . .</h2>
                <h5 style="font-family: Segoe UI light; font-size: 30px; margin-left: 45px; color:darkorange">en remplissant ce formulaire</h5>
            </p>
        </div>
    </div>


    <?php 
        include '../../composants/components/footer.php';
    ?>
</body>
</html>