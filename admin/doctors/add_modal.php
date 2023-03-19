<main class="py-6 bg-surface-secondary">
    
<form method="post" enctype="multipart/form-data">

        <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
            

            <div class="offcanvas-header border-bottom py-4 bg-surface-secondary">
                <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new doctor</h5>
                <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body vstack gap-5">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">First name</label> <input type="text" class="form-control" name="txt_fname"></div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Last name</label> 
                        <input type="text" class="form-control" name="txt_lname"></div>
                    </div>
                </div>
                
                <div>

                    <label class="form-label">Specialty:</label>
                    <select class="new" name="specialty">
                        <option>Accident and emergency medicine</option>
                        <option>Allergology</option>
                        <option>Anaesthethics</option>
                        <option>Biological hematology</option>
                        <option>Cardiology</option>
                        <option>Child Psychiatry</option>
                        <option>Clinical Biology</option>
                        <option>Clinical Chemistry</option>
                        <option>Clinical Neurophysiology</option>
                        <option>Clinical Radiology</option>
                        <option>Dental, oral and maxillo-facial surgery</option>
                        <option>Dermato-venerology</option>
                        <option>Endocrinilogy</option>
                        <option>Gastro-enterelogic surgery</option>
                        <option>Gastroenterology</option>
                        <option>General Hemtaology</option>
                        <option>General Practice</option>
                        <option>General Surgery</option>
                        <option>Geriatrics</option>
                        <option>Immunology</option>
                        <option>Infectious Disease</option>
                        <option>Internal Medicine</option>
                        <option>Laboratory Medicine</option>
                        <option>Maxillo-facial surgery</option>
                      



                    </select>


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
                         <input type="email" class="form-control" name="email"></div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Contact number</label> 
                    <input type="tel" class="form-control" name="contactnum"></div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Password</label> 
                    <input type="password" class="form-control" name="password"></div>
                </div>
               
            </div>
            
            <div class="modal-footer py-2 bg-surface-secondary">
                <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> 
                <input type="submit" class="btn btn-sm btn-primary" name="btn_add" value="Add"/>
            </div>
        </form>
        </div>
</main>