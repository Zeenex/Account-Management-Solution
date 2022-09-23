<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");


if(isset($_POST["submit"])){


if(isset($_POST["fname"]) && isset($_POST["mobile"]) && isset($_POST["email"]) && isset($_POST["marital"]) && isset($_POST["address"]) && isset($_POST["state"]) && isset($_POST["member_department"]) && isset($_POST["name_kin"])  && isset($_POST["address_kin"]) && isset($_POST["state_kin"]) && isset($_POST["mobile_kin"]) && isset($_POST["relation_kin"]) && isset($_POST["email_kin"]) && isset($_POST["contrib_amount"])){

	$name1 = $_POST['fname'];
	$gender1 = $_POST['gender'];
	$mobile1 = $_POST['mobile'];
	$email1 = $_POST['email'];
	$marital1 = $_POST['marital'];
	$address1 = $_POST['address'];
	$state1 = $_POST['state'];
	$member_department1 = $_POST['member_department'];
	$name_kin1 = $_POST['name_kin'];
	$address_kin1 = $_POST['address_kin'];
	$state_kin1 = $_POST['state_kin'];
	$mobile_kin1 = $_POST['mobile_kin'];
	$relation_kin1 = $_POST['relation_kin'];
	$email_kin1 = $_POST['email_kin'];
	$contrib_amount1 = $_POST['contrib_amount'];


	$pquery = mysqli_query($mysqli, "UPDATE members SET mobile = '$mobile1',email = '$email1',marital = '$marital1',address = '$address1',member_department = '$member_department1',state = '$state1',name_kin = '$name_kin1',address_kin = '$address_kin1',state_kin = '$state_kin1',mobile_kin = '$mobile_kin1',relation_kin = '$relation_kin1',email_kin = '$email_kin1',contrib_amount = '$contrib_amount1' WHERE name='".$name1."'");


			if($pquery){

			
				echo "<script>";echo " alert('Your Record has been updated successfully');window.location.href='../profile-edit.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Your Record cannot be updated at this time');window.location.href='../profile-edit.php';</script>";
			}


} else{

	header("Location: ../profile-edit.php");
}

}

?>