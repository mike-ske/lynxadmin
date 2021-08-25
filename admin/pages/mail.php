<div class="col-md-12 mb-5">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search Mail">
                    <div class="input-group-append">
                        <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0 scroll">
            <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                    <tbody>
                        <?php
                        // get the page id
                        if ($id) {
                            $page = $id;
                        } else {
                            $page = 1;
                        }
                        $row = paginator($page, 10, $conn, 'mails');
                        foreach ($row as $values) 
                        {

                        ?>

                            <tr>
                                <td class="mailbox-id">
                                    <a href="#" data-toggle="modal" data-target="#deleteMail"  class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>
                                <td class="mailbox-name"><a href="./?readMail=<?php echo $values['id'] ?>"><?php echo $values['email'] ?></a></td>
                                <td class="mailbox-subject"><?php echo substr($values['message'], 0, 30). "..." ?></td>
                                <td class="mailbox-date"><?php echo convertDate($values['created_date']) ?></td>
                            </tr>
                        <?php

                        };
                        ?>

                    </tbody>
                </table>
                <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer p-0">
            <div class="mailbox-controls">
                <!--  ======== START PAGINATION ==========  -->
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info ml-2" id="dataTable_info" role="status" aria-live="polite">
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
                                                <a href='./?inbox=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                                    <i class='fa fa-angle-double-left'></i>
                                                </a>
                                            </li>
                                            ";
                                }

                                echo paginatorLink(10, './?inbox', $conn, 'mails');

                                $total_pages = nextPage(10, $conn, 'mails');
                                for ($i = 1; $i < $total_pages; $i++) 
                                {
                                    $i;
                                }
                                if ($i > $page) {
                                    $calc = ($page + 1);
                                    echo  "<li class='paginate_button page-item previous' id='dataTable_previous'>
                                                    <a href='./?inbox=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                                                    <i class='fa fa-angle-double-right'></i>
                                                    </a>
                                            </li>";
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.float-right -->
            </div>
        </div>
    </div>
    <!-- /.card -->
</div>