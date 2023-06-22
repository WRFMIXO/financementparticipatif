<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../pages/styles/listProjets.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../pages/styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../pages/styles/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileFund: Donnez du sourire grâce à votre soutien</title>
</head>
<body>
<?php 
require_once '../../composants/scripts/dbconnectionScript.php';
include '../../composants/components/header.php';

    $stateList = array(
        'pending',
        'finished',
        'not started'
    );

    //Récupération de tous les projets dont le statut est "en cours (pending)"
    $state = $stateList[0];
    $sql = "SELECT * FROM projets WHERE etat = '$state'";
    $result = $conn->query($sql);
    
?>
    <div class="container-fluid">
        <div>
            <p>
                <h2 style="font-family: Segoe UI light; font-size: 50px; margin-left: 45px;">Liste des projets</h2>
            </p>
            <p>Faites le tour avant de vous lancer</p>
            <div class="container-fluid" id="pending">
                <p>
                    <h4 style="font-family: Segoe UI light; font-size: 30px; ">Projets en cours</h4>
                </p>
                <div style="justify-content: center; text-align: center">
                    <?php 
                        if($result->num_rows > 0){

                            while($row = $result->fetch_assoc()) {
                    ?>
                    <li class="card bg-dark" id="cardProject">
                        <img src="<?php echo $row['image'].'jpg'; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                            <p class="card-text">
                                <label> Objectif de collecte :</label>
                                <?php
                                  echo $row['objectif'].'XAF'; 
                                ?>
                                <br/>
                                <label> Etat du projet :</label>
                                <?php echo $row['etat']; ?>
                                <br/>
                                <label> Projet de : </label>
                                <?php
                                    $uid = $row['user'];
                                    $getUsername = "SELECT * FROM users WHERE id='$uid'";
                                    $resultat = $conn->query($getUsername);
                                    if($row2 = $resultat->fetch_assoc()){
                                        echo $row2['nom'].' '.$row2['prenom'];
                                ?>
                                <br/>
                                <label> Contacts : </label>
                                <?php 
                                        echo $row2['mail'];
                                    }
                                ?>
                        </div>
                        <div class="card-footer bg-dark" id="card-project-footer">
                            <a href=""><button class="btn btn-success" id="actions"><img src="../../composants/icones/Transfer Money.png" width="25px"> Soutenir</button></a>
                            <a href=""><button class="btn btn-danger" id="actions"><img src="../../composants/icones/info.png" width="25px"> Voir les détails</button></a>
                        </div>
                        <?php
                         }
                        ?>
                    </li>
                    <?php 
                        } else {
                            echo "Pas de projets trouvés";
                        }
                    ?>
                </div>
            </div>
            <?php 
                //Récupération de tous les projets dont le statut est "pas encore approuvé (not started)"
                $state = $stateList[2];
                $sql = "SELECT * FROM projets WHERE etat = '$state'";
                $result = $conn->query($sql);
            ?>
            <div class="container-fluid" id="pending">
                <p>
                    <h4 style="font-family: Segoe UI light; font-size: 30px;">Projets en attente de validation</h4>
                </p>
                <div>
                    <?php 
                        if($result->num_rows > 0){

                            while($row = $result->fetch_assoc()) {
                    ?>
                    <li class="card bg-secondary" id="cardProjectWaiting">
                        <img src="<?php echo $row['image']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                            <p class="card-text">
                                <label> Objectif de collecte :</label>
                                <?php
                                  echo $row['objectif'].'XAF'; 
                                ?>
                                <br/>
                                <label> Etat du projet :</label>
                                <?php echo $row['etat']; ?>
                                <br/>
                                <label> Projet de : </label>
                                <?php
                                    $uid = $row['user'];
                                    $getUsername = "SELECT * FROM users WHERE id='$uid'";
                                    $resultat = $conn->query($getUsername);
                                    if($row2 = $resultat->fetch_assoc()){
                                        echo $row2['nom'].' '.$row2['prenom'];
                                ?>
                                <br/>
                                <label> Contacts : </label>
                                <?php 
                                        echo $row2['mail'];
                                    }
                                ?>
                        </div>
                        <div class="card-footer bg-secondary" id="card-project-footer">
                            <a href=""><button class="btn btn-danger" id="actions"><img src="../../composants/icones/info.png" width="25px"> Voir les détails</button></a>
                        </div>
                        <?php
                         }
                        ?>
                    </li>
                    <?php 
                        } else {
                            echo "Pas de projets trouvés";
                        }
                    ?>
                </div>
                </div>
            </div>
        </div>
    </div>


<?php include '../../composants/components/footer.php';?>
</body>
</html>