<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $Num_infirmier = $_GET['deleteid'];

    $sql = "delete from `infirmier` where Num_infirmier=$Num_infirmier";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-infirmiers.php');
    }else{
        die(mysqli_error($con));
    }
}
?>