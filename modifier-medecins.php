<?php
include 'connect.php';
$Nom_medecin="";
$Prenom_medecin="";
$specialité="";
$Tel_medecin="";
$Ad_medecin="";
$id_devoir="";

$Num_medecin=$_GET['updateid'];
$sql = "select * from `medecin` where Num_medecin=$Num_medecin";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$Nom_medecin=$row["Nom_medecin"];
$Prenom_medecin=$row["Prenom_medecin"];
$specialité=$row["specialité"];
$Ad_medecin=$row["Ad_medecin"];
$Tel_medecin=$row["Tel_medecin"];
$id_devoir=$row["id_devoir"];

if(isset($_POST['submit'])){
    $Nom_medecin=$_POST["Nom_medecin"];
    $Prenom_medecin=$_POST["Prenom_medecin"];
    $specialité=$_POST["specialité"];
    $Tel_medecin=$_POST["Tel_medecin"];
    $Ad_medecin=$_POST["Ad_medecin"];
    $id_devoir=$_POST["id_devoir"];


    //Modifier un medecin dans la base de données
    $sql = " update `medecin` set Num_medecin=$Num_medecin,Nom_medecin='$Nom_medecin',Prenom_medecin='$Prenom_medecin',specialité='$specialité',Tel_medecin='$Tel_medecin',Ad_medecin='$Ad_medecin',id_devoir='$id_devoir'where Num_medecin='$Num_medecin'";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location: lister-medecins.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="site_css/style.css">
    <link rel="stylesheet" href="site_css/style-patients.css">
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
                    <h1>Créer un médecin</h1>
                <form class="p-left" method="POST">
                    <div>
                            <div class="form">
                                <label for="lastname">Nom</label>
                                <input type="text" name="Nom_medecin" id="lastname" value="<?php echo $Nom_medecin; ?>">
                            </div>
                            <div class="form">
                                <label for="firstname">Prénoms</label>
                                <input type="text" name="Prenom_medecin" id="firstname" value="<?php echo $Prenom_medecin; ?>">
                            </div>
                            <div class="form">
                                <label for="spacialité">Spécialité</label>
                                <input type="text" name="specialité" id="specialité" value="<?php echo $specialité; ?>">
                            </div>
                            <div class="form">
                                <label for="number">Tél:</label>
                                <input type="number" name="Tel_medecin" id="number" value="<?php echo $Tel_medecin; ?>">
                            </div>
                            <div class="form">
                                <label for="text">Adresse</label>
                                <input type="adresse" name="Ad_medecin" id="adresse" value="<?php echo $Ad_medecin; ?>">
                            </div>

                            <div class="form">
                                <label for="id_devoir">id_devoir</label>
                                <input type="text" name="id_devoir" id="id_devoir" value="<?php echo $id_devoir; ?>">
                            </div>
                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a href="" class="btn btn-outline-primary" href="lister-medecins.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </section>
</body>
medecin