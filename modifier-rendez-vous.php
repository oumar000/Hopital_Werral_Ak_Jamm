<?php
include 'connect.php';
$Nom="";
$Prenom="";
$motif_RV="";
$date_RV="";

$id_RV=$_GET['updateid'];
$sql = "select * from `rendez_vous` where id_RV=$id_RV";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$Nom=$row["Nom"];
$Prenom=$row["Prenom"];
$motif_RV=$row["motif_RV"];
$date_RV=$row["date_RV"];

if(isset($_POST['submit'])){
    $Nom=$_POST["Nom"];
    $Prenom=$_POST["Prenom"];
    $motif_RV=$_POST["motif_RV"];
    $date_RV=$_POST["date_RV"];

    //Modifier un patient dans la base de données
    $sql = " update `rendez_vous` set id_RV=$id_RV,Nom='$Nom',Prenom='$Prenom',motif_RV='$motif_RV',date_RV='$date_RV' where id_RV=$id_RV";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location: lister-rendez-vous.php');
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
                    <h1>Rendez-vous</h1>
                <form class="p-left" method="POST">
                    <div>
                    <div class="form">
                                <label for="lastname">Nom</label>
                                <input type="text" name="Nom" id="lastname" value="<?php echo $Nom; ?>">
                            </div>
                            <div class="form">
                                <label for="firstname">Prenom</label>
                                <input type="text" name="Prenom" id="firstname" value="<?php echo $Prenom; ?>">
                            </div>
                            <div class="form">
                                <label for="motifRV">motif_RV</label>
                                <input type="text" name="motif_RV" id="date" value="<?php echo $motif_RV; ?>">
                            </div>
                            <div class="form">
                                <label for="motifRV">date_RV</label>
                                <input type="date" name="date_RV" id="date" value="<?php echo $date_RV; ?>">
                            </div>

                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a href="" class="btn btn-outline-primary" href="lister-patients.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </section>
</body>
</html>