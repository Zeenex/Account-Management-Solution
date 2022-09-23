<?php
include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");
if(isset($_GET['name']))
{
$status1=$_GET['name'];
$select = mysqli_query($mysqli, "SELECT * FROM loans WHERE name='$status1'");
while($row=mysqli_fetch_object($select))
{
$status_var=$row->loan_status;
if($status_var=='ongoing')
{
$status_state='complete';
}
else
{
$status_state='ongoing';
}

$update = mysqli_query($mysqli, "UPDATE loans set loan_status='$status_state' where name='$status1'");
if($update)
{
header("Location:../pending-loans.php");
}
else
{
echo mysqli_error();
}
}
?>
<?php
}
?>