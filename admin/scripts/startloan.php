
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['start']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $start_id){
        $start_id = (int)$start_id;        
        $sql= mysqli_query($mysqli, "UPDATE loans set loan_status='ongoing' WHERE id='$start_id'");

        if($sql){

        	header("Location:../manage-loans.php");
        }else{

        	echo "<script>";echo " alert('Loan was not started');window.location.href='../manage-loans.php';</script>";
        }
     
    }


}



?>