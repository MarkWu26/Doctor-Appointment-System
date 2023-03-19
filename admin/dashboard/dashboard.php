
<!doctype html>
<?php
session_start();
?>

<html lang="en" data-theme="dark">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>CureCare | Doctors</title>


      
       
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../../css/main2.css">
    <link rel="stylesheet" type="text/css" href="../../css/utilities.css">

    
     
    


<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF4DZVH');
</script>

<script defer data-domain="webpixels.works" src="../plausible.io/js/plausible.js">
</script>

</head>

<body>

    <?php
    include ("../../connection.php");
    ?>

<div class="preloader">
            <div class="spinner">
                <div class="circles">
                </div>
            </div>
        </div>

    

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
            <div class="container-fluid">
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> 
                <a class="" href="dashboard.php">
                <img src="../../img/logos/C.png" alt="..." class="logo">
                </a>
            <div class="navbar-user d-lg-none">
                <div class="dropdown">
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child"><img alt="..." src="img/people/img-profile.jpg" class="avatar avatar- rounded-circle"> 
                            <span class="avatar-child avatar-badge bg-success">

                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                         <a href="#" class="dropdown-item">Settings</a>
                          <a href="#" class="dropdown-item">Billing</a>
                          <hr class="dropdown-divider">
                          <a href="../../logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/dashboard.php">
                            <i class="bi bi-briefcase">
                            </i> 
                            Dashboard</a>
                            
                        </li>

                        <li class="nav-item" >
                            <a class="nav-link" href="../doctors/doctors.php">
                                <i class="bi bi-kanban"></i> Doctors</a>
                        </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../patients/patients.php">
                                    <i class="bi bi-file-earmark-text"></i> Patients</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../appointment/appointment.php">
                                    <i class="bi bi-terminal"></i>Appointment</a>
                                   
                            </li>
                           
                            <li class="nav-item">
                              
                                    
                                    <div class="collapse" id="sidebar-settings">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                            <a href="pages/settings/general.html" class="nav-link">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/settings/security.html" class="nav-link">Security</a>
                                        </li>
                                        <li class="nav-item"><a href="pages/settings/team.html" class="nav-link">Team</a></li><li class="nav-item">
                                            <a href="pages/settings/billing.html" class="nav-link">Billing</a>
                                        </li>
                                        <li class="nav-item"><a href="pages/settings/notifications.html" class="nav-link">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>

                      
                                <div class="mt-auto">

                                </div>
                                <div class="my-4 px-lg-6 position-relative">
                                    <div class="dropup w-full">
                                        <button class="btn-primary d-flex w-full py-3 ps-3 pe-4 align-items-center shadow shadow-3-hover rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="me-3"><img alt="..." src="../../img/people/img-profile.jpg" class="avatar avatar-sm rounded-circle"> 
                                            </span>
                                            <?php
                                             $query = mysqli_query($con, "SELECT * FROM user");
                                             $row = mysqli_fetch_array($query);
                                            echo'
                                            <span class="flex-fill text-start text-sm font-semibold">'.$row['type'].'</span>'
                                            ?>
                                           
                                            </span>
                                            <span>
                                                <i class="bi bi-chevron-expand text-white text-opacity-70"></i>
                                            </span>
                                        </button>
                                        <?php 
                                         $query = mysqli_query($con, "SELECT * FROM user");
                                         $row = mysqli_fetch_array($query);
                                        
                                        echo'
                                       
                                        <div class="dropdown-menu dropdown-menu-end w-full">
                                      
                                            <div class="dropdown-header">
                                                <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                                                
                                                <span class="d-block text-heading font-semibold">'.$row['type'].'</span>
                                            </div>
                                                <div class="dropdown-divider">

                                                </div>
                                                <a class="dropdown-item" href="dashboard.php">
                                                    <i class="bi bi-house me-3"></i>Home 
                                                </a>';
                                                ?>
                                              
                                             
                                        
                                               
                                             
                                                       
                                                        <div class="dropdown-divider">

                                                        </div>
                                                        <a class="dropdown-item" href="../../logout.php"><i class="bi bi-box-arrow-left me-3">

                                                        </i>Logout</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-3 justify-content-center align-items-center mt-6 d-none">
                                                    <div>
                                                        <i class="bi bi-moon-stars me-2 text-warning me-2"></i> 
                                                        <span class="text-heading text-sm font-bold">Dark mode</span></div>
                                                        <div class="ms-auto"><div class="form-check form-switch me-n2">
                                                            <input class="form-check-input" type="checkbox" id="switch-dark-mode">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                   
                                </nav>

                                <div class="flex-lg-1 h-screen overflow-y-lg-auto">
                                    <nav class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3" id="topbar">
                                        <div class="container-fluid"><div class="hstack gap-2">
                                            
                                            <button type="button" class="btn btn-sm btn-square btn-neutral border-dashed shadow-none">
                                                <i class="bi bi-plus-lg"></i></button>
                                        </div>
                                        <form class="form-inline ms-auto me-4 d-none d-md-flex">
                                            <div class="input-group input-group-inline shadow-none"><span class="input-group-text border-0 shadow-none ps-0 pe-3">
                                                <i class="bi bi-search"></i> 
                                            </span>
                                            <input type="text" class="form-control form-control-flush" placeholder="Search" aria-label="Search">
                                        </div>
                                    </form>

                                    <div class="navbar-user d-none d-sm-block">
                                        <div class="hstack gap-3 ms-4">
                                        <div class="dropdown">
                                            <a href="#" class="nav-link px-3 text-base text-muted text-opacity-70 text-opacity-100-hover" id="dropdown-notifications" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-bell-fill">

                                                </i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end px-2" aria-labelledby="dropdown-notifications">
                                                <div class="dropdown-item d-flex align-items-center">
                                                    <h6 class="dropdown-header p-0 m-0 font-semibold">Notifications</h6>
                                                    <a href="#" class="text-sm font-semibold ms-auto">Clear all</a>
                                                </div>
                                                <div class="dropdown-item py-3 d-flex"><div>
                                                    <div class="avatar bg-tertiary text-white rounded-circle">RF</div>
                                                </div>
                                                <div class="flex-fill ms-3"><div class="text-sm lg-snug w-64 text-wrap">
                                                    <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to 
                                                    <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                                </div>
                                                <span class="text-muted text-xs">30 mins ago</span>
                                            </div>
                                        </div>

                                        <div class="dropdown-item py-3 d-flex">
                                            <div><img alt="..." src="img/people/img-1.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to 
                                                    <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                                </div>
                                                    <span class="text-muted text-xs">30 mins ago</span>
                                                </div>
                                            </div>
                                        <div class="dropdown-item py-3 d-flex">
                                            <div>
                                             <img alt="..." src="img/people/img-2.jpg" class="avatar rounded-circle">
                                             </div>
                                            <div class="flex-fill ms-3">
                                          <div class="text-sm lg-snug w-64 text-wrap">
                                              <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a></div>
                                              <span class="text-muted text-xs">30 mins ago</span>
                                                     </div>
                                                     </div>
                                                         <div class="dropdown-item py-3 d-flex">
                                                         <div>
                                                             <div class="avatar bg-success text-white rounded-circle">KW</div></div>
                                                                 <div class="flex-fill ms-3">
                                                                 <div class="text-sm lg-snug w-64 text-wrap"><a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a></div><span class="text-muted text-xs">30 mins ago</span></div></div><div class="dropdown-item py-3 d-flex">
                                                                            <div>
                                                                                <img alt="..." src="img/people/img-4.jpg" class="avatar rounded-circle">
                                                                            </div>
                                                                            <div class="flex-fill ms-3"><div class="text-sm lg-snug w-64 text-wrap">
                                                                                <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a></div><span class="text-muted text-xs">30 mins ago</span></div></div><div class="dropdown-divider"></div><div class="dropdown-item py-2 text-center">
                                                                                    <a href="#" class="font-semibold text-muted text-primary-hover" sty>View all

                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                            <div class="dropdown">
                                                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                                            <div>
                                                            <div class="avatar avatar-sm bg-warning rounded-circle text-white">
                                                                    <img alt="..." src="../../img/people/img-profile.jpg"></div>
                                                                </div>
                                                                <div class="d-none d-sm-block ms-3">
                                                                   
                                                                    <?php
                                                                     $query = mysqli_query($con, "SELECT * FROM user");
                                                                     $row = mysqli_fetch_array($query);
                                                                    echo'
                                                                    <span class="h6">'.$row['type'].'</span>
                                                                    '
                                                                    
                                                                    ?>
                                                                    </div>

                                                                     <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div></a><div class="dropdown-menu dropdown-menu-end"><div class="dropdown-header">
                                                                        <span class="d-block text-sm text-muted mb-1">Signed in as</span>
                                                                        <?php
                                                                         $query = mysqli_query($con, "SELECT * FROM user");
                                                                         $row = mysqli_fetch_array($query);
                                                                         echo' 
                                                                    <span class="d-block text-heading font-semibold">
                                                                        '.$row['type'].'</span>';
                                                                       ?>
                                                                    </div>
                                                                     <div class="dropdown-divider">
                                                                        
                                                                     </div>
                                                                     <a class="dropdown-item" href="dashboard.php">
                                                                        <i class="bi bi-house me-3"></i>Home </a>
                                                                           

   

   
    
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="../../logout.php">
    <i class="bi bi-box-arrow-left me-3">

    </i>Logout</a>
