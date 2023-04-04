<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $Num_hospitalisation = $_GET['deleteid'];

    $sql = "delete from `hospitalisation` where Num_hospitalisation=$Num_hospitalisation";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-hospitalisations.php');
    }else{
        die(mysqli_error($con));
    }
}
?>