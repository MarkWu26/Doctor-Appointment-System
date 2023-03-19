<div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasEdit<?php echo $row['appointmentid'];?>" aria-labelledby="offcanvasCreateLabel">
        <form method="post" enctype="multipart/form-data">

        <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
            <h5 class="offcanvas-title" id="offcanvasCreateLabel">Edit Patient</h5>
            <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>



    <div class="offcanvas-body vstack gap-5">
        <div class="row g-5">


        
        <div class="col-md-6">
            <label class="form-label">First Name:</label> 
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.fname) as patientfname, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <input type="hidden" name="hidden" value="'.$viewrow['patientid'].'" />
                <input type="text" class="form-control" name="fname" value="'.$viewrow['patientfname'].'" />';
            }
            ?>       
        </div>

        <div class="col-md-6">
            <label class="form-label">Last Name:</label> 
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.lname) as patientlname, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
              echo'
              <input type="text" class="form-control" name="lname" value="'.$viewrow['patientlname'].'"  />';
             }
             ?>
        </div>

        <div>
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.birthDate) as birthDate, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Birthdate:</label>
                <input class="form-control" name="bdate" type="date" value="'.$viewrow['birthDate'].'" placeholder="Birthdate" >';
            }
            ?>
        </div>

        <div class="col-md-6">
        <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.gender) as gender, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
            <label class="form-label">Gender:</label>
            <input class="form-control" name="gender" value="'.$viewrow['gender'].'" >';
            }
            ?>
             
        </div>

        <div class="col-md-6">
        <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.m_status) as birthDate, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Marital Status:</label>
                <input class="form-control" name="mstatus" value="'.$viewrow['m_status'].'" >';
            }
            ?>
        </div>

        <div>
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.contactNumber) as contactnumber, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Contact Number:</label> 
                <input type="text" class="form-control" name="number"" value="'.$viewrow['contactnumber'].'" >';
            }
            ?>
        </div>


        <div>
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.occupation) as occupation, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Occupation:</label> 
                <input type="text" class="form-control" name="occupation" value="'.$viewrow['occupation'].'" >';
            }
            ?>
        </div>

        <div>
        <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.address) as address, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Address:</label> 
                <input type="text" class="form-control" name="address" value="'.$viewrow['address'].'" >';
            }
            ?>
        </div>

        <div>
        <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.nationality) as nationality, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <label class="form-label">Nationality:</label> 
                <input type="text" class="form-control" name="nationality" value="'.$viewrow['nationality'].'" >';
            }
            ?>
        </div>

        </div>

        <div>
            <label class="form-label" for="formInputExample">Photo</label>
            <div class="d-flex align-items-center">
                <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                    <img alt="..." src="../../img/people/img-6.jpg"></a>
                <div class="ms-5">
                    <label for="file-upload" class="btn btn-sm btn-neutral">
                        
                        <input type="file" name="txt_image" id="file-upload" value="Upload" class="visually-hidden">
                        <span>Upload</span> 
                    </label>
                         <a href="#" class="btn d-inline-flex btn-sm btn-neutral ms-2 text-danger"><span class="pe-2"><i class="bi bi-trash"></i> </span><span>Remove</span></a></div>
            </div>
      





        </div>
    </div>
   
        
    
    <div class="modal-footer py-2 bg-surface-secondary">
        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> 
        <input type="submit" class="btn btn-sm btn-primary" name="btn_edit" value="Edit"/>
    </div>

</form>

</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$('#txtdate').datetimepicker({
    minDate: new Date()
});



});


</script>