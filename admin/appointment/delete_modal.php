<div class="modal fade"  id="modalExport<?php echo $row['appointmentid'];?>" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true" data-bs-backdrop="true">

<form method="post">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header" style="background-color: #f5f9fc; padding:1rem;">
                
                 
                    <div>
                        <h4 class="mb-1" style="margin-top:5px;">Delete Confirmation</h4>
                    </div>
                    
                </div>

                <div class="modal-body">
             
           
                        
                    <div class="d-flex align-items-center mb-5">
                        <div>
                            <input type="hidden" value="<?php echo $row['appointmentid']; ?>" name="hidden"/>
                            <p class="text-sm" style="position: absolute; margin-left: 39px; ">

                                <span class="font-bold text-heading" style="font-size:16px; align-items:center;">Are you sure you want to delete this appointment
                                ? </span>
                            </p>

                        
                          
                        </div>
                </div>

                    <div>
                        <div class="input-group input-group-inline">
                            </div>
                          
                        </div>
                </div>


                <div class="modal-footer" style="padding: 1.5rem; background-color: #f5f9fc;">
                    <div class="me-auto">
                    
                    <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal" style="position:absolute; margin-left:78px; margin-top:-18px; width:100px;" >No</button> 
                    <input type="submit" class="btn btn-sm btn-danger" name="btn_delete" style="position:absolute; margin-left:260px; margin-top:-18px; width:100px;" value="Delete"/>
               
                </div>
            </div>
        </div>
        </form>
    </div>