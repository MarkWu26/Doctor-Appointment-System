<?php


if(isset($_POST['btn_edit'])){
    $id = $_POST['hidden_id'];
        $fname = $_POST['txt_edit_fname'];
        $lname = $_POST['txt_edit_lname'];
        $specialty = $_POST['specialty_edit'];
        $email = $_POST['email_edit'];
        $contactnum = $_POST['contactnum_edit'];
        $pass = $_POST['password_edit'];



        $su = mysqli_query($con, "SELECT * from doc where username = '".$email."' and docid not in (".$id.") ");
        $ct = mysqli_num_rows($su);

        if($ct == 0){
                
                $update_query = mysqli_query($con, "UPDATE doc set fname = '".$fname."', lname = '".$lname."', specialty = '".$specialty."', contactNumber = '".$contactnum."', username = '".$email."', password = '".$pass."' where docid = '".$id."' ")
                or die ('Error: ' . mysqli_error($con));

        
        }






}


?>