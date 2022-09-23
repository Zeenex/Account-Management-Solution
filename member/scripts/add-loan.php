<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_loan"])){

	if(isset($_POST['member']) && isset($_POST["l_amt"]) && isset($_POST["l_purpose"]) && isset($_POST["repay_plan"]) && isset($_POST["gurantor_name"]) && isset($_POST["guarantor_department"])){
		$member_name = $_POST['member'];
		$complete = "complete";

		if (empty($member_name)){

			
			echo "<script>";echo " alert('No member selected');window.location.href='../apply-loans.php';</script>";

		}else{

			$l_amt = $_POST['l_amt'];
			$l_purpose = $_POST['l_purpose'];
			$repay_plan = $_POST['repay_plan'];
			$gurantor_name = $_POST['gurantor_name'];
			$guarantor_department = $_POST['guarantor_department'];
			

			$contribdet = mysqli_query($mysqli, "SELECT * FROM members WHERE name = '$member_name'");
			while($rows=mysqli_fetch_array($contribdet)){
				$mContribution = $rows['contrib_amount'];				
				$mroleCat = $rows['cat_role'];
				$mstatus = $rows['status'];
			}

			 

			if($mroleCat == "member"){

				switch ($repay_plan) {

					case "3 Months":

							    	$interest = $l_amt * 0.02;
							    	$repay1 = $interest / 3;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 3;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;
							    	$loan_count = "3";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}


						break;

					case "6 Months":

							    	$interest = $l_amt * 0.04;
							    	$repay1 = $interest / 6;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 6;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "6";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "9 Months":

							    	$interest = $l_amt * 0.05;
							    	$repay1 = $interest / 9;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 9;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "9";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "12 Months":

							    	$interest = $l_amt * 0.06;
							    	$repay1 = $interest / 12;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 12;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "12";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "18 Months":

							    	$interest = $l_amt * 0.09;
							    	$repay1 = $interest / 18;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 18;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "18";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "24 Months":

							    	$interest = $l_amt * 0.11;
							    	$repay1 = $interest / 24;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 24;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "24";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

				}

			}else{

				switch ($repay_plan) {

					case "3 Months":

							    	$interest = $l_amt * 0.01;
							    	$repay1 = $interest / 3;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 3;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "3";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "6 Months":

							    	$interest = $l_amt * 0.02;
							    	$repay1 = $interest / 6;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 6;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "6";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "9 Months":

							    	$interest = $l_amt * 0.025;
							    	$repay1 = $interest / 9;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 9;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "9";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "12 Months":

							    	$interest = $l_amt * 0.03;
							    	$repay1 = $interest / 12;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 12;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "12";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "18 Months":

							    	$interest = $l_amt * 0.045;
							    	$repay1 = $interest / 18;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 18;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "18";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

					case "24 Months":

							    	$interest = $l_amt * 0.055;
							    	$repay1 = $interest / 24;
							    	$repay = round($repay1, 2);
							    	$principal1 = $l_amt / 24;
							    	$principal = round($principal1, 2);
							    	$prinrepay = $principal + $repay;			    	
							    	$monthly = $mContribution + $prinrepay;

							    	$loan_count = "24";

							    	$sql = "INSERT INTO loans(name,monthly_contrib,loan_amount,interest,loan_repay,interest_repay,loan_purpose,repayment_plan,monthly_repay,guarantor,guarantor_dept,	loancount,loan_date) VALUES('$member_name','$mContribution','$l_amt','$interest','$prinrepay','$repay','$l_purpose','$repay_plan','$monthly','$gurantor_name','$guarantor_department','$loan_count',NOW())";
							    	$result = mysqli_query($mysqli, $sql);
									if($result){			
										echo "<script>";echo " alert('Loan has been applied, waiting for approval');window.location.href='../apply-loans.php';</script>";
									}else{
										echo "<script>";echo " alert('Your Loan cannot be applied at this time');window.location.href='../apply-loans.php';</script>";
									}

						break;

				}

			}

		}

	}else{

		echo "<script>";echo " alert('Please fill all');window.location.href='../apply-loans.php';</script>";
	}
}


?>