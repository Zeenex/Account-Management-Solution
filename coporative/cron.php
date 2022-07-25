<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

  

					$monthrun = mysqli_query($mysqli, "SELECT * FROM members");

							      while($rows=mysqli_fetch_array($monthrun)){$name = $rows['name'];$role = $rows['cat_role'];$month_amt = $rows['contrib_amount'];}


					$current_month = date('F');
					$current_year =  date("Y");

							             
					mysqli_query($mysqli, "INSERT INTO contribution (name,contrib_amount,savings,cat_role,month,year) VALUES('$name','$month_amt','$month_amt','$role','$current_month','$current_year')");

?>