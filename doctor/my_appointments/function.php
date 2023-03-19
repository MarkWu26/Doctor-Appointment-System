<?php

if(isset($_POST['btn_delete'])){

    $id = $_POST['hidden'];

    $delete_query = mysqli_query($con, "DELETE FROM appointment where appointmentid = '$id' ")
    or die ('Error: '.mysqli_error($con));
   

}

if(isset($_POST['btn_edit'])){
    $id = $_POST['hidden_id'];
    $title = $_POST['title'];
    $reason = $_POST['reason'];
    $date = $_POST['txt_sdate'];
    $time = $_POST['txt_Time'];

 
    $update_query = mysqli_query($con, "UPDATE appointment Set title = '$title', reason = '$reason', scheduleDate = '$date', scheduleTime = '$time' where appointmentid = '$id' ")
        or die ('Error: '.mysqli_error($con));
 
   

}