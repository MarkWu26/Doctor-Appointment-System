<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Doctor Appointment Management</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Vendor Stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700%7CRoboto:300,400,700" rel="stylesheet">
        <link href="assets/vendor/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/dist/aos.css" rel="stylesheet">

        <!-- Theme Stylesheets -->
        <link href="assets/css/theme.css" rel="stylesheet">

<!--===============================================================================================-->
</head>


<body style="background-color: #666666;">

<div class="preloader">
            <div class="spinner">
                <div class="circles"></div>
            </div>
        </div>
        <!-- End of Preloader -->
 
	
	<div class="limiter">
		<div class="container-login100">
			
			<div class="wrap-login100">


				<?php
				echo'
				
				<form class="login100-form validate-form" method="post">

				<div class="logo">
				<img src="img/logos/indexlogo.png" style="width:230px; height:230px; position:absolute; margin-top:-195px; margin-left:110px;">
				</div>
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
				
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
				
	
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
				

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div>
					<span id ="error" style="color:red; font-size:14px; margin-top:-30px; position:absolute; margin-left:5px;">

					</span>
	
					</div>
			
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btn-login">
							Login
						</button>
					</div>
					
					
					
				</form>
				';
				include "loginprocess.php";
				?>
				

				<div class="login100-more" style="background-image: url('images/bg1.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	

	


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	 <!-- Core Javascripts -->
	 <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Vendor Javascripts -->
        <script src="assets/vendor/rellax/rellax.min.js"></script>
        <script src="assets/vendor/aos/dist/aos.js"></script>

        <!-- Theme Javascripts -->
        <script src="assets/js/theme.js"></script>

		<script type="" id="">

			
			
		</script>



</body>
</html>