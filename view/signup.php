<?php
    require_once "./../controller/controller_signup/controller_signup.php";
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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color : black">

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
                                            <h1 class="h4 text-gray-900 mb-4">page register</h1>
                                        </div>
                                        <form action="./../controller/controller_signup/controller_signup.php" method="POST"  class="user" data-parsley-validate>
                                            <div class="form-group">
                                                <input id="username" type="text" class="form-control form-control-user"
                                                    id="exampleInputEmail"
                                                    placeholder="Enter first name..." name="inpfirst" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="username" type="text" class="form-control form-control-user"
                                                    id="exampleInputEmail"
                                                    placeholder="Enter last name..." name="inplast" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="username" type="email" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address..." name="inpemail" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[a-z]{2,4}$">
                                            </div>
                                            <div class="form-group">
                                                <input id="username" type="tel" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter numero..." name="phone" required>
                                            </div>
                                            <div class="form-group">
                                            <input id="date" type="date" class="form-control form-control-user"
                                                    id="exampleInputDate" name="inpdate" required>
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-user"
                                                 placeholder="Enter Password" name="inppass" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-user"
                                                     placeholder="Confirm password" data-parsley-equalto="#password" data-parsley-equalto-message = "Les deux mots de passe ne correspondent pas."name="inpcpass">
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block" placeholder="Sign Up" name="save">
                                            
                                        </form>
                                        <div class="text-center">
                                        </div>
                                        <div class="text-center pt-2">
                                            <a class="small" href="login.php" name="savecode">Page login</a>
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

    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->

    <!-- BEGIN jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->

    <!-- BEGIN parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->

</body>

</html>