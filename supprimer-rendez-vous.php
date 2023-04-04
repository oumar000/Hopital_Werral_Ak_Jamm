<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $id_RV = $_GET['deleteid'];

    $sql = "delete from `rendez_vous` where id_RV=$id_RV";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-rendez-vous.php');
    }else{
        die(mysqli_error($con));
    }
}
?>