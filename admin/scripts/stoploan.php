
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['stop']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $stop_id){
        $stop_id = (int)$stop_id;        
        $sql= mysqli_query($mysqli, "UPDATE loans set loan_status='stopped' WHERE id='$stop_id'");

        if($sql){

        	header("Location:../manage-loans.php");
        }else{

        	echo "<script>";echo " alert('Loan was not stopped');window.location.href='../manage-loans.php';</script>";
        }
     
    }


}



?>