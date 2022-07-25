
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['approve']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $approve_id){
        $approve_id = (int)$approve_id;        
        $sql= mysqli_query($mysqli, "UPDATE purchaseitem set purchase_status='ongoing' WHERE id='$approve_id'");

        if($sql){

        	header("Location:../view-elect.php");
        }else{

        	echo "<script>";echo " alert('Electronics purchase was not approved');window.location.href='../view-elect.php';</script>";
        }
     
    }


}



?>