<?php

if(isset($_POST['btn_add'])){
    $fname = $_POST['txt_fname'];
    $lname = $_POST['txt_lname'];
    $bdate = $_POST['txt_bdate'];
    $gender = $_POST['txt_gender'];
    $mstatus = $_POST['txt_mstatus'];
    $occupation = $_POST['txt_occupation'];
    $address = $_POST['txt_address'];
    $nationality = $_POST['txt_nationality'];
    $email = $_POST['email'];
    $contactnum = $_POST['contactnum'];
    $password = $_POST['password'];

    $su = mysqli_query($con, "SELECT * from patient where username = '$email' ");
    $ct = mysqli_num_rows($su);

    if($ct == 0){
        $query = mysqli_query($con, "INSERT INTO patient (lname, fname, birthDate, gender, m_status, occupation, address, nationality, contactNumber, username, password) 
        VALUES ('$lname', '$fname','$bdate', '$gender', '$mstatus', '$occupation', '$address', '$nationality', '$contactnum', '$email', '$password') ")
        or die ('Error: '.mysqli_error($con));
    }


}




if(isset($_POST['btn_delete'])){
    $id = $_POST['hidden'];

    $delete_query = mysqli_query($con, "DELETE FROM patient where id = '$id' ")
    or die ('Error:'.mysqli_error($con));

}

if(isset($_POST['btn_edit'])){
    $id = $_POST['hidden_id'];
    $fname = $_POST['txt_fname'];
    $lname = $_POST['txt_lname'];
    $bdate = $_POST['txt_bdate'];
    $gender = $_POST['txt_gender'];
    $mstatus = $_POST['txt_mstatus'];
    $occupation = $_POST['txt_occupation'];
    $address = $_POST['txt_address'];
    $nationality = $_POST['txt_nationality'];
    $email = $_POST['txt_email'];
    $contactnum = $_POST['txt_contactnum'];
    $password = $_POST['txt_password'];

    $su = mysqli_query($con, "SELECT * from patient where username = '".$email."' and id not in (".$id.") ");
    $ct = mysqli_num_rows($su);


    if($ct==0){
        $update_query = mysqli_query($con, "UPDATE patient set fname = '".$fname."', lname= '".$lname."', birthDate = '".$bdate."', gender = '".$gender."', m_status = '".$mstatus."', occupation = '".$occupation."', address = '".$address."', nationality = '".$nationality."', username = '".$email."', contactNumber = '".$contactnum."', password = '".$password."' where id = '".$id."' ")
        or die ('Error: '.mysqli_error($con));
    }
   
}

