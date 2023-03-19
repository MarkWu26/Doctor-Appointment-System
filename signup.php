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
    <link rel="stylesheet" type="text/css" href="css/main2.css">

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
                <div class="circles">
                </div>
            </div>
        </div>
<?php
    include ("connection.php");
    ?>
 
	
	<div class="limiter" >
		<div class="container-login100" >
			
			<div class="wrap-login100">


				
				
				<form class="login100-form validate-form" method="POST">

				
					<span class="login100-form-title p-b-43" style=" margin-top:-140px; font-size:18px;">
					   Create An Account
					</span>

                  
                    <div>
						<select name="ddl_try" id="account" style="font-size:14px; margin-top:-20px; background:transparent; color:#999999; margin-bottom:25px;" class="new" required >
                        <option selected="" disabled="" style=" font-size:14px; color:#999999;">Account Type</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Patient">Patient</option>
                        </select>
					</div>

                
					
				
					<div class="wrap-input100 validate-input" style="height:50px; margin-bottom:25px; width:210px;" data-validate = "Valid name is required">
						<input class="input100"  type="text" name="fname" id="fname" style="font-size:16px;margin-top:5px;">
						<span class="focus-input100"></span>
						<span class="label-input100" style="margin-top:-10px; font-size:12px; ">First Name</span>
					</div>

                    

                    <div class="wrap-input100 validate-input" style="height:50px; margin-bottom:25px; width:210px; margin-top:-75px; margin-left: 240px;" data-validate = "Valid name is required">
						<input class="input100" id="lname" type="text" name="lname" style="font-size:16px;margin-top:5px;">
						<span class="focus-input100"></span>
						<span class="label-input100" style="margin-top:-10px;  font-size:12px; ">Last Name</span>
					</div>

                    <div class="wrap-input100 validate-input" style="height:50px; margin-bottom:25px; width:210px;" data-validate = "Valid email is required: example@curecare.com">
						<input class="input100"  type="text" id="email" name="email" style="font-size:16px;margin-top:5px;">
						<span class="focus-input100"></span>
						<span class="label-input100" style="margin-top:-10px; font-size:12px; ">Email</span>
                        
                    <span id="user_msg" style="margin-top:-5px;">
                    </span>
					</div>

				
	
					<div class="wrap-input100 validate-input" style="height:50px; margin-bottom:25px; width:210px; margin-left: 240px; margin-top:-75px;" data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password" style="font-size:16px;margin-top:5px;">
						<span class="focus-input100"></span>
						<span class="label-input100" style="margin-top:-10px;  font-size:12px; ">Password</span>
					</div>

                    <div class="specialty">
                   
                    </div>

                    <div class="patient_bdate">
                   
                    </div>

                    <div class="patient_gender">
                   

                    </div>

                    <div class="occupation">
                   
                    </div>

                    <div class="address">
                   
                    </div>

                    <div class="nationality">
                  
                    </div>




				  <div class="contactnum">
                  
                </div>

                <div class="mstatus">
              

                </div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
						
							
							</label>
						</div>

						<div>
							
								
							</a>
						</div>
					</div>
			
                    <?php
                echo'
					<div class="container-login100-form-btn" >
						<input type="submit" class="login100-form-btn" name="signup" id="signup" value="Signup"/>
						
					
					</div>

                    <span id="response"></span>

                  

                    



					
					
					
				</form>';
                include "connection.php";
                include "redirect.php";
                ?>
				

				<div class="login100-more" style="background-image: url('images/bg1.png');">
				</div>
			</div>
		</div>
	</div>
	
	<?php
	include "connection.php";
	
	
	?>

	

	


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

        <script type="text/javascript"src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <script type="text/javascript" src="js/script.js"></script>
       

