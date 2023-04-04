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
            <h1>Liste des Patients</h1>
            <a href="creer-patients.php" class="btn btn-primary" role="button">Nouveau Patient</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Num_dossier</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Date_de_naissance</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Sexe</td>
                        <th scope="col">Antecedent Medical</th>
                        <th scope="col">Groupe sanguin</th>
                        <th scope="col">id_medecin</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql ="select * from `patient`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)) {
                        $Num_dossier=$row["Num_dossier"];
                        $Nom_patient=$row["Nom_patient"];
                        $Prenom_patient=$row["Prenom_patient"];
                        $Date_de_naissance=$row["Date_de_naissance"];
                        $Ad_patient=$row["Ad_patient"];
                        $Tel_patient=$row["Tel_patient"];
                        $Sexe=$row["Sexe"];
                        $Antecedent_Medical=$row["Antecedent_Medical"];
                        $Groupe_sanguin=$row["Groupe_sanguin"];
                        $Num_medecin=$row["Num_medecin"];
                        echo' <tr>
                        <th scope="row">'.$Num_dossier.'</th>
                        <td>'.$Nom_patient.'</td>
                        <td>'.$Prenom_patient.'</td>
                        <td>'.$Date_de_naissance.'</td>
                        <td>'.$Ad_patient.'</td>
                        <td>'.$Tel_patient.'</td>
                        <td>'.$Sexe.'</td>
                        <td>'.$Antecedent_Medical.'</td>
                        <td>'.$Groupe_sanguin.'</td>
                        <td>'.$Num_medecin.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="modifier-patients.php?updateid='.$Num_dossier.'" class="text-light">Modifier</a></button>
                        <button class="btn btn-danger"><a href="supprimer-patients.php?deleteid='.$Num_dossier.'" class="text-light">Supprimer</a></button>
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