<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");

$name = "Fred Amata";
$contrib_amount = "100000";
$savings = "300000";
$cat_role = "member";
$month = "October";
$year = "2021";

mysqli_query($mysqli, "INSERT INTO contribution (name,contrib_amount,savings,cat_role,month,year) VALUES('$name','$contrib_amount','$savings','$cat_role','$month','$year')");





?>