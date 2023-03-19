<?php

if(isset($_POST['btn_edit']))
{
        $id = $_POST['hidden'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $bdate = $_POST['bdate'];
        $gender = $_POST['gender'];
        $mstatus = $_POST['mstatus'];
        $number = $_POST['number'];
        $occupation = $_POST['occupation'];
        $address = $_POST['address'];
        $nationality = $_POST['nationality'];

        $update_query = mysqli_query($con, "UPDATE patient set fname = '".$fname."', lname = '".$lname."', birthDate = '".$bdate."', contactNumber = '".$number."', occupation = '".$occupation."', address = '".$address."', nationality = '".$nationality."' where id = '".$id."' ")
        or die ('Error: ' . mysqli_error($con));
   
        
        
}

    


