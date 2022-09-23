
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['reject']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $reject_id){
        $reject_id = (int)$reject_id;
              
        $sql= mysqli_query($mysqli, "DELETE from purchaseitem WHERE id='$reject_id'");

        if($sql){

        	header("Location:../view-elect.php");
        }else{

        	echo "<script>";echo " alert('Electronics purchase was rejected');window.location.href='../view-elect.php';</script>";
        }
     
    }


}



?>