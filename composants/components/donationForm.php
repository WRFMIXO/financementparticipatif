<?php

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
            <form action="https://www.paypal.com/donate" method="post" target="_top">
                <input type="hidden" name="hosted_button_id" value="DXVTCNSCY7SC8" />
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                <img alt="" border="0" src="https://www.paypal.com/en_CM/i/scr/pixel.gif" width="1" height="1" />
            </form>
        </div>
    </div>


    <?php include 'footer.php'; ?>
</body>
</html>