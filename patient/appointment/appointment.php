
<!doctype html>
<?php
session_start();
?>

<html lang="en" data-theme="dark">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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

    

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
            <div class="container-fluid">
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> 
                <a class="" href="../dashboard/dashboard.php">
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
                            <a class="nav-link" href="appointment.php">
                                <i class="bi bi-terminal"></i>My Appointments</a>
                        </li>

                        
                            
                            <li class="nav-item">
                                <a class="nav-link" href="../account_settings/account_settings.php">
                                    <i class="bi bi-gear"></i> Account Settings</a>
                                    <div class="collapse" id="sidebar-settings">
                                        <ul class="nav nav-sm flex-column"><li class="nav-item">
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

                      
                        <ul class="navbar-nav">
                            <li>
                              
                                <li class="nav-item">
                                    
                                    <li class="nav-item">
                                       
                                        </a>
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
                                            echo'
                                            <span class="flex-fill text-start text-sm font-semibold">'.$_SESSION['fname'] .' '.$_SESSION['lname'] .'</span>'
                                            ?>
                                           
                                            </span>
                                            <span>
                                                <i class="bi bi-chevron-expand text-white text-opacity-70"></i>
                                            </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end w-full">
                                            <div class="dropdown-header">
                                                <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                                                <?php
                                                echo'
                                                <span class="d-block text-heading font-semibold">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span>';
                                                ?>
                                            </div>
                                                <div class="dropdown-divider">

                                                </div>
                                                <a class="dropdown-item" href="../dashboard/dashboard.php">
                                                    <i class="bi bi-house me-3"></i>Home 
                                                </a>
                                                   
                                                       
                                                        <div class="dropdown-divider">

                                                        </div>
                                                        <a class="dropdown-item" href="../../logout.php"><i class="bi bi-box-arrow-left me-3"></i>Logout</a>
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
                                                                                <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a></div><span class="text-muted text-xs">30 mins ago</span></div></div><div class="dropdown-divider"></div><div class="dropdown-item py-2 text-center"><a href="#" class="font-semibold text-muted text-primary-hover">View all

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
                                                                    echo'
                                                                    <span class="h6">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span>
                                                                    '
                                                                    
                                                                    ?>
                                                                    </div>

                                                                     <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div></a><div class="dropdown-menu dropdown-menu-end"><div class="dropdown-header">
                                                                        <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                                                                        <?php
                                                                        echo'
                                                                    <span class="d-block text-heading font-semibold">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</span>';
                                                                    ?>
                                                                    </div>
                                                                     <div class="dropdown-divider"></div>
                                                                     <a class="dropdown-item" href="../dashboard/dashboard.php">
                                                                        <i class="bi bi-house me-3">
                                                                     </i>Home </a>
    
                                                                     <div class="dropdown-divider"></div>
<a class="dropdown-item" href="../../logout.php">
    <i class="bi bi-box-arrow-left me-3">

    </i>Logout</a></div>
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
                    <h1 class="h2 ls-tight">
                        <span class="d-inline-block me-3">Appointment Manager</span>
                    </h1>
                </div>

                <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                    <div class="hstack gap-2 justify-content-sm-end">

                    
                    <?php
                    echo'
                    <button data-bs-target="#offcanvasCreate'.$_SESSION['userid'].'" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas">';
                    ?>
                        <span class="pe-2">
                            <i class="bi bi-plus-square-dotted"></i>
                         </span>
                         <span>Create</span>
                        </button>
                        <?php include "add_modal.php"; ?>
                        <?php include "function.php"; ?>
                     
                   
                   
                      
                </div>
                </div>
            </div>


            <ul class="nav nav-tabs overflow-x border-0">
                <li class="nav-item"><a href="#" class="nav-link active" style="text-decoration:none;">View all</a></li>
                
            </ul>
        </div>
    </div>
</header>



        
    

    
    <div class="container-fluid" style="margin-top:25px; margin-bottom:32px;">
                                                                   
<div class="card">
    <div class="card-header border-bottom">
        <?php
        include ("../../connection.php");
        $squery = mysqli_query($con, "SELECT * FROM appointment where patientid = '".$_SESSION['userid']."'");
        $num_rows = mysqli_num_rows($squery);

         echo '<h5 class="mb-0"> My Appointments  ('.$num_rows.') </h5> ';   
         ?>                                       
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-nowrap" >
            <thead class="table-light">
                <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Appointment Title</th>
                    <th scope="col">Scheduled Date & Time</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            
            <tbody>
               

            <?php
                  $squery = mysqli_query($con, "SELECT *, CONCAT(d.fname, ' ' ,d.lname) as doctorname, CONCAT(scheduleDate, ' ' ,scheduleTime) as DateTime, CONCAT(d.fname, ' ' , d.lname) as doctorname, a.patientid FROM appointment a left join patient p on p.id = a.patientid left join doc d on d.docid = a.doctorid where patientid = '".$_SESSION['userid']."' ");
                while($row = mysqli_fetch_array($squery))
                {
                
                echo'
                <tr>
                    <td>
                  

                    <a class="text-heading font-semibold" href="#">'.$row['doctorname'].'</a>

                    </td>


                    
                    <td>'.$row['appointmentid'].'</td>
                    
                  
                 

                    <td>
                    <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">
                    '.$row['title'].'</span>
                    </td>

                    <td>
                    <span class="badge text-uppercase bg-soft-primary text-primary rounded-pill">
                    '.$row['DateTime'].'</span>
                    </td>
                   
                    <td>
                    <button class="btn btn-sm btn-square btn-neutral text-danger-hover"  data-bs-target="#offcanvasView'.$row['appointmentid'].'" data-bs-toggle="offcanvas">
                    <i class="bi bi-eye">
                    </i>
                    </button>


                    <button class="btn btn-sm btn-square btn-neutral text-danger-hover" data-bs-target="#offcanvasEdit'.$row['appointmentid'].'" data-bs-toggle="offcanvas">
                    <i class="bi bi-pencil">
                    </i>
                    </button>

                   
                  
                    <button class="btn btn-sm btn-square btn-neutral text-danger-hover" data-bs-target="#modalExport'.$row['appointmentid'].'" data-bs-toggle="modal">
                    <i class="bi bi-trash">
                    </i>
                    </button>
                   
                    </td>
                </tr>
            ';
            include "edit_modal.php";
            include "view_modal.php";
            include "delete_modal.php";
            //include "function.php";
            }
            
            ?>
      
      
         
        </tbody> 
        </table>
        
    </div>

</div>
</div>

</div>
</div>

    <script src="../../js/2main.js"></script></body>
    

</html>