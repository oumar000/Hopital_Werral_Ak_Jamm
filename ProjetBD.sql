-- Création du shema de la base de données HOPITAL WERRAL AK JAMM

create database hopital_WeRRaL_Ak_JaMM;
USE  hopital_WeRRaL_Ak_JaMM;

-- Création de la table Medecin
CREATE TABLE medecin(
	Num_medecin Integer primary key auto_increment ,
    Nom_medecin VARCHAR(40) NOT NULL,
    Prenom_medecin VARCHAR (10) NOT NULL,
    specialité VARCHAR(100) NOT NULL,
    Tel_medecin CHAR (9) NOT NULL,
    Ad_medecin VARCHAR (20) NOT NULL,
    id_devoir VARCHAR(40) NOT NULL REFERENCES Medecin(Num_medecin)
    );


    
-- Création de la table patient
CREATE TABLE patient(
	Num_dossier Integer primary key auto_increment,
    Nom_patient VARCHAR(40) NOT NULL,
    Prenom_patient VARCHAR (50) NOT NULL,
    Date_de_naissance DATE NOT NULL, 
    Ad_patient VARCHAR (50) NOT NULL,
    Tel_patient INT (9) NOT NULL, 
    Sexe enum('M','F'),
    Antecedent_Medical VARCHAR (50) NOT NULL,
    Groupe_sanguin VARCHAR(20),
    Num_medecin INT(4) NOT NULL REFERENCES Medecin(Num_medecin)
    );
INSERT INTO patient ( Nom_patient, Prenom_patient, Date_de_naissance,Ad_patient, Tel_patient, Sexe,Antecedent_Medical, Groupe_sanguin, Num_medecin) 
VALUES ( 'POUYE', 'Maréme', '1978-09-13','SICAP MBAO', '770123436', 'F','Neant' ,'O', '5'),
		('NDIAYE', 'Omar', '1989-10-17','FASS MBAO', '770123453', 'M', 'Diabetique' ,'AB', '2'),
		( 'MBAYE', 'ALY', '2003-12-17', 'GRAND MBAO', '770123425', 'M','Operation' ,'B', '3');

-- Création de la table infirmier
CREATE TABLE infirmier(
	Num_infirmier Integer primary key auto_increment,
    Nom_infirmier VARCHAR(40) NOT NULL,
    Prenom_infirmier VARCHAR (10) NOT NULL,
    Tel_infirmier CHAR (9) NOT NULL,
    Ad_infirmier VARCHAR (20) NOT NULL
    );

-- Création de la table Receptionniste
CREATE TABLE reception(
	Num_recep Integer primary key auto_increment,
    Nom_recep VARCHAR(40) NOT NULL,
    Prenom_recep VARCHAR (10) NOT NULL,
    Tel_recep CHAR (9) NOT NULL,
    num_dossier VARCHAR(40) NOT NULL REFERENCES patient(num_dossier)
    );
INSERT INTO reception (Num_recep, Nom_recep, Prenom_recep,Tel_recep,num_dossier)
 VALUES ('2221', 'GAYE', 'Amy', '761234536','2');

-- Création de la table séjour
CREATE TABLE hospitalisation(
	Num_hospitalisation Integer primary key auto_increment,
    Motif_dhosp VARCHAR(40) NOT NULL,
    Date_dentree DATE NOT NULL,
    Date_sortie DATE NOT NULL,
    num_chambre VARCHAR(100) NOT NULL,
    num_dossier VARCHAR(40) NOT NULL REFERENCES patient(num_dossier)
    );

-- Création de la table Devoir
CREATE TABLE devoir(
	id_devoir Integer primary key auto_increment,
    titre VARCHAR(40) NOT NULL,
    Num_medecin INT(4) NOT NULL REFERENCES Medecin(Num_medecin)
    );

-- Création de la table traitement
CREATE TABLE traitement(
	Num_traitement Integer primary key auto_increment,
    type_traitement VARCHAR(40) NOT NULL,
    Date_traitement DATE NOT NULL,
    Durée_traitement FLOAT NOT NULL,
    Num_medecin VARCHAR(40) NOT NULL REFERENCES Medecin(Num_medecin),
    Num_hospitalisation VARCHAR(40) NOT NULL REFERENCES hospitalisation(Num_hospitalisation)
   
    );
-- Création de la table fournisseur
CREATE TABLE fournisseur(
	Num_fourn Integer primary key auto_increment,
    Nom_fourn VARCHAR(40) NOT NULL,
    Prenom_fourn VARCHAR (10) NOT NULL,
    Tel_fourn CHAR (9) NOT NULL,
    Ad_fourn VARCHAR (20) NOT NULL
    );
    INSERT INTO fournisseur ( Nom_fourn, Prenom_fourn, Tel_fourn,Ad_fourn)
			VALUES ( 'NDIAYE', 'Assane', '771001213', 'Dakar_Plateau'),
					( 'Biteye', 'Rokhaya', '771001233', 'Pikine');


-- Création de la table intendant
CREATE TABLE intendant(
	Num_int Integer primary key auto_increment,
    Nom_int VARCHAR(40) NOT NULL,
    Prenom_int VARCHAR (10) NOT NULL
    );
    INSERT INTO intendant(Nom_int,Prenom_int) VALUES ( 'DIAW', 'Ousmane');

-- Création de la table comptable
CREATE TABLE comptable(
	Num_paiement Integer primary key auto_increment,
    Date_paiement DATE NOT NULL,
    Montant VARCHAR(100) NOT NULL,
    num_dossier VARCHAR(40) NOT NULL REFERENCES patient(num_dossier),
    mode_paiement VARCHAR(20) NOT NULL
    );
    INSERT INTO comptable ( Date_paiement, Montant, num_dossier,mode_paiement) 
    VALUES ( '2022-09-10', '25300', '4', 'Chéque'),
           ( '2023-02-13', '15000', '1', 'Espéce'),
		   ( '2023-02-11', '5300', '3', 'Assurance');



-- Création de la table matériel
CREATE TABLE materiel(
	id_mat Integer primary key auto_increment,
     type_mat VARCHAR(100) NOT NULL,
     duree_mat VARCHAR(100) NOT NULL
    );   

INSERT INTO materiel ( type_mat, duree_mat) 
VALUES ( 'Thermométre','1_mois'),
	   ( 'Gants','Utilisation_unique'),
       ( 'Lit','1_an');
 
-- Création de la table Rendez-Vous
CREATE TABLE rendez_vous(
	id_RV Integer primary key auto_increment,
    Nom VARCHAR(40) NOT NULL,
    Prenom VARCHAR (10) NOT NULL,
	motif_RV VARCHAR(100) NOT NULL,
	date_RV DATE
    );   
