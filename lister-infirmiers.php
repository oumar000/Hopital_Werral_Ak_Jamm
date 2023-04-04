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
        <div class="my-5">
            <h1>Liste des infirmiers</h1>
            <a href="creer-patients.php" class="btn btn-primary" role="button">Nouvel Infirmier</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Num_infirmier</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Adresse</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql ="select * from `infirmier`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)) {
                        $Num_infirmier=$row["Num_infirmier"];
                        $Nom_infirmier=$row["Nom_infirmier"];
                        $Prenom_infirmier=$row["Prenom_infirmier"];
                        $Tel_infirmier=$row["Tel_infirmier"];
                        $Ad_infirmier=$row["Ad_infirmier"];
                        echo' <tr>
                        <th scope="row">'.$Num_infirmier.'</th>
                        <td>'.$Nom_infirmier.'</td>
                        <td>'.$Prenom_infirmier.'</td>
                        <td>'.$Tel_infirmier.'</td>
                        <td>'.$Ad_infirmier.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="modifier-infirmiers.php?updateid='.$Num_infirmier.'" class="text-light">Modifier</a></button>
                        <button class="btn btn-danger"><a href="supprimer-infirmiers.php?deleteid='.$Num_infirmier.'" class="text-light">Supprimer</a></button>
                        </td>
                        </tr>';
                    }
                    
                }
                ?>
                
                </tbody>
            </table>
        </div>
</body>
</html>