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
        <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Vous pouvez leur apporter <br><i style="color: darkorange">votre soutien</i>...</h2>
        <h5 style="font-family: Segoe UI light; font-size: 15px; padding: 25px; text-decoration: underline">Quelques associations</h5>
    </div>
    <div>
        <ul>
        <ul>
            <?php 
                if($result->num_rows > 0) {
                    foreach($result as $row) {           

            ?>
                <li class="card">
                    <div class="card-header">
                        <img src="<?php echo $row['image']?>" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['nom']; ?>
                        <p class="card-text"><?php echo $row['resume']; ?></p>
                    </div>
                </li>
            <?php
                    }
                } else {
                echo "No more data to collect!";
            } 
            ?>
    </div>
</div>


    <?php include 'footer.php'; ?>
</body>
</html>