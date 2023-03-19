
    


<div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasView<?php echo $row['appointmentid'];?>" aria-labelledby="offcanvasCreateLabel">
<form method="post" enctype="multipart/form-data">

    <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
        <h5 class="offcanvas-title" id="offcanvasCreateLabel">View Appointment</h5>
        <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>



    <div class="offcanvas-body vstack gap-5">
        <div class="row g-5">


        <div>
            
            <label class="form-label">Doctor:</label> 
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(d.fname, ' ' , d.lname) as doctorname, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <input type="text" class="form-control" name="title" value="'.$viewrow['doctorname'].'" readonly />';
            }
            ?>
    
        </div>
        

        <div>
            
            <label class="form-label">Patient:</label> 
            <?php
            $aquery = mysqli_query($con, "SELECT *, CONCAT(p.fname, ' ' , p.lname) as patientname, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where appointmentid = '".$row['appointmentid']."'");
            while($viewrow = mysqli_fetch_array($aquery)){
                echo'
                <input type="text" class="form-control" name="title" value="'.$viewrow['patientname'].'" readonly />';
            }
            ?>
    
        </div>

        <div>
            
                        <label class="form-label">Appointment Title:</label> 
                        <?php
                        $aquery = mysqli_query($con, "SELECT * FROM appointment where appointmentid = '".$row['appointmentid']."' ");
                        while($editrow = mysqli_fetch_array($aquery)){
                            echo'
                            <input type="text" class="form-control" name="title" value="'.$editrow['title'].'" readonly />';
                        }
                        ?>
                
        </div>

                <div>
                    
                        <label class="form-label">Reason of Appointment:</label> 

                        <?php
                        $aquery = mysqli_query($con, "SELECT * FROM appointment where appointmentid = '".$row['appointmentid']."' ");
                        while($editrow = mysqli_fetch_array($aquery)){
                            echo'
                            <input type="text" class="form-control" name="title" value="'.$editrow['reason'].'" readonly />';
                        }
                        ?>
                       
                </div>
          
         



          

            <div>
                <label class="form-label">Appointment Date:</label>
                
                <?php
                $aquery = mysqli_query($con, "SELECT * FROM appointment where appointmentid = '".$row['appointmentid']."' ");
                while($editrow = mysqli_fetch_array($aquery)){ 

                echo'
                <input type="date" style="-webkit-filter: invert(100%);
                filter: invert(100%); background-color:#18150f; border: 1px solid #18150f;
                color:#e9e6d3;
                border-radius: 0.375rem;
                box-shadow: 0 1px 2px rgb(50 50 71 / 8%);
                display: block;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.3;
                padding: 0.75rem 1.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                width: 100%;" name="txt_sdate" value="'.$editrow['scheduleDate'].'" readonly />';

                }
                ?>

            </div>



            <div>

            <label class="form-label">Appointment Time:</label>
                <?php
                $aquery = mysqli_query($con, "SELECT * FROM appointment where appointmentid = '".$row['appointmentid']."' ");
                while($editrow = mysqli_fetch_array($aquery)){ 
                    echo'
                <input type="text" class="form-control" name="txt_Time"  value="'.$editrow['scheduleTime'].'" readonly />';
                }
                ?>
            </div>
    </div>
    </div>

        
        
    
    <div class="modal-footer py-2 bg-surface-secondary">
        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> 
        <input type="submit" class="btn btn-sm btn-primary" name="btn_add" value="Add"/>
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