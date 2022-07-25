<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

            
if(isset($_POST["submit"])){



       $c_month = date('F');




       $contresult = mysqli_query($mysqli, "SELECT * FROM contribution WHERE month ='".$c_month."'");

       $numrows = mysqli_num_rows($contresult);


        if($numrows !== 0){     

            
            echo "<script language='javascript'>alert('This month has already been uploaded');window.location.href='../contribution.php';</script>";
 
         }else{


            function checkFileExtension($ext)
                {
                    if ($ext == 'csv') {
                        $pass = (int)1;
                    } else {
                        $pass = (int)0;
                    }
                    return (int)$pass;
                }

            $ext = substr(strrchr($_FILES['filename']['name'], "."), 1);
            $fileAccepted = checkFileExtension($ext);

            if($fileAccepted==1){
                $handle = fopen($_FILES['filename']['tmp_name'], "r");

         $headers = fgetcsv($handle, 1000, ",");
         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
         {

            $name = $data[0];
            $contrib_amount = $data[1];
            $savings = $data[2];
            $cat_role = $data[3];
            $month = $data[4];
            $year = $data[5];


            $sql = mysqli_query($mysqli, "INSERT INTO contribution (name,contrib_amount,savings,cat_role,month,year) VALUES ('$name','$contrib_amount','$savings','$cat_role','$month','$year')");

         }

         if($sql){
         
         echo "<script language='javascript'>alert('Record Imported successfully');window.location.href='../contribution.php';</script>";
         }else{
         
         echo "<script language='javascript'>alert('Sorry! There is some problem.');</script>";
         }
            }else{

            echo "<script language='javascript'>alert('Please upload correct file format.');window.location.href='../contribution.php';</script>";

            }



         }



}


?>




