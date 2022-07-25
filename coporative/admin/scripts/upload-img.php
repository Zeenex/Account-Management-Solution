<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");




$targetDir = "$_SERVER[DOCUMENT_ROOT]/Coporative/uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){


$name1 = $_POST['member_name'];

if($fileName != null){


		    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if (!file_exists($targetFilePath)) {
        if(in_array($fileType, $allowTypes)){
                // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){


			$sql = "UPDATE members SET pic = '$fileName' WHERE name ='".$name1."'";

			$result = mysqli_query($mysqli, $sql);

			if($result){

			
				
				echo "<script>";echo " alert('Profile Pic updated');window.location.href='../picture-edit.php';</script>";

			}else{

				
				
				
				echo "<script>";echo " alert('Profile Pic cannot be updated');window.location.href='../picture-edit.php';</script>";
			}

	

            }else{
                
                
                echo "<script>";echo " alert('Sorry, there was an error uploading your image.');window.location.href='../picture-edit.php';</script>";
            }
        }else{
           
            
            echo "<script>";echo " alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');window.location.href='../picture-edit.php';</script>";
        }
    }else{
            
           
            
            echo "<script>";echo " alert('The file ".$fileName." exists.');window.location.href='../picture-edit.php';</script>";
        }





}else{

	echo " Please upload an image";
}

}

?>