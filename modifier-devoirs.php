<?php
include 'connect.php';
$titre="";
$Num_medecin="";


$id_devoir=$_GET['updateid'];
$sql = "select * from `devoir` where id_devoir=$id_devoir";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$titre=$row["titre"];
$Num_medecin=$row["Num_medecin"];

if(isset($_POST['submit'])){
    $titre=$_POST["titre"];
    $Num_medecin=$_POST["Num_medecin"];


    //Modifier un devoir dans la base de données
    $sql = " update `devoir` set id_devoir=$id_devoir,titre='$titre',Num_medecin='$Num_medecin' where id_devoir=$id_devoir";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location: lister-devoirs.php');
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
                                <label for="titre">Titre</label>
                                <input type="text" name="titre" id="titre" value="<?php echo $titre; ?>">
                            </div>
                            <div class="form">
                                <label for="Num_medecin">Num_medecin</label>
                                <input type="text" name="Num_medecin" id="Num_medecin" value="<?php echo $Num_medecin; ?>">
                            </div>

                    </div>     
                    <div class="row mb-3 mt">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Modifier</button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="lister-devoirs.php">Retour</a>
                        </div>
                    </div>
                </form>  
            </div>
        </div>

    </section>
</body>
</html>