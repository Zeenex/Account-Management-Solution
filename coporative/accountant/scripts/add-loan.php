<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_loan"])){

	if(isset($_POST["l_amt"]) && isset($_POST["l_purpose"]) && isset($_POST["repay_plan"]) && isset($_POST["gurantor_name"]) && isset($_POST["guarantor_department"]) && isset($_POST["loan_date"])){

		$member_name = $_POST['member_name'];
		$staff_id = $_POST['staff_id'];
		$l_amt = $_POST['l_amt'];
		$l_purpose = $_POST['l_purpose'];
		$repay_plan = $_POST['repay_plan'];
		$gurantor_name = $_POST['gurantor_name'];
		$guarantor_department = $_POST['guarantor_department'];
		$loan_date = $_POST['loan_date'];



		
	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM loans WHERE name='".$member_name."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{
			$sql = "INSERT INTO loans(name,staff_id,loan_amount,loan_purpose,repayment_plan,guarantor,guarantor_dept,loan_date) VALUES('$member_name','$staff_id','$l_amt','$l_purpose','$repay_plan','$gurantor_name','$guarantor_department','$loan_date')";

			$result = mysqli_query($mysqli, $sql);

			if($result){

	
				echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";

			}else{

				
				
				echo "<script>";echo " alert('Your Record cannot be created at this time');window.location.href='../apply-loans.php';</script>";
			}

		}else{

			echo " alert('This member already has a loan running');window.location.href='../apply-loans.php';</script>";
		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../apply-loans.php';</script>";
	}
}


?>