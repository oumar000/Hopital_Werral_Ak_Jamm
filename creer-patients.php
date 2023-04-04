<?php
include 'connect.php';
$Nom_patient="";
$Prenom_patient="";
$Date_de_naissance="";
$Ad_patient="";
$Tel_patient="";
$Sexe="";
$Antecedent_Medical="";
$Groupe_sanguin="";
$Num_medecin="";
if(isset($_POST['submit'])){
    $Nom_patient=$_POST["Nom_patient"];
    $Prenom_patient=$_POST["Prenom_patient"];
    $Date_de_naissance=$_POST["Date_de_naissance"];
    $Ad_patient=$_POST["Ad_patient"];
    $Tel_patient=$_POST["Tel_patient"];
    $Sexe=$_POST["Sexe"];
    $Antecedent_Medical=$_POST["Antecedent_Medical"];
    $Groupe_sanguin=$_POST["Groupe_sanguin"];
    $Num_medecin=$_POST["Num_medecin"];

    //Inserer un nouveau patient dans la base de données
    $sql = "INSERT INTO `patient` (Nom_patient, Prenom_patient, Date_de_naissance, Ad_patient, Tel_patient, Sexe, Antecedent_Medical, Groupe_sanguin, Num_medecin) VALUES('$Nom_patient', '$Prenom_patient','$Date_de_naissance','$Ad_patient','$Tel_patient','$Sexe', '$Antecedent_Medical', '$Groupe_sanguin', '$Num_medecin')";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:lister-patients.php');
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
                    <h1>Dossier Patients</h1>
                    <p>Remplissez pour compléter votre dossier</p>
                <form class="p-left" method="POST">
                    <div>
                            <div class="form">
                                <label for="lastname">Nom</label>
                                <input type="text" name="Nom_patient" id="lastname" value="<?php echo $Nom_patient; ?>">
                            </div>
                            <div class="form">
                                <label for="firstname">Prénoms</label>
                                <input type="text" name="Prenom_patient" id="firstname" value="<?php echo $Prenom_patient; ?>">
                            </div>
                            <div class="form">
                                <label for="dateNaissance">Date de Naissance</label>
                                <input type="date" name="Date_de_naissance" id="date" value="<?php echo $Date_de_naissance; ?>">
                            </div>
                            <div class="form">
                                <label for="text">Adresse</label>
                                <input type="adresse" name="Ad_patient" id="adresse" value="<?php echo $Ad_patient; ?>">
                            </div>
                            <div class="form">
                                <label for="number">Tél:</label>
                                <input type="number" name="Tel_patient" id="number" value="<?php echo $Tel_patient; ?>">
                            </div>
                        
                            <div class="form">
                                <label for="sexe">Sexe</label>
                                <input type="text" name="Sexe" id="sexe" value="<?php echo $Sexe; ?>">
                            </div>
                            <div class="form">
                                <label for="antecendent">Antécédents</label>
                                <input type="text" name="Antecedent_Medical" id="antecedents" value="<?php echo $Antecedent_Medical; ?>">
                            </div>
                            <div class="form">
                                <label for="groupeSanguin">Groupe Sanguin</label>
                                <input type="text" name="Groupe_sanguin" id="groupeSanguin" value="<?php echo $Groupe_sanguin; ?>">
                            </div>
                            <div class="form">
                                <label for="medecinTraitant">Médecin Traitant</label>
                                <input type="number" name="Num_medecin" id="medecinTraitement" value="<?php echo $Num_medecin; ?>">
                            </div>

                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a href="" class="btn btn-outline-primary" href="index-patients.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
            <footer id="main-footer">
                <p>Vous avez deja un compte ?<a href="#"class=link>Connectez vous</a></p>
            </footer>
        </div>

    </section>
</body>
</html>