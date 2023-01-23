<?php

    require_once "./../controller/controller_login/controller_login.php";
    require_once "./../controller/controller_index/controller_index.php";
    require_once "./../modal/modal_index/modal_index.php";
    // require_once "./../modal/modal_index/modal_index.php";

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
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="////cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css1/style.css" rel="stylesheet">
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
                        <img class="rounded-circle" src="<?php echo $_SESSION['image'];?>" alt="" style="width: 40px; height: 40px;">
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
                    <input class="form-control bg-dark border-0" type="text" id="searchbar" onkeyup="search_animal()" placeholder="Search">
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
                            <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['image'];?>" alt="" style="width: 40px; height: 40px;">
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
            
            <div class="row">
            <!-- column -->
            .<!-- Sale & Revenue Start -->
            <div class="container pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-music fa-3x text-warning"></i>
                            <div class="ms-3">
                                <p class="mb-2">Songs</p>
                                <h6 class="mb-0"><?php 
                                $test1 = new addsong();
                                $test1->statistique(3);?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-compact-disc fa-3x text-warning"></i>
                            <div class="ms-3">
                                <p class="mb-2">Albums</p>
                                <h6 class="mb-0"><?php 
                                $test1 = new addsong();
                                $test1->statistique(2);?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa-solid fa-users fa-3x text-warning"></i>
                            <div class="ms-3">
                                <p class="mb-2">Singers</p>
                                <h6 class="mb-0"><?php 
                                $test1 = new addsong();
                                $test1->statistique(4);?></h6>
                            </div> 
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-xl-3"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4"> 
                            <i class="fa-solid fa-user-gear fa-3x text-warning"></i> 
                            <div class="ms-3"> 
                                <p class="mb-2">Admin</p> 
                                <h6 class="mb-0"><?php 
                                $test1 = new addsong();
                                $test1->statistique(1);?></h6> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <!-- Sale & Revenue End -->.
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="card-title text-warning">Basic Table</h4>
                            <button type="button" class="btn btn-success" id="addsongs" href="#modal-task" data-bs-toggle="modal">add song</button>
                            <button type="button" class="btn btn-success" id="addsongs" href="#modal-task3" data-bs-toggle="modal">add album</button>
                            <button type="button" class="btn btn-success" id="addsongs" href="#modal-task2" data-bs-toggle="modal">add user</button>
                        </div>
                        <!-- <h6 class="card-subtitle text-danger">Add class <code>.table</code></h6> -->
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>title</th>
                                        <th>name of the artist</th>
                                        <th>album</th>
                                        <th>Words</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $test2 = new addsong();
                                        $test2->addmusique();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->

        <!-- d addsongs -->
        <div class="modal fade mt-5" id="modal-task">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                        <div class="modal-header">
						    <input type="hidden" id="3" name="idd2">
                            <h5 class="modal-title text-danger">Add Music</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div id="body-modal">
                            <div class="modal-body">
                                <label class="form-label">title</label>
                                <input type="text" name="title_art[]" class="form-control text-dark text-dark" style="background-color : #DDDDDD" id="task-title1"/>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">name of the artist</label>
                                <select class="form-select" name="name_art[]" style="background-color : #DDDDDD" id="task-priority">
                                    <option value="">Please select</option>
                                    <?php
                                        $test1 = new addsong();
                                        $test1->adduser();
                                    ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">album</label>
                                <select class="form-select" name="album_art[]" style="background-color : #DDDDDD" id="task-priority">
                                    <option value="">Please select</option>
                                    <?php
                                        $test1 = new addsong();
                                        $test1->addalbum();
                                    ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">date</label>
                                <input type="date" name="date_art[]" class="form-control text-dark" style="background-color : #DDDDDD" id="task-title"/>
                            </div>
                            <!-- <div class="modal-body">
                                <label class="form-label">Status</label>
                                <input type="text" name="status_art" class="form-control text-dark" style="background-color : #DDDDDD" id="task-title4"/>
                            </div> -->
                            <div class="modal-body">
                                <label class="form-label">Words</label>
                                <input type="text" name="words_art[]" class="form-control text-dark" style="background-color : #DDDDDD" id="task-title5"/>
                            </div>
                        </div>
                        <div class="newdiv">

                        </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="savesong" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                                <button type="button" class="btn btn-secondary  task-action-btn"id="plus" ><i class="bi bi-plus-circle"></i></button>
                            </div>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="modal fade mt-3" id="modal-t">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                        <div class="modal-header">
						    <input type="hidden" id="task-idd3" name="idd3">
                            <h5 class="modal-title text-danger">Edit Music</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div id="survey_options">
                            <div class="modal-body">
                                <label class="form-label">title</label>
                                <input type="text" name="edittitle_art" class="form-control text-dark text-dark" style="background-color : #DDDDDD" id="task-titl"/>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">name of the artist</label>
                                <select class="form-select" name="editname_art" style="background-color : #DDDDDD" id="task-priority1">
                                    <option value="">Please select</option>
                                    <?php
                                        $test1 = new addsong();
                                        $test1->adduser();
                                    ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">album</label>
                                <select class="form-select" name="editalbum_art" style="background-color : #DDDDDD" id="task-priorit2">
                                    <option value="">Please select</option>
                                    <?php
                                        $test1 = new addsong();
                                        $test1->addalbum();
                                    ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">date</label>
                                <input type="date" name="editdate_art" class="form-control text-dark" style="background-color : #DDDDDD" id="task-tit"/>
                            </div>
                            <div class="modal-body">
                                <label class="form-label">Words</label>
                                <input type="text" name="editwords_art" class="form-control text-dark" style="background-color : #DDDDDD" id="task-ti"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="edittask" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- f addsongs -->
        <div class="modal fade mt-5" id="show">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">show words</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
						<input type="hidden" id="task-id1" name="idd1">
                        <div class="modal-body">
                            <label class="form-label">words</label>
                            <input type="text" name="wordshow" class="form-control text-dark" style="background-color : #DDDDDD" id="wordss"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- d addsongs -->

        <!-- dubut delet -->
            <div class="modal fade mt-5" id="delet">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                            <!-- Modal -->
                            <div class="modal-header">
                                <input type="hidden" id="task-idd4" name="idd4">
                                <h5 class="modal-title text-danger">Delet Music</h5>
                                <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                            </div>
                            <input type="hidden" id="task-id1" name="idd1">
                            <div style="margin-left:4cm; margin-top:0.5cm; margin-bottom:0.5cm">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="saveedit" class="btn btn-primary task-action-btn" id="task-save-btn">confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- fin dulut -->
        <div class="modal fade mt-5" id="modal-task2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Add Artist</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">name artist</label>
                            <input type="text" name="firstuser" class="form-control text-dark" style="background-color : #DDDDDD" id="task-title"/>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="saveuser" class="btn btn-primary task-action-btn" id="task-save-btn1">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade mt-5" id="modal-task3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="./../controller/controller_index/controller_index.php" method="post" id="form-task">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Add Album</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">namea album</label>
                            <input type="text" name="firstuser1" class="form-control text-dark" style="background-color : #DDDDDD" id="task-title"/>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="savealbum" class="btn btn-primary task-action-btn" id="task-save-btn1">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- f addsongs -->

        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/fe6f2341ca.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
    <script>

       
        function addword(id)
        {
            document.getElementById('task-id1').value = id;
            document.getElementById('wordss').value = document.getElementById("words"+id).getAttribute('data');
        }
        function show(id)
        {
            document.getElementById('task-titl').value = document.getElementById("title" + id).getAttribute('data');
            document.getElementById('task-idd3').value = document.getElementById("id12"+id).getAttribute('data');
            document.getElementById('task-priority1').value = document.getElementById("name1"+id).getAttribute('data');
            document.getElementById('task-priorit2').value = document.getElementById("name"+id).getAttribute('data');
            document.getElementById('task-tit').value = document.getElementById("date"+id).getAttribute('data');
            document.getElementById('task-ti').value = document.getElementById("words"+id).getAttribute('data');
        }

        function showid(id)
        {
            document.getElementById('task-idd4').value = document.getElementById("id13"+id).getAttribute('title');
        }

        function search_animal() {
            let input = document.getElementById('searchbar').value;
            let x = document.getElementsByClassName('carte');
            
            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                }
                else {
                    x[i].style.display=document.getElementById('title');				
                }
            }
        }
    </script>
    <!-- <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

    <!-- Template Javascript -->
    <script>
        document.getElementById("plus").onclick=()=>
        {
            let modalbody=document.getElementById("body-modal")
            let newdiv=document.querySelector(".newdiv")
            newdiv.append(modalbody.cloneNode(true))
            modalbody.append(modalbody)
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>