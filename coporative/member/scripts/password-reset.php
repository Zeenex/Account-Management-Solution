<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_pwd"])){

	if(isset($_POST["password2"])){

		$staff_id = $_POST['staff_id'];
		$password = $_POST['password2'];
		$pwd = md5($password);				
		$update = mysqli_query($mysqli, "UPDATE members set password = '".$pwd."' WHERE staff_id = '".$staff_id."'");
			if($update){
				ob_end_clean( );
				echo "<script>";echo " alert('Password CHanged');window.location.href='../pwd-user-reset.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Password Not changed');window.location.href='../pwd-user-reset.php';</script>";
				
			}
	}else{
		echo "<script>";echo " alert('Please insert a password');window.location.href='../pwd-user-reset.php';</script>";
	}
}

?>