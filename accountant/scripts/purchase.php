<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_purchase"])){

	if(isset($_POST["e_amount"]) && isset($_POST["e_accountNumber"]) && isset($_POST["e_items"]) && isset($_POST["e_date"])){

		$member_name = $_POST['member_name'];
		$e_amount = $_POST['e_amount'];
		$e_accountNumber = $_POST['e_accountNumber'];
		$e_items = $_POST['e_items'];
		$e_date = $_POST['e_date'];
		$interest1 = $e_amount * 0.07;


		
	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM purchaseitem WHERE name='".$member_name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{
			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,interest,account_num,purchase_date) VALUES('$member_name','$e_items','$e_amount','$interest1','$e_accountNumber','$e_date')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

	
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}

		}else{

			echo " alert('This member already has an item running');window.location.href='../purchase-elect.php';</script>";
		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../purchase-elect.php';</script>";
	}
}




if(isset($_POST["submit_purchase2"])){

	if(isset($_POST["r_rice"]) && isset($_POST["r_vegoil"]) && isset($_POST["r_palmoil"]) && isset($_POST["r_amount"]) && isset($_POST["r_date"])){

		$member_name = $_POST['member_name'];
		$r_rice = $_POST['r_rice'];
		$r_vegoil= $_POST['r_vegoil'];
		$r_palmoil = $_POST['r_palmoil'];
		$r_amount = $_POST['r_amount'];
		$r_date = $_POST['r_date'];
		$interest2 = $r_amount * 0.07;



		
	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM purchaserice WHERE name='".$member_name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{
			$sql = "INSERT INTO purchaserice(name,rice,vegetable_oil,palm_oil,amount,interest,purchase_date) VALUES('$member_name','$r_rice','$r_vegoil','$r_palmoil','$r_amount','$interest2','$r_date')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

	
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-rice.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-rice.php';</script>";
			}

		}else{

			echo " alert('This member already has an item running');window.location.href='../purchase-rice.php';</script>";
		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../purchase-rice.php';</script>";
	}
}






if(isset($_POST["submit_purchase3"])){

	if(isset($_POST["area"]) && isset($_POST["l_title"]) && isset($_POST["l_amount"]) && isset($_POST["l_deposit"]) && isset($_POST["land_date"])){

		$member_name = $_POST['member_name'];
		$area = $_POST['area'];
		$l_title= $_POST['l_title'];
		$l_amount = $_POST['l_amount'];
		$l_deposit = $_POST['l_deposit'];
		$land_date = $_POST['land_date'];



		
	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM purchaseland WHERE name='".$member_name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{
			$sql = "INSERT INTO purchaseland(name,land_area,land_title,land_amount,land_deposit,purchase_date) VALUES('$member_name','$area','$l_title','$l_amount','$l_deposit','$land_date')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

	
				echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../purchase-prop.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Your Record cannot be created at this time');window.location.href='../purchase-prop.php';</script>";
			}

		}else{

			echo " alert('This member already has a loan running');window.location.href='../purchase-prop.php';</script>";
		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../purchase-prop.php';</script>";
	}
}
?>