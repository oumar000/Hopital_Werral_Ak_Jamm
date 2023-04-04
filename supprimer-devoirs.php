<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $id_devoir = $_GET['deleteid'];

    $sql = "delete from `devoir` where id_devoir=$id_devoir";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: lister-devoirs.php');
    }else{
        die(mysqli_error($con));
    }
}
?>