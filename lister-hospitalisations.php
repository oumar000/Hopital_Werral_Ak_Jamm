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
            <h1>Liste des Hospitalisations</h1>
            <a href="creer-hospitalisations.php" class="btn btn-primary" role="button">Nouvelle Hospitalisation</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Numéro hospitalisation</th>
                        <th scope="col">Motif</th>
                        <th scope="col">Date d'entrée</th>
                        <th scope="col">Date de sortie</th>
                        <th scope="col">Numéro Chambre</th>
                        <th scope="col">Numéro Dossier</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $sql ="select * from `hospitalisation`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)) {
                        $Num_hospitalisation=$row["Num_hospitalisation"];
                        $Motif_dhosp=$row["Motif_dhosp"];
                        $Date_dentree=$row["Date_dentree"];
                        $Date_sortie=$row["Date_sortie"];
                        $num_chambre=$row["num_chambre"];
                        $num_dossier=$row["num_dossier"];
                        echo' <tr>
                        <th scope="row">'.$Num_hospitalisation.'</th>
                        <td>'.$Motif_dhosp.'</td>
                        <td>'.$Date_dentree.'</td>
                        <td>'.$Date_sortie.'</td>
                        <td>'.$num_chambre.'</td>
                        <td>'.$num_dossier.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="modifier-hospitalisations.php?updateid='.$Num_hospitalisation.'" class="text-light">Modifier</a></button>
                        <button class="btn btn-danger"><a href="supprimer-hospitalisations.php?deleteid='.$Num_hospitalisation.'" class="text-light">Supprimer</a></button>
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