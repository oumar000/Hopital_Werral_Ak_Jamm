<?php
include 'connect.php';

$Motif_dhosp="";
$Date_dentree="";
$Date_sortie="";
$num_chambre="";
$num_dossier="";

if(isset($_POST['submit'])){
    $Motif_dhosp=$_POST["Motif_dhosp"];
    $Date_dentree=$_POST["Date_dentree"];
    $Date_sortie=$_POST["Date_sortie"];
    $num_chambre=$_POST["num_chambre"];
    $num_dossier=$_POST["num_dossier"];

    //Inserer une nouvelle hospitalisation dans la base de données
    $sql = "INSERT INTO `hospitalisation` (Num_hospitalisation, Motif_dhosp, Date_dentree, Date_sortie, num_chambre, num_dossier) VALUES('$Num_hospitalisation', '$Motif_dhosp','$Date_dentree','$Date_sortie','$num_chambre','$num_dossier')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:lister-hospitalisations.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site_css/style-patients.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Werral Ak Jamm</title>
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
    <section id="form">
        <div id="container-form">
            <div id="form-content">
                    <h1>Hospitalisations</h1>
                <form class="p-left" method="POST">
                    <div>
                            <div class="form">
                                <label for="">Motif d'hospitalisation</label>
                                <input type="text" name="Motif_dhosp" id="Motif_dhosp" value="<?php echo $Motif_dhosp; ?>">
                            </div>
                            <div class="form">
                                <label for="dateEntree">Date d'entrée</label>
                                <input type="date" name="Date_dentree" id="date" value="<?php echo $Date_dentree; ?>">
                            </div>
                            <div class="form">
                                <label for="dateSortie">Date de sortie</label>
                                <input type="date" name="Date_sortie" id="date" value="<?php echo $Date_sortie; ?>">
                            </div>
                            <div class="form">
                                <label for="text">Numéro Chambre</label>
                                <input type="text" name="num_chambre" id="adresse" value="<?php echo $num_chambre; ?>">
                            </div>
                            <div class="form">
                                <label for="numDossier">Numéro Dossier</label>
                                <input type="text" name="num_dossier" id="numDossier" value="<?php echo $num_dossier; ?>">
                            </div>
                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a href="" class="btn btn-outline-primary" href="lister-hospitalisations.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </section>
</body>
</html>