</div>
</div>
</div>
</div>
</div>
</nav>

<header>
    
   


<div class="container-fluid">
        <div class="border-bottom pt-6">
            <div class="row align-items-center">
                <div class="col-sm col-12">
                    <h1 class="h2 ls-tight"><span class="d-inline-block me-3">👋</span>Hi, Admin!</h1>
                </div>
                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    
                </div>
            </div>
            <ul class="nav nav-tabs overflow-x border-0">
                <li class="nav-item"><a href="#" class="nav-link active" style="text-decoration:none;">View all</a></li>
         
            </ul>
        </div>
    </div>
</header>
                                                                <main class="py-6 bg-surface-secondary"><div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel"><div class="offcanvas-header border-bottom py-5 bg-surface-secondary"><h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new project</h5><button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button></div><div class="offcanvas-body vstack gap-5"><div><label class="form-label">Name</label> <input type="text" class="form-control" placeholder="Project name"> <span class="d-block mt-2 text-sm text-muted">Make it unique.</span></div><div><label class="form-label">Description</label> <textarea class="form-control" placeholder="Project description ..." rows="2"></textarea> <span class="d-block mt-2 text-sm text-muted">Make it unique.</span></div><hr class="my-0"><div><label class="form-label">Select view</label><div class="hstack gap-3"><div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view" id="project-view-kanban" checked="checked"> <label class="form-item" for="project-view-kanban"><span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i class="bi bi-kanban" style="font-size:2rem"></i></span></label></div><div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view" id="project-view-list"> <label class="form-item" for="project-view-list"><span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i class="bi bi-view-list" style="font-size:2rem"></i></span></label></div><div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view" id="project-view-table"> <label class="form-item" for="project-view-table"><span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i class="bi bi-table" style="font-size:2rem"></i></span></label></div></div></div><hr class="my-0"><div class="vstack gap-4"><div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" name="projecy-privacy" checked="checked"><div class="pt-1 form-checked-content"><h6 class="mb-1 lh-relaxed">Private</h6><span class="d-block text-muted text-sm"><i class="bi bi-lock-fill me-1"></i> Only you will be able to see this project</span></div></div><div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio" name="projecy-privacy"><div class="pt-1 form-checked-content"><h6 class="mb-1 lh-relaxed">Make it public</h6><span class="d-block text-muted text-sm"><i class="bi bi-people-fill me-1"></i> Everyone in this workspace will be able to see this project</span></div></div></div><hr class="my-0"><div class="row gx-4"><div class="col-md"><div><label class="form-label">Client</label> <select class="form-select"><option>Webpixels</option><option>Apple</option><option>Elrond</option></select></div></div><div class="col-auto align-self-end"><span class="d-inline-block py-3 font-semibold text-muted">or</span></div><div class="col-md-auto align-self-end"><button type="button" class="btn btn-neutral"><i class="bi bi-plus-lg me-2"></i>New client</button></div></div><div class="row gx-4"><div class="col-md-6"><div><label class="form-label">Start date</label><div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i class="bi bi-calendar"></i> </span><input type="text" class="form-control" placeholder="Select date" data-input></div></div></div><div class="col-md-6"><div><label class="form-label">Due date</label><div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i class="bi bi-calendar"></i> </span><input type="text" class="form-control" placeholder="Select date" data-input></div></div></div></div></div><div class="modal-footer py-2 bg-surface-secondary"><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> <button type="button" class="btn btn-sm btn-primary">Save</button></div></div><div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content shadow-3"><div class="modal-header"><div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4"><i class="bi bi-globe"></i></div><div><h5 class="mb-1">Share to web</h5><small class="d-block text-xs text-muted">Publish and share link with anyone</small></div><div class="ms-auto"><div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="checked"> <label class="form-check-label" for="flexSwitchCheckChecked"></label></div></div></div><div class="modal-body"><div class="d-flex align-items-center mb-5"><div><p class="text-sm">Anyone with this link <span class="font-bold text-heading">can view</span></p></div><div class="ms-auto"><a href="#" class="text-sm font-semibold">Settings</a></div></div><div><div class="input-group input-group-inline"><input type="email" class="form-control" placeholder="username" value="https://webpixels.io/your-amazing-link"> <span class="input-group-text"><i class="bi bi-clipboard"></i></span></div><span class="mt-2 valid-feedback">Looks good!</span></div></div><div class="modal-footer"><div class="me-auto"><a href="#" class="text-sm font-semibold"><i class="bi bi-clipboard me-2"></i>Copy link</a></div><button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-sm btn-success">Share file</button></div></div></div></div><div class="container-fluid">
                                                                    
                                                                    <div class="row g-6 mb-6">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col">
                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Doctors</span>
                        <?php
                        include ("../../connection.php");
                         $squery = mysqli_query($con, "SELECT * FROM doc");
                        $num_rows = mysqli_num_rows($squery);

                         echo '<span class="h3 font-bold mb-0"> '.$num_rows.' </span>';   
                        ?>                                       
       
                        
                         
                    </div>


                    <div class="col-auto">
                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"><i class="bi bi-bag-plus"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col"><span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Patients</span>

                    <?php
                        include ("../../connection.php");
                         $squery = mysqli_query($con, "SELECT * FROM patient");
                        $num_rows = mysqli_num_rows($squery);

                         echo '<span class="h3 font-bold mb-0"> '.$num_rows.' </span>';   
                    ?>  
                    </div>


                    <div class="col-auto">
                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle"><i class="bi bi-people"></i></div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Appointments</span> 
                        <?php
                        $appointment = mysqli_query($con, "SELECT * FROM appointment");
                        $count = mysqli_num_rows($appointment);
                        echo'
                        <span class="h3 font-bold mb-0">'.$count.'</span></div>';
                        ?>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle"><i class="bi bi-clock-history"></i></div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Appointments Today</span> 
                  
                    <?php 
                    $now = date('Y-m-d');
                    $query = mysqli_query($con, "SELECT * FROM appointment where scheduleDate = '$now' ");
                    $row = mysqli_num_rows($query);
                        echo '
                        <span class="h3 font-bold mb-0"> '.$row.'  </span>';
                    
                    ?>
                  
                </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle"><i class="bi bi-minecart-loaded"></i></div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

        
    

            
         
      
         
      
        
    </div>

</div>
</div>

</div>
</div>

    <script src="../../js/2main.js"></script></body>
    
<!-- Core Javascripts -->
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Vendor Javascripts -->
        <script src="../../assets/vendor/rellax/rellax.min.js"></script>
        <script src="../../assets/vendor/aos/dist/aos.js"></script>

        <!-- Theme Javascripts -->
        <script src="../../assets/js/theme.js"></script>
</html>