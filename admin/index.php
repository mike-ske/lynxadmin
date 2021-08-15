  
    
<!DOCTYPE html>
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
    <link rel="stylesheet" href="../packed/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="packed/dist/css/adminlte.min.css">
      <!-- summernote -->
    <link rel="stylesheet" href="../packed/plugins/summernote/summernote-bs4.css">

      <!-- sweetAlert2 CSS FILE -->
    <link rel="stylesheet" href="../packed/plugins/sweetalert2/sweetalert2.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="ckeditor/samples/old/sample.css">

        <!--========== FAVICONS ===== -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon//favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">

</head>

<body id="page-top">
 
                <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./" id="logo_sec">
                <div class="sidebar-brand-icon" id="side_logo">
                    <img src="../img/logo.png" alt="" style="filter: drop-shadow(2px 1px 8px black);">
                </div>
                <!-- <div class="sidebar-brand-text mx-3"></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Blog posts
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Posts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Maanage post:</h6>
                        <a class="collapse-item" href="./?addPost">Add Post</a>
                        <a class="collapse-item" href="./?allPost">Vew all Post</a>
                        <a class="collapse-item" href="./?category">Add Category</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin Panel</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage User Data:</h6>
                        <a class="collapse-item" href="./?booking">All Bookings</a>
                        <a class="collapse-item" href="./?agency">Agency Record</a>
                        <a class="collapse-item" href="./?inbox">Mail Inbox</a>
                        <a class="collapse-item" href="./?notification">Notifications</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Accounts
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin Account</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings:</h6>
                        <a class="collapse-item" href="./?profile">Profile</a>
                        
                       
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

</ul>        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            
                            
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Notification
            </h6>
            <h6 class='text-center m-5'>No New Notification Post found</h6>
                <a class='dropdown-item d-flex align-items-center' href='./?notification'>
                        <div class='mr-3'>
                            <div class='icon-circle bg-primary'>
                                <i class='fas fa-file-alt text-white'></i>
                            </div>
                        </div>
                        <div>
                            <div class='small text-gray-500'>15 August 2021 02:07:23am</div>
                            <div class='small text-gray-300'>MISOCOL NIG LTD</div>
                            <span class='font-weight-bold'>Conditional exe...</span>
                        </div>
                    </a>
                
                                    <a class="dropdown-item text-center small text-gray-500" href="./?notification">Show All Alerts</a>
        </div>
    </li>

    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            
                            
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <h6 class='text-center m-5'>No New Notification Post found</h6>            <a class="dropdown-item text-center small text-gray-500" href="./?notification">Read More Messages</a>
        </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                Monatech            </span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="./?profile">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                  <div class="container-fluid">

                        <!-- =================== START ALL PHP BACKEND CODE HERE -->
                                            <!-- NOTIFICATION PAGE -->

                      <!-- INBOX PAGE -->
                      <h1 class="h3 mb-5 text-gray-800">Notification Area</h1>
                          <!-- /.card -->
                          <div class="card card-info">
                              
                              <div class="card-body p-0">
                                  <!-- /.col -->
                                  <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                          <div class="card-header">
                                            <h3 class="card-title">New Notifications</h3>
                                            <h6 class="card-title">Found 1  New Messages </h6>
                                          </div>
                                            <!-- /.card-tools -->
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body p-0">
                                            
                                            <div class="table-responsive mailbox-messages">
                                              <table class="table table-hover table-striped">
                                                <tbody>
                                                       
                                                      <a href='./?agency' class='dropdown-item mt-2 mb-2'><i class='fas fa-users mr-2'></i>1 new agency <span style='color:#858796;font-size:14px;margin-left:25px'>an hour ago</span></a>                                                      
                                                </tbody>
                                                </div>
                                                  <!-- /.card -->
                                              </table>

                                            </div>
                             
                                            <!-- /.mail-box-messages -->
                                          </div>
                                          <!-- /.card-body -->
                                       
                                        </div>
                                        <!-- /.card -->
                                  </div>
                                  <!-- /.col -->
                              </div>
                        
                           
                        
                        <!-- =================== END ALL PHP BACKEND CODE HERE -->

                  </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; lynxlaboratories 2021 Built with love by <strong>Micah Web Developer @monaTech</strong></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Delete POST Modal-->
<div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Post?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?allPost" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_post.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>18</b><br />
" >Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete POST Modal-->

<!-- Delete Bookings Modal-->
<div class="modal fade" id="deleteBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Booking?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?booking" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_booking.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>38</b><br />
" >Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete Bookings Modal-->

<!-- Delete agent Modal-->
<div class="modal fade" id="deleteAgent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete Agency?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?agency" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_agent.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>58</b><br />
">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete agent Modal-->

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #333;">Are you sure you want to delete mail?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to delete or press cancel to terminate session.</div>
            <div class="modal-footer">
                <a class="btn btn-secondary" href="./?inbox" type="button" data-dismiss="modal">Cancel</a>
                <a class="btn btn-primary" href="inc/delete_mail.php?id=<br />
<b>Notice</b>:  Undefined variable: value in <b>C:\xampp\htdocs\lynxadmin\admin\footer.php</b> on line <b>78</b><br />
">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal-->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <form action="inc/logout.php" method="post">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="crsf" value="$2y$10$ewlgdnVo.kPbdGR8jQhVget7a6/ZnCyaE.sxxIFq29yp0YLx33L1q">
                    <button type="submit" class="btn btn-primary" name="send">Logout</button>
               </form>
                
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../packed/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../packed/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../packed/dist/js/adminlte.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="../packed/vendor/jquery/jquery.min.js"></script>
<script src="../packed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ========================== PLUGINS SECTIONS =================================== -->
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Summernote -->
<script src="../packed/plugins/summernote/summernote-bs4.min.js"></script>


<!-- SWEAT ALERT scripts -->
<script src="../packed/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../packed/plugins/toastr/toastr.min.js"></script>
<script src="js/main.js"></script>


<script>
    // window.addEventListener('load',function () {
    //      //AJAX REQ
    //     xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function () {
    //         if(this.readyState == 4 && this.status == 200)
    //         {
    //             document.querySelector('#ajx_1').innerHTML = this.responseText;
    //             document.querySelector('#ajx_2').innerHTML = this.responseText;
    //         }
    //     }
    //     xhttp.open("GET", "inc/noteEngine.php", true);
    //     xhttp.send();
    // });
   
</script>


<script src="../ckeditor5/ckeditor.js"></script>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>


<!-- <script>
	CKEDITOR.replace( 'textarea' );
</script> -->

<script>
	// ClassicEditor
	// 	.create( document.querySelector( '#textarea' ), {
	// 		// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    //         autoParagraph: false,
    //         enterMode: 2
	// 	} )
	// 	.then( editor => {
	// 		window.editor = editor;
	// 	} )
	// 	.catch( err => {
	// 		console.error( err.stack );
	// 	} )
</script>

<script>
    $(function() {
        // Summernote
        $('.textarea').summernote("code").replace(/<\/p>/gi, "\n")
                                        .replace(/<br\/?>/gi, "\n")
                                        .replace(/<\/?[^>]+(>|$)/g, "")
        ;
    })
</script>



</body>

</html>