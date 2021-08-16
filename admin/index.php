  
<?php require 'header.php' ?>
<?php require 'inc/function.php' ?>
<?php require 'inc/dbconn.php' ?>

<?php 

if (!isset($_SESSION['username']) && !isset($_SESSION['email']) ) 
{
    // header('location: auth/login.php');
}



?>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <?php require 'sidebar.php' ?>
          
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <?php require 'nav.php' ?>
                <!-- End of Topbar -->                
                <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                        <!-- =================== START ALL PHP BACKEND CODE HERE -->
                         <!-- NOTIFICATION PAGE -->
                        <?php

                        if (isset($_GET['allPost'])) 
                        {
                        ?>
                        <!-- VIEW ALL POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">VIEW ALL POST AREA</h1> 
                        
                        
                        <?php
                        }
                        else if (isset($_GET['addPost'])) 
                        {
                           
                        ?>

                        <!-- ADD POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">ADD POST AREA</h1>

                        <?php
                        }
                        else if (isset($_GET['category']) )
                        {
                            
                        ?>
                        <!-- Category PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Category AREA</h1>

                        <?php
                        }
                        elseif (isset($_GET['booking'])) 
                        {

                        ?>
                           <!-- BOOKING PAGE -->
                           <h1 class="h3 mb-5 text-gray-800">BOOKING AREA</h1>



                        <?php
                        }
                        else if (isset($_GET['agency'])) 
                        {
                           

                        ?>
                        
                        <!-- AGENCY PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">AGENCY AREA</h1>


                        <?php
                        }
                        else if (isset($_GET['inbox'])) 
                        {
                            
                        ?>
                        
                            <!-- MAILS PAGE -->
                            <h1 class="h3 mb-5 text-gray-800">MAILS AREA</h1>


                        <?php
                        }
                        else if (isset($_GET['notification'])) 
                        {
                            
                        ?>
                        <!-- NOTIFICATION PAGE -->
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
                            </div>

                        <?php
                        }
                        else if (isset($_GET['profile'])) 
                        {
                            
                        ?>

                         <!-- PROFILE PAGE -->
                         <h1 class="h3 mb-5 text-gray-800">PROFILE AREA</h1>

                        <?php
                        }
                        else if (isset($_GET['editPost'])) 
                        {
                           
                        ?>
                        <!-- EDIT POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">EDIT AREA</h1>

                        <?php
                          }
                          else if (isset($_SESSION['REQUEST_URI']) == '/lynxadmin/' )
                          {
                             header('location: errors/404.php');
                        ?>
                        
                        <?php
                          }
                          else 
                          {
                        ?>
                      <!-- MAIN HOME PAGE -->
                      <h1 class="h3 mb-5 text-gray-800">Welcome To Dashboard</h1>
                           

                           
                        <?php };?>
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
<?php require 'modals.php' ?>
<?php require 'footer.php' ?>

