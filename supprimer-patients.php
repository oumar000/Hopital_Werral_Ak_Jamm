<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $Num_dossier = $_GET['deleteid'];

    $sql = "delete from `patient` where Num_dossier=$Num_dossier";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-patients.php');
    }else{
        die(mysqli_error($con));
    }
}
?>