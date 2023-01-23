<?php

    require_once "./../controller/controller_login/controller_login.php";
    require_once "./../modal/modal_login/modal_login.php";

    if(!$_SESSION['id']){
    header("location: login.php");
    die;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkMusic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css1/style.css" rel="stylesheet">
    <link href="css1/style1.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
               <img src="logo.png" class="img-fluid rounded-normal" alt=""><h3 class="text-warning">MUZIK</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="./../controller/controller_login/imagess/<?php echo $_SESSION['image'];?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo "@";echo $_SESSION['username'];?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active text-light"><i class="bi bi-house me-2"></i>Dashboard</a>
                    <a href="profile.php" class="nav-item nav-link active text-light mt-4"><i class="bi bi-person-circle me-2"></i></i>Profile</a>
                    <a href="tableau.php" class="nav-item nav-link active text-light mt-4"><i class="bi bi-table me-2"></i>Admin</a>
                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a> -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-info mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="./../controller/controller_login/imagess/<?php echo $_SESSION['image'];?>" alt="" style="width: 40px; height: 40px;">
                            
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['first'];echo " "; echo $_SESSION['last'];?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- debut -->
        <form action="./../controller/controller_login/controller_login.php" method="POST" enctype="multipart/form-data">
            <div class="container rounded bg-white w-200">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="./../controller/controller_login/imagess/<?php echo $_SESSION['image'];?>"><input type="file" name="picimage" style="margin-left:2.5cm;" accept="image/png, image/jpg, image/jpeg"><span class="font-weight-bold"><?php echo "@";echo $_SESSION['username'];?></span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                                <input type="hidden" id="task-idd3" name="idd3" value='<?php echo $_SESSION['id'];?>'>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="inpfirst" class="form-control text-white" placeholder="first name" value='<?php echo $_SESSION['first'];?>'></div>
                                <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="inplast" class="form-control text-white" value=<?php echo $_SESSION['last'];?> placeholder="last name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control text-white" placeholder="enter phone number" value='<?php echo $_SESSION['num_tele'];?>'></div>
                                <div class="col-md-12"><label class="labels">Birthdate</label><input type="text" name="inpdate" class="form-control text-white" placeholder="enter address line 1" value='<?php echo $_SESSION['date'];?>'></div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" name="inpemail" class="form-control text-white" placeholder="enter email id" value='<?php echo $_SESSION['email'];?>'></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text" name="inpfirst1" class="form-control text-white" placeholder="country" value=''></div>
                                <div class="col-md-6"><label class="labels">State/Region</label><input type="text" name="inpfirst2" class="form-control text-white" value='' placeholder="state"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="saveeditprofil" type="submit">Save Profile</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        </div>
        <!-- fin -->
        </div>
        <!-- Content End -->
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/fe6f2341ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <!-- <script>
        function shoowid()
        {

        }
    </script> -->
</body>

</html>