<?php

include("$_SERVER[DOCUMENT_ROOT]/Coporative/controller/config.php");



$loaninv = mysqli_query($mysqli, "SELECT * FROM loans WHERE name='".$member_name."'");

                             




?>