<?php
if(isset($_POST['fname'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $address = $_POST['address'];
    $p_contactnum = $_POST['p_contactnum'];
    $mstatus = $_POST['mstatus'];
    $nationality = $_POST['nationality'];


    $conx = mysqli_connect('localhost', 'root', '', 'db_doc') or die (mysqli_error());



    $sql = "INSERT INTO patient (fname, lname, birthDate, gender, m_status, occupation, address, nationality, contactNumber, username, password) VALUES ('$fname', '$lname', '$date', '$gender', '$mstatus', '$occupation', '$address', '$nationality', '$p_contactnum', '$email', '$password')";

    $result=mysqli_query($conx, $sql);

    if($result == TRUE){
        echo "success";
    }else{
        echo "failed";
    }



}


?>