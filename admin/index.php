  
<?php require 'header.php' ?>
<?php require 'inc/function.php' ?>
<?php require 'inc/dbconn.php' ?>
<?php require '../redirect.php' ?>


<!-- ***** Preloader Start ***** -->
<!-- <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>   -->
<!-- ***** Preloader End ***** -->

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
                            $id = $_GET['allPost'];
                      
                        ?>
                        <!-- VIEW ALL POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Available Post</h1> 
                        <?php  require 'pages/view_post.php' ?>
                        
                        <?php
                        }
                        else if (isset($_GET['addPost'])) 
                        {
                           
                        ?>

                        <!-- ADD POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Post</h1>
                        <?php  require 'pages/add_post.php' ?>

                        <?php
                        }
                        else if (isset($_GET['category']) )
                        {
                            
                        ?>
                        <!-- Category PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Category Area</h1>
                        <?php  require 'pages/category.php' ?>

                        <?php
                        }
                        elseif (isset($_GET['booking'])) 
                        {
                            $id = $_GET['booking']
                        ?>
                        
                           <!-- BOOKING PAGE -->
                           <h1 class="h3 mb-5 text-gray-800">BOOKING AREA</h1>
                           <?php  require 'pages/booking.php' ?>


                        <?php
                        }
                        else if (isset($_GET['agency'])) 
                        {
                           $id = $_GET['agency'];

                        ?>
                        
                        <!-- AGENCY PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">AGENCY AREA</h1>
                        <?php  require 'pages/agency.php' ?>

                        <?php
                        }
                        else if (isset($_GET['inbox'])) 
                        {
                            $id = $_GET['inbox']
                        ?>
                        
                        <!-- MAILS PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">My Mails</h1>
                        <?php  require 'pages/mail.php' ?>

                        <?php
                        }
                        else if (isset($_GET['notification'])) 
                        {
                            
                        ?>
                        <!-- NOTIFICATION PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Notification Area</h1>
                        <?php  require 'pages/notification.php' ?>

                        <?php
                        }
                        else if (isset($_GET['profile'])) 
                        {
                            
                        ?>

                         <!-- PROFILE PAGE -->
                         <h1 class="h3 mb-5 text-gray-800">Admin Account</h1>
                         <?php  require 'pages/profile.php' ?>
                        <?php
                        }
                        else if (isset($_GET['editPost'])) 
                        {
                           
                        ?>
                        <!-- EDIT POST PAGE -->
                        <h1 class="h3 mb-5 text-gray-800">Edit A Post</h1>
                        <?php  require 'pages/edit_post.php' ?>

                        
                        <?php
                         }
                         else if (isset($_GET['readMail']) )
                         {
                            
                        ?>
                            <!-- EDIT POST PAGE -->
                            <h1 class="h3 mb-5 text-gray-800">Mail Message</h1>
                            <?php  require 'views/read_mail.php' ?>

                        <?php
                            }
                            else if (isset($_GET['readContact']) )
                            {
                        ?>
                            <!-- EDIT POST PAGE -->
                            <h1 class="h3 mb-5 text-gray-800">Contacts Message</h1>
                            <?php  require 'views/read_contact.php' ?>

                        <?php

                            }
                            else if (isset($_GET['readAgency']) )
                            {
                        ?>
                            <!-- EDIT POST PAGE -->
                            <h1 class="h3 mb-5 text-gray-800">Agency Message</h1>
                            <?php  require 'views/read_agency.php' ?>

                        <?php
                          }
                          else 
                          {
                        
                        ?>
                      <!-- MAIN HOME PAGE -->
                      <h1 class="h3 mb-5 text-gray-800">Welcome To Dashboard</h1>
                      <?php  require 'pages/home.php' ?>

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

