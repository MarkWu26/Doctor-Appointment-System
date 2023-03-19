<?php

if(isset($_POST['btn_add'])){
        $txt_lname = $_POST['txt_lname'];
        $txt_fname = $_POST['txt_fname'];
        $specialty = $_POST['specialty'];
        $email = $_POST['email'];
        $contactnum = $_POST['contactnum'];
        $password = $_POST['password'];

        $name = $_FILES['txt_image']['name'];
        $tempname = $_FILES['txt_image']['tmp_name'];


        $su = mysqli_query($con, "SELECT * FROM doc where username = '".$email."' ");
        $ct = mysqli_num_rows($su);

        if($ct == 0){


        if($name != ""){
                if(move_uploaded_file($tempname, "image/$name"))
                {
                $query = mysqli_query($con,"INSERT INTO doc (fname, lname, specialty, contactNumber, username, password, image) values ('$txt_fname', '$txt_lname', '$specialty', '$contactnum', '$email', '$password', '$name')") 
                or die('Error: ' . mysqli_error($con));  
                }  
        }
        else{
           $name = 'default.jpg';   
           $query = mysqli_query($con, "INSERT INTO doc(fname, lname, specialty, contactNumber, username, password, image) values ('$txt_fname','$txt_lname', '$specialty', '$contactnum', '$email', '$password', '$name')")
           or die("Error: ".mysqli_error($con));
        }
        }

}

if(isset($_POST['btn_delete']))
{
    $id = $_POST['hidden'];
    $delete_query = mysqli_query($con,"DELETE from doc where docid = '$id' ")
     or die('Error: ' . mysqli_error($con));
}

if(isset($_POST['btn_edit']))
{
        $id = $_POST['hidden_id'];
        $fname = $_POST['txt_edit_fname'];
        $lname = $_POST['txt_edit_lname'];
        $specialty = $_POST['specialty_edit'];
        $email = $_POST['email_edit'];
        $contactnum = $_POST['contactnum_edit'];
        $pass = $_POST['password_edit'];

        $namee = $_FILES['txt_image']['name'];
        $temp = $_FILES['txt_image']['tmp_name'];
        $folder = "image/".$namee;


        $su = mysqli_query($con, "SELECT * from doc where username = '".$email."' and docid not in (".$id.") ");
        $ct = mysqli_num_rows($su);

        if($ct == 0){
                
                $update_query = mysqli_query($con, "UPDATE doc set fname = '".$fname."', lname = '".$lname."', specialty = '".$specialty."', contactNumber = '".$contactnum."', username = '".$email."', password = '".$pass."' where docid = '".$id."' ")
                or die ('Error: ' . mysqli_error($con));

        
        }
    
                
}

    


