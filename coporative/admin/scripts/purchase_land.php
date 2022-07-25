<?php<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit"])){

	if(isset($_POST["member_name"]) && isset($_POST["area"]) && isset($_POST["l_title"]) && isset($_POST["l_amount"]) && isset($_POST["l_deposit"])){

		$member_name = $_POST['member_name'];
		$area = $_POST['area'];
		$l_title= $_POST['l_title'];
		$l_amount = $_POST['l_amount'];
		$l_deposit = $_POST['l_deposit'];
		



		
	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM purchaseland WHERE name='".$member_name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{
			$sql = "INSERT INTO purchaseland(name,land_area,land_title,land_amount,land_deposit,purchase_date) VALUES('$member_name','$area','$l_title','$l_amount','$l_deposit',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

	
				echo "<script>";echo " alert('Land Purchased, waiting for approval');window.location.href='../purchase-prop.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Your Record cannot be created at this time');window.location.href='../purchase-prop.php';</script>";
			}

		}else{

			echo "<script>" echo " alert('This member already has a land purchase running');window.location.href='../purchase-prop.php';</script>";
		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../purchase-prop.php';</script>";
	}
}


?>