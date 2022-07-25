<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['staff_id']) && !empty($_POST['password'])){
		$staff_id = $_POST['staff_id'];
		$password = md5($_POST['password']);
		
		include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

		//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM members WHERE staff_id='".$staff_id."' AND password='".$password."' AND status='active'");
		$numrows = mysqli_num_rows($query);
		if($numrows != 0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbstaff_id=$row['staff_id'];
				$dbpassword=$row['password'];
				$role=$row['role'];
				$name=$row['name'];
				
				
			}
			
			if($role == 'admin'){
			    
			    if($staff_id == $dbstaff_id && $password == $dbpassword)
			{
				session_start();
				$_SESSION['staff_id']=$staff_id;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../admin/index.php");
			}    

		}elseif ($role == 'accountant') {
			    if($staff_id == $dbstaff_id && $password == $dbpassword)
			{
				session_start();
				$_SESSION['staff_id']=$staff_id;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../accountant/index.php");
			} 
		}elseif ($role == 'member'){


			    if($staff_id == $dbstaff_id && $password == $dbpassword)
			{
				session_start();
				$_SESSION['staff_id']=$staff_id;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../member/index.php");
			}

}else{

	echo "<script>";echo " alert('There is no role attached to this account!');window.location.href='../index.php';</script>";
}

}


		else
		{
			
			echo "<script>";echo " alert('Staff ID or Password not found! or account is inactive');window.location.href='../index.php';</script>";
		}
	}
	else
	{
		
		echo "<script>";echo " alert('Required All fields!');window.location.href='../index.php';</script>";
	}
}



?>
