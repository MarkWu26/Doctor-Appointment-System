<?php
if(isset($_POST['specialty'])){
    $specialty = $_POST['speciaalty'];
    $d_contactnum = $_POST['d_contactnum'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conx = mysqli_connect('localhost', 'root', '', 'db_doc') or die (mysqli_error());



    $sql = "INSERT INTO doc (fname, lname, username, password, specialty, contactNumber) VALUES ('$fname', '$lname', '$email', '$password','$specialty', '$d_contactnum')";

    $result=mysqli_query($conx, $sql);

    if($result == TRUE){
        echo "success";
    }else{
        echo "failed";
    }



}


?>