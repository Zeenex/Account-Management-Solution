<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");


if(isset($_POST["submit"])){


if(isset($_POST["fname"])  && isset($_POST["gender"]) && isset($_POST["mobile"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["marital"]) && isset($_POST["address"]) && isset($_POST["state"]) && isset($_POST["staff_id"]) && isset($_POST["designation"]) && isset($_POST["member_department"]) && isset($_POST["name_kin"])  && isset($_POST["address_kin"]) && isset($_POST["state_kin"]) && isset($_POST["mobile_kin"]) && isset($_POST["relation_kin"]) && isset($_POST["email_kin"]) && isset($_POST["contrib_amount"]) && isset($_POST["account_num"]) && isset($_POST["contrib_bank"])  && isset($_POST["date_joined"])){

	$name1 = $_POST['fname'];
	$gender1 = $_POST['gender'];
	$mobile1 = $_POST['mobile'];
	$password1 = $_POST['password'];
	$pwd = md5($password1);
	$email1 = $_POST['email'];
	$marital1 = $_POST['marital'];
	$address1 = $_POST['address'];
	$state1 = $_POST['state'];
	$staff_id1 = $_POST['staff_id'];
	$designation1 = $_POST['designation'];
	$member_department1 = $_POST['member_department'];
	$name_kin1 = $_POST['name_kin'];
	$address_kin1 = $_POST['address_kin'];
	$state_kin1 = $_POST['state_kin'];
	$mobile_kin1 = $_POST['mobile_kin'];
	$relation_kin1 = $_POST['relation_kin'];
	$email_kin1 = $_POST['email_kin'];
	$contrib_amount1 = $_POST['contrib_amount'];
	$account_num1 = $_POST['account_num'];
	$contrib_bank1 = $_POST['contrib_bank'];	
	$date_joined1 = $_POST['date_joined'];

	$month = date("F");


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM members WHERE staff_id='".$staff_id1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{

			mysqli_query($mysqli, "INSERT INTO contribution (name,contrib_amount,savings,cat_role,month) VALUES('$name1','$contrib_amount1','$contrib_amount1','$designation1','$month')");

			$sql = "INSERT INTO members(name,gender,mobile,password,email,marital,address,state,staff_id,cat_role,member_department,name_kin,address_kin,state_kin,mobile_kin,relation_kin,email_kin,contrib_amount,account_num,contrib_bank,date_joined) VALUES('$name1','$gender1','$mobile1','$pwd','$email1','$marital1','$address1','$state1','$staff_id1','$designation1','$member_department1','$name_kin1','$address_kin1','$state_kin1','$mobile_kin1','$relation_kin1','$email_kin1','$contrib_amount1','$account_num1','$contrib_bank1','$date_joined1')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>";echo " alert('Your Record has been created successfully');window.location.href='../new-user.php';</script>";

			}else{

				
				
				echo " alert('Your Record cannot be created at this time');window.location.href='../new-user.php';</script>";
			}

		}else{

			echo " alert('This member already exist on record');window.location.href='../new-user.php';</script>";
		}



} else{

	header("Location: ../new-user.php");
}

}

?>