<script type="text/javascript">
    $(document).ready(function(){
        $('#account').change(function(){
            var val = $("#account").val();
            document.getElementById("account").disabled = true; 
          

        if(val == "Doctor"){
            $(".specialty").html("<form method='post'><div><select  class='new' name='specialty' id='specialty'style='font-size:14px;margin-top:5px; background:transparent; color:#999999; margin-bottom:25px;'><option selected='' disabled='' style=' font-size:14px; color:#999999; font-family: Montserrat-Regular; '>Specialty <option>Accident and emergency medicine</option><option>Allergology</option><option>Anaesthethics</option><option>Biological hematology</option><option>Cardiology</option><option>Child Psychiatry</option><option>Clinical Biology</option><option>Clinical Chemistry</option><option>Clinical Neurophysiology</option><option>Clinical Radiology</option><option>Dental, oral and maxillo-facial surgery</option><option>Dermato-venerology</option><option>Endocrinilogy</option><option>Gastro-enterelogic surgery</option><option>Gastroenterology</option><option>General Hemtaology</option><option>General Practice</option><option>General Surgery</option><option>Geriatrics</option><option>Immunology</option><option>Infectious Disease</option><option>Internal Medicine</option><option>Laboratory Medicine</option><option>Maxillo-facial surgery</option></select></div></form>")
            $(".contactnum").html(" <div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px;' data-validate = 'Contact Number is required: 0916'><input class='input100'  type='text' id='d_contactnum' style='font-size:16px;margin-top:5px;'><span class='focus-input100'></span><span class='label-input100' style='margin-top:-10px; font-size:12px; '>Contact Number</span></div>")
        }else{
            $(".patient_bdate").html(" <div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px; width:210px;' data-validate = 'Valid name is required'><input class='input100' type='date' id='date' name='bdate' style='font-size:14px;margin-top:10px;' onfocus='(this.type='date')' onblur ='if(!this.value) this.type='text''><span class='focus-input100'></span><span class='label-input100' style='margin-top:-12px; font-size:10px; '>Birthdate</span></div> ")
            $(".patient_gender").html(" <select  class='new' name='gender' id='gender'style='height:50px; font-size:14px;margin-top:-20px; background:transparent; margin-top:-75px; width: 210px; color:#999999; margin-bottom:25px; margin-left: 240px;'><option selected='' disabled='' style=' font-size:12px; color:#999999; '>Gender</option><option>Male</option><option>Female</option></select>")
            $(".occupation").html("  <div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px; ' data-validate = 'Valid name is required'><input class='input100'  type='text' name='occupation' id='occupation' style='font-size:16px;margin-top:5px;'><span class='focus-input100'></span><span class='label-input100' style='margin-top:-10px; font-size:12px; '>Occupation</span></div>")
            $(".address").html(" <div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px; ' data-validate = 'Valid name is required'><input class='input100'  type='text' name='address' id='address' style='font-size:16px;margin-top:5px;'><span class='focus-input100'></span><span class='label-input100' style='margin-top:-10px; font-size:12px; '>Address</span></div>")
            $(".contactnum").html("<div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px; width: 210px; ' data-validate = 'Valid name is required'><input class='input100'  type='text' name='p_contactnum' id='p_contactnum' style='font-size:16px;margin-top:5px;'><span class='focus-input100'></span><span class='label-input100' style='margin-top:-10px; font-size:12px; '>Contact Number</span></div>")
            $(".mstatus").html("<div><select  class='new' name='mstatus' id='mstatus' style='height:50px; font-size:14px;margin-top:-20px; background:transparent; margin-top:-75px; width: 210px; color:#999999; margin-bottom:25px; margin-left: 240px;'><option selected='' disabled='' style=' font-size:14px; color:#999999; '>Marital Status</option><option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option></select></div>")
            $(".nationality").html("  <div class='wrap-input100 validate-input' style='height:50px; margin-bottom:25px; ' data-validate = 'Valid name is required'><input class='input100'  type='text' name='nationality' id='nationality' style='font-size:16px;margin-top:5px;'><span class='focus-input100'></span><span class='label-input100' style='margin-top:-10px; font-size:12px; '>Nationality</span></div>")
        }

        $('#signup').click(function(){
        var account = $("#account").val();
        var specialty = $("#specialty").val();
        var d_contactnum = $("#d_contactnum").val();
        var lname = $("#lname").val();
        var fname = $("#fname").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var date = $("#date").val();
        var gender = $("#gender").val();
        var occupation = $("#occupation").val();
        var address = $("#address").val();
        var p_contactnum = $("#p_contactnum").val();
        var mstatus = $("#mstatus").val();
        var nationality = $("#nationality").val();



        if(account == "Doctor"){
        $.post("submitFormDoctor.php",{ // call ajax 
            specialty:specialty,
            d_contactnum:d_contactnum,
            lname:lname,
            fname:fname,
            email:email,
            password:password
        },
        function(data,status){
                if(data == "success"){
                   
                }else{
                    
                }
            });
        }
        else if(account == "Patient"){
            $.post("submitFormPatient.php",{ // call ajax 
            date:date,
            gender:gender,
            occupation:occupation,
            address:address,
            p_contactnum:p_contactnum,
            mstatus:mstatus,
            nationality:nationality,
            lname:lname,
            fname:fname,
            email:email,
            password:password
        },
        function(data,status){
                if(data == "success"){
                   
                }else{
                  
                }
            });


        }

        });
        });

    });
       
</script>




<script type="text/javascript">
 $(document).ready(function() {
 
 var timeOut = null; // this used for hold few seconds to made ajax request

 var loading_html = '<img src="img/ajax-loader.gif" style="height: 15px; width: 15px;"/>'; // just an loading image or we can put any texts here

 //when there is an key input
 $('#email').keyup(function(e){

     // when press the following key we need not to make any ajax request, you can customize it with your own way
     switch(e.keyCode)
     {
         //case 8:   //backspace
         case 9:     //tab
         case 13:    //enter
         case 16:    //shift
         case 17:    //ctrl
         case 18:    //alt
         case 19:    //pause/break
         case 20:    //caps lock
         case 27:    //escape
         case 33:    //page up
         case 34:    //page down
         case 35:    //end
         case 36:    //home
         case 37:    //left arrow
         case 38:    //up arrow
         case 39:    //right arrow
         case 40:    //down arrow
         case 45:    //insert
         //case 46:  //delete= '1'
             return;
     }
     if (timeOut != null)
         clearTimeout(timeOut);
     timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
     $('#user_msg').html(loading_html); // adding the loading text or image
 });
});
function is_available(){
//get the email
var email = $('#email').val();


//make the ajax request to check is username available or not
$.post("check_email.php", {email:email},
function(result2)
    {
        console.log(result2);
        if(result2 != 0)
        {
         $('#user_msg').html('<span style="color:red;font-size:12px;">Email already taken!</span>');
          document.getElementById("signup").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600; font-size:12px;">Email Available</span>');
            document.getElementById("signup").disabled = false;
        }
    });
$.post("check_email.php", {email:email},
function(result)
    {
        console.log(result);
        if(result != 0){
        $('#user_msg').html('<span style="color:red;font-size:12px;">Email already taken!</span>');
          document.getElementById("signup").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600; font-size:12px;">Email Available</span>');
            document.getElementById("signup").disabled = false;
        }


    });

}


</script>



</body>


</html>