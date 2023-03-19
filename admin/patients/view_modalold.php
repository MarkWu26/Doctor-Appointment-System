<div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasView<?php echo $row['id'];?>" aria-labelledby="offcanvasCreateLabel">

        <form method="post" enctype="multipart/form-data">
            <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
                <h5 class="offcanvas-title" id="offcanvasCreateLabel">View Details</h5>
                <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <?php

            $viewquery = mysqli_query($con, "SELECT * FROM patient where id = '".$row['id']."' ");
            $view = mysqli_fetch_array($viewquery);

            echo'
            <div class="offcanvas-body vstack gap-5">
                <div class="row g-5">


             
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">First name</label>
                             <input type="text" class="form-control" name="txt_fname" value="'.$view['fname'].'" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Last name</label> 
                            <input type="text" class="form-control" name="txt_lname" value="'.$view['lname'].'" readonly>
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Birthdate:</label>
                        <input class="form-control" name="txt_bdate" type="date"  value="'.$view['birthDate'].'" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender:</label>
                        <input class="form-control" name="txt_gender" value="'.$view['gender'].'" readonly>
                        
                      
        
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status:</label>
                        <input class="form-control" name="txt_mstatus" value="'.$view['m_status'].'" readonly>
                    </div>

                    <div>
                        <div><label class="form-label">Occupation:</label> 
                        <input type="text" class="form-control" name="txt_occupation" value="'.$view['occupation'].'" readonly></div>
                    </div>

                    <div>
                        <div><label class="form-label">Address:</label> 
                        <input type="text" class="form-control" name="txt_address" value="'.$view['address'].'" readonly></div>
                    </div>

                    <div>
                        <div><label class="form-label">Nationality:</label> 
                        <input type="text" class="form-control" name="txt_nationality" value="'.$view['nationality'].'" readonly></div>
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

                <hr>
                
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Email address</label>
                         <input type="email" class="form-control" name="email" value="'.$view['username'].'"readonly></div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Contact number</label> 
                    <input type="tel" class="form-control" name="contactnum" value="'.$view['contactNumber'].'" readonly></div>
                 
               
                </div>
            
            <div class="modal-footer py-2 bg-surface-secondary">
                <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> 
            </div>
        </form>
        </div>';
        ?>
