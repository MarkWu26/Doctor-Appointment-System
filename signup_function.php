<?php
if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $account = $_POST['account'];
    $name = $_FILES['txt_image']['name'];
    $tempname = $_FILES['txt_image']['tmp_name'];
  
    if($account == "Doctor"){


        $name = 'default.jpg';   
        $query = mysqli_query($con, "INSERT INTO doc (fname, lname, username, password, image) VALUES ('$fname', '$lname', '$email', '$password', '$name')")
        or die ('Error:'.mysqli_error($query));
    }
    else{
        $name = 'default.jpg';   
        $query = mysqli_query($con, "INSERT INTO patient (fname, lname, username, password, image) VALUES ('$fname', '$lname', '$email', '$password', '$name')")
        or die ('Error:'.mysqli_error($query));
    }
  


}


?>