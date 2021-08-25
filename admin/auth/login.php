<?php session_start() ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="lynxlaboratories">
    <meta name="author" content="lynxlaboratories">

    <title>Lynx Admin | Lynxlab</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../packed/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="packed/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../packed/plugins/summernote/summernote-bs4.css">

    <!-- sweetAlert2 CSS FILE -->
    <link rel="stylesheet" href="../../packed/plugins/sweetalert2/sweetalert2.min.css">

    <!-- Custom styles for this page -->
    <link href="./../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!--========== FAVICONS ===== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon//favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">


</head>

<body class="bg-gradient-primary">

    <div class="container" style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);">

        <!-- Outer Row -->
        <div class="row justify-content-center">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image text-center">
                                <img src="../img/logo.png" alt="">
                            </div>
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image bg_img">
                                <img src="../img/admin_logo.jpeg" alt="" 
                                     style="height: 16rem;position: relative;top: 50%;transform: translate(-50%, -50%);left: 50%;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="../inc/manage_login" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="aggree" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block">
                                     
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <span class="col-lg-6 d-none d-lg-block text-center text-gray-300 small">Admin system managed and secured by <a href="http://www.lynxsite.herokuapp.com" target="__blank" style="text-decoration: underline;">lynxlaboratories</a> Terms and conditions apply</span>
        </div>

    </div>

    <!-- jQuery -->
    <script src="../../packed/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../packed/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../packed/dist/js/adminlte.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="../../packed/vendor/jquery/jquery.min.js"></script>
    <script src="../../packed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- ========================== PLUGINS SECTIONS =================================== -->
    <!-- Core plugin JavaScript-->
    <script src="./../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./../js/sb-admin-2.min.js"></script>

    <!-- Summernote -->
    <script src="../../packed/plugins/summernote/summernote-bs4.min.js"></script>


    <!-- SWEAT ALERT scripts -->
    <script src="../../packed/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../../packed/plugins/toastr/toastr.min.js"></script>
    <script src="../../js/main.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../packed/dist/js/demo.js"></script>
 


    <?php
        if (isset($_SESSION['status']) && isset($_SESSION['status_code'])) 
        {
    ?>
     <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: "<?php echo $_SESSION['status_code']?>",
            text: "<?php echo $_SESSION['status']?>",
            title: "<?php echo $_SESSION['status_title']?>",
            showConfirmButton: true,
        });
    </script>
    <?php 
        unset($_SESSION['status']);
    }; 
    ?>


</body>

</html>