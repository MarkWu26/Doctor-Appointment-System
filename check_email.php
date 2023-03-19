<?php
	//mysql query to select field email if it's equal to the email that we check  
include "connection.php";
$result = mysqli_query($con,"select * from patient where username = '$_POST[email]' ");
$result2 = mysqli_query($con, "SELECT * FROM doc where username = '$_POST[email]' ");
$cnt = mysqli_num_rows($result);
$cnt2 = mysqli_num_rows($result2);
print($cnt);
print($cnt2);
?>