
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['approve']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $approve_id){
        $approve_id = (int)$approve_id;        
        $sql= mysqli_query($mysqli, "UPDATE loans set loan_status='ongoing' WHERE id='$approve_id'");

        if($sql){

        	header("Location:../manage-loans.php");
        }else{

        	echo "<script>";echo " alert('Loan was not approved');window.location.href='../manage-loans.php';</script>";
        }
     
    }


}



?>