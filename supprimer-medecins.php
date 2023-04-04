<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $Num_medecin = $_GET['deleteid'];

    $sql = "delete from `medecin` where Num_medecin=$Num_medecin";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-medecins.php');
    }else{
        die(mysqli_error($con));
    }
}
?>