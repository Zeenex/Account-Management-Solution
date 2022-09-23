<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_role"])){

	if(isset($_POST["role"])){

		$role1 = $_POST['role'];
		$member_name = $_POST['member_name1'];		
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



if(isset($_POST["submit_desg"])){

	if(isset($_POST["desg"])){

		$desg1 = $_POST['desg'];
		$member_name = $_POST['member_name1'];		
		$update = mysqli_query($mysqli, "UPDATE members set cat_role = '".$desg1."' WHERE name='".$member_name."'");
			if($update){			
				echo "<script>";echo " alert('Member Designation Updated');window.location.href='../change-desg.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Member designation was not updated, check config');window.location.href='../change-desg.php';</script>";
			}
	}else{
		echo "<script>";echo " alert('Please select a designation for member');window.location.href='../change-desg.php';</script>";
	}
}



if(isset($_POST["submit_deactivate"])){

	if(isset($_POST["deactive"])){

		$deactive1 = $_POST['deactive'];
		$member_name = $_POST['member_name1'];		
		$update = mysqli_query($mysqli, "UPDATE members set status = '".$deactive1."' WHERE name='".$member_name."'");
			if($update){			
				echo "<script>";echo " alert('Account status changed');window.location.href='../deactivate-user.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Account Status not Updated, check config');window.location.href='../deactivate-user.php';</script>";
			}
	}else{
		echo "<script>";echo " alert('Please select an action');window.location.href='../deactivate-user.php';</script>";
	}
}
?>