
<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if (isset($_GET['reject']) && isset($_GET['checkbox'])) {

    foreach($_GET['checkbox'] as $reject_id){
        $reject_id = (int)$reject_id;
              
        $sql= mysqli_query($mysqli, "DELETE from loans WHERE id='$reject_id'");

        if($sql){

        	header("Location:../manage-loans.php");
        }else{

        	echo "<script>";echo " alert('Loan was not rejected');window.location.href='../manage-loans.php';</script>";
        }
     
    }


}



?>