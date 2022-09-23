<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_purchase"])){

	if(isset($_POST["member_name"]) && isset($_POST["e_amount"]) && isset($_POST["e_accountNumber"]) && isset($_POST["e_items"])){

		$member = $_POST['member_name'];

		
		if (empty($member)){


			echo "<script>";echo " alert('No member selected');window.location.href='../purchase-elect.php';</script>";

		}else{


		$e_amount = $_POST['e_amount'];
		$e_accountNumber = $_POST['e_accountNumber'];
		$e_items = $_POST['e_items'];


			//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM purchaseitem WHERE name='".$member."' AND purchase_status != 'complete'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{

		if($e_amount <= '50000'){

			$payback = $e_amount + 2000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}

		}elseif ($e_amount <= '100000') {

			$payback = $e_amount + 3000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}
		}elseif ($e_amount <= '200000') {
			$payback = $e_amount + 4000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}
		}elseif ($e_amount <= '300000') {
			$payback = $e_amount + 5000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}
		}elseif ($e_amount <= '400000') {
			$payback = $e_amount + 6000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}
		}elseif ($e_amount <= '500000') {
			$payback = $e_amount + 7000;

			$sql = "INSERT INTO purchaseitem(name,item_desc,item_amount,payback,account_num,purchase_date) VALUES('$member','$e_items','$e_amount','$payback','$e_accountNumber',NOW())";
			$result = mysqli_query($mysqli, $sql);
			if($result){
				echo "<script>";echo " alert('Item has been applied, waiting for approval');window.location.href='../purchase-elect.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Item cannot be purchased at this time');window.location.href='../purchase-elect.php';</script>";
			}
		}else{

			echo "<script>";echo " alert('No amount selected');window.location.href='../purchase-elect.php';</script>";
		}

		}else{

			echo " alert('This member already has an item running');window.location.href='../purchase-elect.php';</script>";
		}


}

}

}

?>