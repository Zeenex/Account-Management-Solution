<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['complete']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $complete_id){
        $complete_id = (int)$complete_id;        
        $sql= mysqli_query($mysqli, "UPDATE purchaseitem set purchase_status='complete' WHERE id='$complete_id'");

        if($sql){

        	header("Location:../view-elect.php");
        }else{

        	echo "<script>";echo " alert('Electronics purchase was not approved');window.location.href='../view-elect.php';</script>";
        }
     
    }


}



?>