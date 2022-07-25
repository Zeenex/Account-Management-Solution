<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['complete']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $complete_id){
        $complete_id = (int)$complete_id;        
        $sql= mysqli_query($mysqli, "UPDATE loans set loan_status='complete' WHERE id='$complete_id'");

        if($sql){

        	header("Location:../manage-loans.php");
        }else{

        	echo "<script>";echo " alert('Loan was not completed');window.location.href='../manage-loans.php';</script>";
        }
     
    }


}



?>