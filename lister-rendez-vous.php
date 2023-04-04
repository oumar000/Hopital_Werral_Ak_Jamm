<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Werral Ak Jamm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="site_css/style.css">
    <link rel="stylesheet" href="site_css/style-patients.css">
</head>
<body>
    <!--Barre de navigation-->
    <nav id="navbar" class="color-1">
            <section class="container flex-1">
                <img class="image_1" src="Images/image_1.PNG" alt="">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="lister-rendez-vous.php">Réception</a></li>
                    <li><a href="lister-patients.php">Patients</a></li>
                    <li><a href="lister-medecins.php">Médecins</a></li>
                    <li><a href="lister-devoirs.php">Devoirs</a></li>
                    <li><a href="lister-infirmiers.php">Infirmiers</a></li>
                    <li><a href="lister-hospitalisations.php">Hospitalisation</a></li>
                </ul>
            </section>
    </nav>
        <section class="my-5">
            <div class="container my-5">
                <h1>Liste des Rendez-vous</h1>
                <a href="creer-rendez-vous.php" class="btn btn-primary" role="button">Nouveau Rendez-vous</a>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id_RV</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénoms</th>
                            <th scope="col">Motif Rendez-vous</th>
                            <th scope="col">Date Rendez-vous</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    <?php
                    $sql ="select * from `Rendez_Vous`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)) {
                            $id_RV=$row["id_RV"];
                            $Nom=$row["Nom"];
                            $Prenom=$row["Prenom"];
                            $motif_RV=$row["motif_RV"];
                            $date_RV=$row["date_RV"];
                           
                            echo' <tr>
                            <th scope="row">'.$id_RV.'</th>
                            <td>'.$Nom.'</td>
                            <td>'.$Prenom.'</td>
                            <td>'.$motif_RV.'</td>
                            <td>'.$date_RV.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="modifier-rendez-vous.php?updateid='.$id_RV.'" class="text-light">Modifier</a></button>
                            <button class="btn btn-danger"><a href="supprimer-rendez-vous.php?deleteid='.$id_RV.'" class="text-light">Supprimer</a></button>
                            </td>
                            </tr>';
                        }
                        
                    }
                    ?>
                    
                    </tbody>
                </table>
            </div>
        </section>
</body>
</html>