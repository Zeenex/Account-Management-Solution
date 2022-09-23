<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

                              if(isset($_POST["submit_search"])){
  
                                  $member_name1 = $_POST['member_name'];
                                  $month1 = $_POST['month'];

								//Selecting database
									$finquery = mysqli_query($mysqli, "SELECT * FROM finrecord WHERE name='".$member_name1."' AND month = '".$month1."'");
									$numrows = mysqli_num_rows($finquery);

									if($numrows == 0)
									{

										$finquery2 = mysqli_query($mysqli, "SELECT * FROM contribution WHERE name='".$member_name1."' AND month = '".$month1."'");
										$numrows = mysqli_num_rows($finquery2);

										if($numrows == 0){

											
											echo "<script>";echo " alert('Selected Month is not available');window.location.href='../monthlyreports.php';</script>";

										}else{

										$form = "0";
										$fine = "0";
										$ongoing = "ongoing";

										$contrep = mysqli_query($mysqli, "SELECT name,contrib_amount,month FROM contribution WHERE name='".$member_name1."' AND month = '".$month1."'");
							                   while($rows=mysqli_fetch_array($contrep)){$name2 = $rows['name'];$contrib = $rows['contrib_amount'];$month1 = $rows['month'];}

							             $loanrep = mysqli_query($mysqli, "SELECT loan_repay,interest_repay FROM loans WHERE name='".$member_name1."' AND loan_status = '".$ongoing."'");
							                                  while($rows=mysqli_fetch_array($loanrep)){$loan_amount = $rows['loan_repay'];$interest = $rows['interest_repay'];}

							             $ricerep = mysqli_query($mysqli, "SELECT amount FROM purchaserice WHERE name='".$member_name1."'");
							                                  while($rows=mysqli_fetch_array($ricerep)){$r_amount = $rows['amount'];}
							              $gagrep = mysqli_query($mysqli, "SELECT item_amount FROM purchaseitem WHERE name='".$member_name1."'");
							                                  while($rows=mysqli_fetch_array($gagrep)){$r_item_amount = $rows['item_amount'];}

							            $total =  $contrib +  $loan_amount +  $interest + $r_amount  + $form + $fine + $r_item_amount;                

										mysqli_query($mysqli, "INSERT INTO finrecord (name,m_contrib,m_loan,m_interest,m_form,m_rice_gnut,m_fine,m_gadget,m_total,month) VALUES('$name2','$contrib','$loan_amount','$interest','$form','$r_amount','$fine','$r_item_amount','$total','$month1')");

										header("Location: ../monthlyreports.php?name=$name2&contribution=$contrib&loan=$loan_amount&interest=$interest&form=$form&rice=$r_amount&fine=$fine&gadget=$r_item_amount&total=$total&month=$month1");
										}

									}else{

										$contrep = mysqli_query($mysqli, "SELECT * FROM finrecord WHERE name='".$member_name1."' AND month = '".$month1."'");
                                  		while($rows=mysqli_fetch_array($contrep)){$name = $rows['name'];$contrib = $rows['m_contrib'];$loan_amount = $rows['m_loan'];$interest = $rows['m_interest'];$form = $rows['m_form'];$r_amount = $rows['m_rice_gnut'];$fine = $rows['m_fine'];$r_item_amount = $rows['m_gadget'];$total = $rows['m_total'];$month1 = $rows['month'];}

										header("Location: ../monthlyreports.php?name=$name&contribution=$contrib&loan=$loan_amount&interest=$interest&form=$form&rice=$r_amount&fine=$fine&gadget=$r_item_amount&total=$total&month=$month1");
									}


}

?>