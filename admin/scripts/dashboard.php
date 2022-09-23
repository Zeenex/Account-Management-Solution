<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");


$query = mysqli_query($mysqli, "SELECT * FROM members");
$num_rows = mysqli_num_rows($query);

$ongoing= "ongoing";
$query1 = mysqli_query($mysqli, "SELECT * FROM loans WHERE loan_status = '$ongoing'");
$num_rows1 = mysqli_num_rows($query1);




$user = mysqli_query($mysqli, "SELECT * FROM members where staff_id = '".$_SESSION["staff_id"]."'");

while($rows=mysqli_fetch_array($user)){ $member = $rows['name']; }



$memberinv = mysqli_query($mysqli, "SELECT * FROM members ORDER BY name ASC");
$memberinv1 = mysqli_query($mysqli, "SELECT * FROM members ORDER BY name ASC");
$memberinv2 = mysqli_query($mysqli, "SELECT * FROM members ORDER BY name ASC");


$c_month = date('F');

$contribinv = mysqli_query($mysqli, "SELECT * FROM contribution WHERE month='".$c_month."'");





if(isset($_POST["submit_pwd"])){



	if(isset($_POST["password2"])){

		$password = $_POST['password2'];
		$pwd = md5($password);
		$member_name = $_POST['member_name4'];		
		$update = mysqli_query($mysqli, "UPDATE members set password = '".$pwd."' WHERE name='".$member_name."'");
			if($update){
				ob_end_clean( );
				header('Location: ../pwd-user-reset.php');				
				echo " alert('Password Changed')";
			}else{		
				
				header('Location: ../pwd-user-reset.php');
				
			}
	}else{
		echo "<script>";echo " alert('Please insert a password');window.location.href='../pwd-user-reset.php';</script>";
	}
}


ob_end_flush( );
?>