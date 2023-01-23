<?php
    require_once "./../controller/controller_login/controller_login.php";
    require_once "./../controller/controller_signup/controller_signup.php";
    require_once "./../controller/controller_Forgot_Password/controller_Forgot_Password.php";

    if(isset($_SESSION['id'])){
        header("location: index.php");
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body style= "background-color : black">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <img class="col-lg-6 d-none d-lg-block" src="photo1.jpg" alt="my_photo">
                                <div class="col-lg-6" style="padding-top : 150px">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <?php if (isset($_SESSION['msg_ver1'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['msg_ver1'];
                                                        unset( $_SESSION['msg_ver1']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['how2'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['msg_ver1'];
                                                        unset( $_SESSION['msg_ver1']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['how1'])){?>
                                                <div class="alert alert-danger" role="alert">
                                                <?php    echo $_SESSION['how1'];
                                                        unset( $_SESSION['how1']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['how3'])){?>
                                                <div class="alert alert-danger" role="alert">
                                                <?php    echo $_SESSION['how1'];
                                                        unset( $_SESSION['how1']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['how'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['how'];
                                                        unset( $_SESSION['how']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['message'])){?>
                                                <div class="alert alert-danger" role="alert">
                                                <?php    echo $_SESSION['message'];
                                                        unset( $_SESSION['message']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['message_o_ver'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['message_o_ver'];
                                                        unset( $_SESSION['message_o_ver']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['msg_ver1'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['msg_ver1'];
                                                        unset( $_SESSION['msg_ver1']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form class="user" action="./../controller/controller_login/controller_login.php" method="POST" data-parsley-validate>
                                            <div class="form-group">
                                                <input id="username" name="logemail" type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address..." required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[a-z]{2,4}$" required pattern="[A-Za-z0-9._%+-]">
                                            </div>
                                            <div class="form-group">
                                                <input id="password" name="logpass" type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                                                Login
                                            </button>
                                        </form>
                                        <div class="text-center pt-2">
                                            <a class="small" href="./Forgot_Password.php">Forgot Password?</a>
                                        </div> 
                                        <div class="text-center pt-2">
                                            <a class="small" href="signup.php">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>