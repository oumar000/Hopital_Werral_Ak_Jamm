<?php
include 'connect.php';
$Num_infirmier="";
$Nom_infirmier="";
$Prenom_infirmier="";
$Tel_infirmier="";
$Ad_infirmier="";

if(isset($_POST['submit'])){
    $Nom_infirmier=$_POST["Nom_infirmier"];
    $Prenom_infirmier=$_POST["Prenom_infirmier"];
    $Tel_infirmier=$_POST["Tel_infirmier"];
    $Ad_infirmier=$_POST["Ad_infirmier"];
    //Inserer un nouvel infirmier dans la base de données
    $sql = "INSERT INTO `infirmier` (Nom_infirmier, Prenom_infirmier, Tel_infirmier, Ad_infirmier) VALUES('$Nom_infirmier', '$Prenom_infirmier','$Tel_infirmier','$Ad_infirmier')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:lister-infirmiers.php');
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
                    <h1>Créer un infirmier</h1>
                <form class="p-left" method="POST">
                    <div>
                            <div class="form">
                                <label for="lastname">Nom</label>
                                <input type="text" name="Nom_infirmier" id="lastname" value="<?php echo $Nom_infirmier; ?>">
                            </div>
                            <div class="form">
                                <label for="firstname">Prénoms</label>
                                <input type="text" name="Prenom_patient" id="firstname" value="<?php echo $Prenom_patient; ?>">
                            </div>
                            <div class="form">
                                <label for="number">Tél:</label>
                                <input type="number" name="Tel_infirmier" id="number" value="<?php echo $Tel_infirmier; ?>">
                            </div>
                            <div class="form">
                                <label for="text">Adresse</label>
                                <input type="adresse" name="Ad_infirmier" id="adresse" value="<?php echo $Ad_infirmier; ?>">
                            </div>
                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="lister-infirmiers.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </section>
</body>
</html>