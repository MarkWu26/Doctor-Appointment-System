<div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasView<?php echo $row['docid'];?>" aria-labelledby="offcanvasCreateLabel">
            
        <form method="post" enctype="multipart/form-data">
            <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
                <h5 class="offcanvas-title" id="offcanvasCreateLabel">View Details</h5>
                <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <?php

            $query = mysqli_query($con, "SELECT * from doc where docid = '".$row['docid']."' ");
            $editrow = mysqli_fetch_array($query);

             echo'
            <div class="offcanvas-body vstack gap-5">
                <div class="row g-5">

                <input type="hidden" value="'.$row['docid'].'" name="hidden_id"/>

                    <div class="col-md-6">
                        <div>
                            <label class="form-label">First name</label> 
                            <input type="text" class="form-control" name="txt_edit_fname" value=" '.$editrow['fname'].'" readonly />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Last name</label> 
                        <input type="text" class="form-control" name="txt_edit_lname" value=" '.$editrow['lname'].'" readonly/>
                        </div>
                    </div>
                </div>
                <div>

                    <label class="form-label">Specialty:</label>
                    <input class="form-control" name="specialty_edit" value="'.$editrow['specialty'].'" readonly>
    


                </div>
                
             
                
                
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Email address</label>
                         <input type="email" class="form-control" name="email_edit" value="'.$editrow['username'].'" readonly>
                         </div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Contact number</label> 
                    <input type="tel" class="form-control" name="contactnum_edit" value="'.$editrow['contactNumber'].'" readonly></div>
                  
                </div>
               
            </div>
            
            <div class="modal-footer py-2 bg-surface-secondary">
                <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> 
              
            </div>
        </form>
        </div>


';?>