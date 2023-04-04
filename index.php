<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/25fdc030cb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="site_css/style.css">
        <link rel="stylesheet" href="site_css/style-patients.css">
        <title>Werral Ak Jamm</title>
    </head>
    <body>
        <!--Barre de navigation-->
        <!--<nav id="main-nav">
            <ul>
                <li><img class="image_1" src="/Images/image_1.PNG" alt=""></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="">Réception <span class="arrow">&#x25BC</span></a>
                    <ul class="sous-menu">
                        <li> <a href="creer-patients.php" class="menu-1">Créer Dossier Patient</a>
                        </li>
                        <li><a href="lister-rendez-vous.php">Rendez-vous</a></li>
                    </ul>
                </li>
                <li><a href="lister-patients.php">Patient</a>
                </li>
                <li><a href="">Personnel Soignant<span class="arrow">&#x25BC</span></a>
                    <ul class="sous-menu">
                        <li><a href="lister-devoirs.php">Devoir</a>
                        </li>
                        <li><a href="lister-medecins.php">Médecins</a>
                        </li>
                        <li><a href="lister-infirmiers.php">Infirmiers</a></li>
                    </ul> 
                </li>
                <li><a href="lister-hospitalisation.php">Hospitalisation</a>
                </li>
            </ul>
        </nav> -->
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
        <!--Page principale-->
        <header id="page_principale">
            <section class="container">
                <div class="container-grid">
                    <div>
                        <h1 class="text-gr">Votre santé notre priorité</h1>
                        <p class="p1">L'hopital "Werral Ak Jamm" est un etablissement hospitalier réputé pour son professionnalisme et sa gestion des divers malades. Avec des matériels de haute technologie et un corps médical expérimenté, cet hopital est l'endroit idéal pour vous remettre sur pied et guérir en paix.</p>
                        <!--<form id="form"> 
                            <input type="Recherche" id="query" name="barre" placeholder="Chercher...">
                            <button>Soumettre</button>
                        </form> -->
                    </div>
                </div>
            </section>
        </header>

        <!--Hopital-->
        <section id="hopital" class="color-2">
            <div class="container-grid ">
                <img class="image-1" src="Images/image-h1.jpg" alt=""> 
                <div class="container write-1 color-3 pad1 list">
                    <h1>Services de soins</h1>
                    <ul>
                        <li>Cardiologie</li>
                        <li>Oncologie</li>
                        <li>Pédiatrie</li>
                        <li>Urgences</li>
                        <li>Chirurgie</li>
                    </ul>
                </div>
            </div>
        </section>

        <!--Lae Corps hospitalier-->
        <section id="corps-hospitalier">
            <div class="container">
                <h1 class="alignement">Le Corps Hospitalier</h1>
                <div class="container-grid2">
                    <div class="middle"><img src="Images/icone-medecins.png" alt=""><br>Médecins</div>
                    <div class="middle"><img src="Images/icone-reception.png" alt=""><br>Réception</div>
                    <div class="middle"><img src="Images/icone-urgences.png" alt=""><br>Urgences</div>
                    <div class="middle"><img class="img-2" src="Images/Infirmiers.png" alt=""><br>Patients</div>
                </div>
            </div>
        </section>
        <!--Bas de Page-->
        <footer id="bas-de-page">
            <div class="container main-footer">
                <div class="footer-1">
                    <p>Veuillez nous contacter sur nos réseaux:</p>
                    <div class="social">
                        <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="http://instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="http://twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                    </div>
                </div>
            </div>
    
        </footer>
    </body>
</html>