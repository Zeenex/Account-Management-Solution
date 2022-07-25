<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");


if(isset($_POST["submit"])){



	if(isset($_POST["member_name"])){

		$member_name = $_POST['member_name'];

		$userpro = mysqli_query($mysqli, "SELECT * FROM members where name = '".$member_name."'");

                                      while($rows=mysqli_fetch_array($userpro)){



                              $pName = $rows['name'];
                              $pGender = $rows['gender'];
                              $pMobile = $rows['mobile'];

                              }		

	}else{
		echo "<script>";echo " alert('Please select a name');window.location.href='../pwd-user-reset.php';</script>";
	}
}










?>