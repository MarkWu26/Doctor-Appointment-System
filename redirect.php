<?php
if(isset($_POST['signup'])){
  
        $acctype = $_POST['ddl_try'];
        $username = $_POST['email'];
        $password = $_POST['password'];

        $doctor = mysqli_query($con, "SELECT * from doc where username = '$username' and password = '$password' ");
        $patient = mysqli_query($con, "SELECT * from patient where username = '$username' and password = '$password' ");

    //  if($acc == "Doctor"){

       //	   while($row = mysqli_fetch_array($doctor)){
		//			$_SESSION['fname'] = $row['fname'];
		//			$_SESSION['lname'] = $row['lname'];
			//		$_SESSION['userid'] = $row['docid'];
		//		}
      //      header("doctors/dashboard/dashboard.php");
          //  exit();
          echo $acctype;
      //  }
      //  else if($acc == "Patient"){
       //	     while($row = mysqli_fetch_array($patient)){
		//			$_SESSION['fname'] = $row['fname'];
			//		$_SESSION['lname'] = $row['lname'];
		//			$_SESSION['userid'] = $row['id'];
		//		}
          
//			header("patient/dashboard/dashboard.php");
   //         exit();
       // }
}
