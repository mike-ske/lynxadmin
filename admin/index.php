  
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
                           
                        <!-- Content Row -->
                        <div class="row">

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Earnings (Monthly)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Earnings (Annual)</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Pending Requests</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Joined Agents</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <div class="col-sm-12 col-md-6">
                                    <div id="dataTable_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 220px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 332px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 160px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 77px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 137px;">Salary</th></tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--  ======== START PAGINATION ==========  -->
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--  ======== END PAGINATION ==========  -->

                               
                      </div>

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

