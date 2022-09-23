<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

if(isset($_POST["submit_search"])){
  
$member_name1 = $_POST['member_name'];
$month1 = $_POST['month'];


$finquery = mysqli_query($mysqli, "SELECT * FROM finrecord WHERE name='".$member_name1."' AND month = '".$month1."'");
$numrows = mysqli_num_rows($finquery);
if($numrows == 0)
{


echo "<script>";echo " alert('Selected Month is not available');window.location.href='../fin-record.php';</script>";



}else{

	$finquery = mysqli_query($mysqli, "SELECT * FROM finrecord WHERE name='".$member_name1."' AND month = '".$month1."'");


	while($rows=mysqli_fetch_array($finquery)){$name2 = $rows['name'];$contrib = $rows['m_contrib'];$loan = $rows['m_loan'];$interest = $rows['m_interest'];$total = $rows['m_total'];}

	header("Location: ../fin-record.php?name=$name2&contribution=$contrib&loan=$loan&interest=$interest&total=$total");

}

}

?>