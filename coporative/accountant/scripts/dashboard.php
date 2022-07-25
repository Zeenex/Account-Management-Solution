<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");


$memberinv = mysqli_query($mysqli, "SELECT * FROM members where staff_id = '".$_SESSION["staff_id"]."'");



$userpro = mysqli_query($mysqli, "SELECT * FROM members where staff_id = '".$_SESSION["staff_id"]."'");

while($rows=mysqli_fetch_array($userpro)){

  $mName = $rows['name'];
  $mGender = $rows['gender'];
  $mMobile = $rows['mobile'];
  $mEmail = $rows['email'];
  $mMarital = $rows['marital'];
  $mAddress = $rows['address'];
  $mRole = $rows['role'];
  $mDept = $rows['member_department'];
  $mDoJ = $rows['date_joined'];
  $mStaffid = $rows['staff_id'];
  $mAmountCont = $rows['contrib_amount'];
  $mBank = $rows['contrib_bank'];
  $mCat_role = $rows['cat_role'];

  }



$memberinv = mysqli_query($mysqli, "SELECT * FROM members");
$contribinv = mysqli_query($mysqli, "SELECT * FROM contribution");


if(isset($_POST["submit_role"])){

	if(isset($_POST["role"])){

		$role1 = $_POST['role'];
		$member_name = $_POST['member_name'];		
		$update = mysqli_query($mysqli, "UPDATE members set role = '".$role1."' WHERE name='".$member_name."'");
			if($update){			
				echo "<script>";echo " alert('Role Updated');window.location.href='../change-roles.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Member roles was not updated, check config');window.location.href='../change-roles.php';</script>";
			}
	}else{
		echo "<script>";echo " alert('Please select a role for member');window.location.href='../change-roles.php';</script>";
	}
}









ob_end_flush( );
?>

