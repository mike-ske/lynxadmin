<div class="card card-info">
    <div class="card-header row">
        <h5 class="card-title col-md-6">Available Bookings</h5>

        <div class="card-tools col-md-6 text-right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0" style="overflow: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // get the page id
                if ($id) 
                {
                    $page =  $id;
                }
                else
                {
                    $page = 1;
                }   

                $count = 1;
                $row = paginator($page, 10, $conn, 'bookings');

                foreach ($row as $values) 
                {
                   
                ?>

                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo substr($values["full_name"], 0, 10) . "..."  ?></td>
                        <td><?php echo substr($values['email'], 0, 10) . "..." ?></td>
                        <td><?php echo substr($values['message'], 0, 10) . "..." ?></td>
                        <td><?php echo convertDate($values['created_date']) ?></td>
                        <td class="text-left py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="./?readContact=<?php echo $values['id'] ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteBook" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>

                <?php
                    $count++;
                };
                ?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <!--  ======== START PAGINATION ==========  -->
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info mr-2" id="dataTable_info" role="status" aria-live="polite">
                <?php echo  $_SESSION['liveShow'] ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <!-- == create the pagination == -->
                    <?php
                    if ($page > 1) {
                        $calc = ($page - 1);
                        echo "<li class='paginate_button page-item previous' id='dataTable_previous'>
                                    <a href='./?booking=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                        <i class='fa fa-angle-double-left'></i>
                                    </a>
                                </li>
                                ";
                    }

                    echo paginatorLink(10, './?booking', $conn, 'bookings');

                    $total_pages = nextPage(10, $conn, 'bookings');
                    for ($i = 1; $i < $total_pages; $i++) {
                        $i;
                    }
                    if ($i > $page) {
                        $calc = ($page + 1);
                        echo  "<li class='paginate_button page-item previous' id='dataTable_previous'>
                                        <a href='./?booking=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                        <i class='fa fa-angle-double-right'></i>
                                        </a>
                                </li>";
                    }

                    ?>
                </ul>
            </div>
        </div>
    </div>

    <!--  ======== END PAGINATION ==========  -->
</div>