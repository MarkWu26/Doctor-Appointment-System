<?php
	include "connection.php";
	if(isset($_POST['btn-login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$admin = mysqli_query($con, "SELECT * from user where username = '$username' and password = '$password' and type = 'administrator' ");
		$numrow_admin = mysqli_num_rows($admin);

		$doctor = mysqli_query($con, "SELECT * from doc where username = '$username' and password = '$password' ");
		$numrow_doctor = mysqli_num_rows($doctor);
		
		$patient = mysqli_query($con, "SELECT * from patient where username = '$username' and password = '$password' ");
		$numrow_patient = mysqli_num_rows($patient);


		
		if($numrow_admin > 0)
		{
			while($row = mysqli_fetch_array($admin)){
				$_SESSION['role'] = "Administrator";
				$_SESSION['userid'] = $row['id'];
			}
			
			header ('Location: admin/dashboard/dashboard.php');
		}

		elseif($numrow_doctor > 0){
			while($row = mysqli_fetch_array($doctor)){
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['userid'] = $row['docid'];
			}
			header ('Location: doctor/dashboard/dashboard.php');
		}

		elseif($numrow_patient > 0){
			while($row = mysqli_fetch_array($patient)){
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['userid'] = $row['id'];
			}
			header ('Location: patient/dashboard/dashboard.php');
		}

		else{
			echo '<script type="text/javascript">
			 document.getElementById("error").innerHTML = "Invalid Account!"; 
			 </script>';
		}
	}
	?>