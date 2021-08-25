      <!-- Content Row -->
      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Total Post</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo getTotalRecord($conn, 'post')?></div>
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
                                  Total Joined Agents</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo getTotalRecord($conn, 'agency')?></div>
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
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Bookings
                              </div>
                              <div class="row no-gutters align-items-center">
                                  <div class="col-auto">
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo getTotalRecord($conn, 'bookings')?></div>
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
                              Total Mails </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo getTotalRecord($conn, 'mails')?></div>
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
                  <div class="col-sm-12 scroll">
                      <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                          <thead>
                              <tr role="row">
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Company</th>
                                  <th>Phone</th>
                                  <th>Message</th>
                                  <th>Date Created</th>

                              </tr>
                          </thead>

                          <tbody>
                              <?php
                                
                                $count = 1;
                                $row = getTotalAgent($conn, 10);

                                foreach ($row as $values) {

                                ?>

                                  <tr>
                                      <td><?php echo $count ?></td>
                                      <td><?php echo $values["name"] ?></td>
                                      <td><?php echo $values["email"] ?></td>
                                      <td><?php echo $values["company"] ?></td>
                                      <td><?php echo $values["phone"] ?></td>
                                      <td><?php echo substr($values['message'], 0, 20) . "..." ?></td>
                                      <td><?php echo convertDate($values['created_date']) ?></td>

                                  </tr>

                              <?php
                                    $count++;
                                };
                                ?>

                          </tbody>
                      </table>
                  </div>
              </div>
              <!--  ======== START PAGINATION ==========  -->
            
              <!--  ======== END PAGINATION ==========  -->
          </div>
      </div>